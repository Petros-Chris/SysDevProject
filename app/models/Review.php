<?php
namespace app\models;

use PDO;
use PDOException;

class Review extends \app\core\Model
{
    public $review_id;
    public $product_id;
    public $customer_id;
    public $rating;
    public $description;
    public $image_link;
    public $timestamp;

    public function insert()
    {
        $SQL = 'INSERT INTO review(rating, description, image_link) VALUES (:rating, :description, :image_link)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['rating'=>$this->rating,
            'description'=> $this->description,
            'image_link'=>$this->image_link,
            'timestamp'=>$this->timestamp]);
    }

    public function get($email)
    {
        $SQL = 'SELECT * FROM review WHERE email = :email';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['email' => $email]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Customer');
        return $STMT->fetch();
    }

    public function getById($customer_id)
    {
        $SQL = 'SELECT * FROM Customer WHERE customer_id = :customer_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Customer');
        return $STMT->fetch();
    }

    public function update()
    {
        $SQL = 'UPDATE Customer SET first_name = :first_name, last_name = :last_name, email = :email, password_hash = :password_hash WHERE customer_id = :customer_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute((array) $this);
    }




    // function delete()
    // {
    //     //change anything but the PK
    //     $SQL = 'UPDATE user SET active = :active WHERE user_id = :user_id';
    //     $STMT = self::$_conn->prepare($SQL);
    //     $data = ['user_id' => $this->user_id, 'active' => 0];
    //     $STMT->execute($data);
    // }
}