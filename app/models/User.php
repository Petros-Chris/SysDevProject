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
}