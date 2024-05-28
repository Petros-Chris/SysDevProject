<?php
namespace app\models;

use PDO;
use PDOException;

class TicketMessage extends \app\core\Model
{
    public $message_id;
    public $ticket_id;
    public $user_id;
    public $message;
    public $image_link;
    public $timestamp;
    public $user_information;

    public function insert()
    {
        $SQL = 'INSERT INTO ticket_message(ticket_id, user_id, message) VALUES (:ticket_id, :user_id, :message)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            [
                'ticket_id' => $this->ticket_id,
                'user_id' => $this->user_id,
                'message' => $this->message
            ]
        );
    }

    public function getMessageFromTicketId($ticket_id)
    {
        $SQL = 'SELECT * FROM ticket_message WHERE ticket_id = :ticket_id ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['ticket_id' => $ticket_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\TicketMessage');
        return $STMT->fetchAll();
    }
}