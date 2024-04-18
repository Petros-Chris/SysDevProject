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

    //implement CRUD

    //insert
    public function insert()
    {
        //define the SQL query
        $SQL = 'INSERT INTO Customer(first_name, last_name, email, password_hash) VALUES (:first_name, :last_name, :email, :password_hash)';
        //prepare the statement
        $STMT = self::$_conn->prepare($SQL);
        //execute
        $STMT->execute(
            ['first_name'=>$this->first_name,
            'last_name'=> $this->last_name,
            'email'=>$this->email,
            'password_hash'=>$this->password_hash]);


    }

    //get
    public function get($email)
    {
        $SQL = 'SELECT * FROM Customer WHERE email = :email';//define the SQL
        $STMT = self::$_conn->prepare($SQL);//prepare
        $STMT->execute(['email' => $email]);//run
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
        return $STMT->fetch();//fetch
    }

    public function getById($user_id)
    {
        $SQL = 'SELECT * FROM user WHERE user_id = :user_id';//define the SQL
        $STMT = self::$_conn->prepare($SQL);//prepare
        $STMT->execute(['user_id' => $user_id]);//run
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
        return $STMT->fetch();//fetch
    }

    //update
    public function update()
    {
        //change anything but the PK
        $SQL = 'UPDATE user SET username = :username, password_hash = :password_hash WHERE user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute((array) $this);
    }


    //delete - this is a special delete to deactivate accounts
    function delete()
    {
        //change anything but the PK
        $SQL = 'UPDATE user SET active = :active WHERE user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $data = ['user_id' => $this->user_id, 'active' => 0];
        $STMT->execute($data);
    }
}