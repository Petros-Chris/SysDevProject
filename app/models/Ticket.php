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

    public $ticket_status_text;

    public $customer_information;
    
    public $extra_customer_information;

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

    public function getAll()
    {
        $SQL = 'SELECT * FROM ticket';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
        return $STMT->fetchAll();
    }

    public function get($email)
    {
        $SQL = 'SELECT * FROM Customer WHERE email = :email';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['email' => $email]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        return $STMT->fetch();
    }

    public function getId($ticket_id)
    {
        $SQL = 'SELECT * FROM ticket WHERE ticket_id = :ticket_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['ticket_id' => $ticket_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
        return $STMT->fetch();
    }
}