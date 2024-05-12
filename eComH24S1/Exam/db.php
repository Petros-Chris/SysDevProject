<?php

$dbHost = 'localhost';
$dbName = 'bulletin_board'; 
$dbUser = 'your_database_username';
$dbPass = 'your_database_password';

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Autoload classes
spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    require_once __DIR__ . "/../$className.php";
});

// Create an instance of the Post model
$postModel = new \app\models\Post($db);
