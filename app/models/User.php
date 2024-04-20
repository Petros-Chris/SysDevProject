<?php
namespace app\models;

use PDO;
use PDOException;

class User extends \app\core\Model
{
    public $customer_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password_hash;

    public function insert()
    {
        $SQL = 'INSERT INTO Customer(first_name, last_name, email, password_hash) VALUES (:first_name, :last_name, :email, :password_hash)';

        $STMT = self::$_conn->prepare($SQL);

        $STMT->execute(
            ['first_name'=>$this->first_name,
            'last_name'=> $this->last_name,
            'email'=>$this->email,
            'password_hash'=>$this->password_hash]);
    }

    public function get($email)
    {
        $SQL = 'SELECT * FROM Customer WHERE email = :email';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['email' => $email]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        return $STMT->fetch();
    }
}