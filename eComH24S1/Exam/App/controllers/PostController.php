<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Post;

class PostController extends Controller
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new Post();
    }

    public function index()
    {
        $posts = $this->postModel->getAllPosts();
        $this->view('index', ['posts' => $posts]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form submission
            $message = $_POST['message'];
            $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $postId = $this->postModel->createPost($message, $passwordHash);
            if ($postId) {
                header('Location: /Post/index');
                exit();
            } else {
                $this->view('error', ['message' => 'Error creating post.']);
            }
        } else {
            $this->view('create');
        }
    }

    public function edit($postId)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $this->postModel->getPostById($postId);
            $password = $_POST['password'];
            if (password_verify($password, $post['password_hash'])) {
                $message = $_POST['message'];
                $this->postModel->updatePost($postId, $message, $post['password_hash']);
                header('Location: /Post/index'); 
                exit();
            } else {
                $this->view('error', ['message' => 'Incorrect password.']);
            }
        } else {
            $post = $this->postModel->getPostById($postId);
            $this->view('edit', ['post' => $post]);
        }
    }

    public function delete($postId)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = $this->postModel->getPostById($postId);
            $password = $_POST['password'];
            if (password_verify($password, $post['password_hash'])) {
                $this->postModel->deletePost($postId);
                header('Location: /Post/index'); 
                exit();
            } else {
                $this->view('error', ['message' => 'Incorrect password.']);
            }
        } else {
            $post = $this->postModel->getPostById($postId);
            $this->view('delete', ['post' => $post]);
        }
    }
}
