<?php
namespace app\models;

use PDO;
use PDOException;

class Customer extends \app\core\Model
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