<?php

namespace app\Controller;

use app\Model\MessageMod;

require_once '../Model/MessageMod.php'; 

class MessageController {

    public function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? ''; 
            $message = $_POST['message'] ?? '';
            $IP = $_SERVER['REMOTE_ADDR'];

            $messageModel = new MessageMod($email, $message, $IP);

            $messageModel->write();

            header('Location: /app/Views/Contact/Contact_us.php?success=1');
            exit();
        }
    }
}

$messageController = new MessageController();
$messageController->submit();
?>





