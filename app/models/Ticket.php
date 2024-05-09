<?php
namespace app\models;

use PDO;
use PDOException;

class Ticket extends \app\core\Model
{
    public $ticket_id;
    public $product_id;
    public $customer_id;
    public $issue;
    public $issue_description;
    public $ticket_status;
    public $timestamp;

    public function insert()
    {
        $SQL = 'INSERT INTO ticket(product_id, customer_id, issue, issue_description, ticket_status) VALUES (:product_id, :customer_id, :issue, :issue_description, 0)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            [
                'product_id' => $this->product_id,
                'customer_id' => $this->customer_id,
                'issue' => $this->issue,
                'issue_description' => $this->issue_description
            ]
        );
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