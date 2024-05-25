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
    public $issue_title;
    public $issue_description;
    public $ticket_status;
    public $timestamp;

    public $ticket_status_text;

    public $customer_information;

    public $extra_customer_information;

    public function insert()
    {
        $SQL = 'INSERT INTO ticket(product_id, customer_id, issue, issue_title, issue_description, ticket_status) VALUES (:product_id, :customer_id, :issue, :issue_title, :issue_description, 0)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            [
                'product_id' => $this->product_id,
                'customer_id' => $this->customer_id,
                'issue' => $this->issue,
                'issue_title' => $this->issue_title,
                'issue_description' => $this->issue_description
            ]
        );
    }

    public function update()
    {
        $SQL = 'UPDATE ticket SET ticket_status = :ticket_status WHERE ticket_id = :ticket_id';
        $STMT = self::$_conn->prepare($SQL);

        $STMT->execute([
            ':ticket_id' => $this->ticket_id,
            ':ticket_status' => $this->ticket_status
        ]);
        $STMT->execute();
    }

    public function getAll()
    {
        $SQL = 'SELECT * FROM ticket ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
        return $STMT->fetchAll();
    }

    public function getAllByCustomerId($customer_id)
    {
        $SQL = 'SELECT * FROM ticket WHERE customer_id = :customer_id ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
        return $STMT->fetchAll();
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