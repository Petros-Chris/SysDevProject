<?php
namespace app\models;

use PDO;
use PDOException;

class Employee extends \app\core\Model
{
    public $employee_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password_hash;
    // public $email_activated;
    public $admin;

    public function insert()
    {
        $SQL = 'INSERT INTO employee(first_name, last_name, email, password_hash, admin) VALUES (:first_name, :last_name, :email, :password_hash, :admin)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['first_name'=>$this->first_name,
            'last_name'=> $this->last_name,
            'email'=>$this->email,
            'password_hash'=>$this->password_hash,
            'admin'=>$this->admin]);
    }

    public function get($email)
    {
        $SQL = 'SELECT * FROM employee WHERE email = :email';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['email' => $email]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Employee');
        return $STMT->fetch();
    }
}