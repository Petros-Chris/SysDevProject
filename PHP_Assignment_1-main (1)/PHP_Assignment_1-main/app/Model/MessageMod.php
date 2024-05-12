<?php
namespace app\Model;

class MessageMod {
    private $message;
    private $email;
    private $IP;

    public function __construct($email, $message, $IP) {
        
        $this->email = $email;
        $this->message = $message;
        $this->IP = $IP;
    }

    public static function read() {
        $messages = file(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'messages.json');
        return $messages;
    }

    public function write() {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'messages.json';
    
        $message = json_encode([
            'email' => $this->email,
            'message' => $this->message,
            'IP' => $this->IP
        ]);
    
        $file = fopen($filePath, 'a');
        if ($file === false) {
            die('Error opening file.');
        }
    
        flock($file, LOCK_EX);
    
        fwrite($file, $message . PHP_EOL);
    
        flock($file, LOCK_UN);
        fclose($file);
    }
    
    
    
}
?>
