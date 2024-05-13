<?php
namespace app\models;

use PDO;
use PDOException;

class Order extends \app\core\Model
{
    public $order_id;
    public $product_id;
    public $customer_id;
    public $address;
    public $total;
    public $status;
    public $timestamp;
    public $quantity;
    public $price;

    public function insertOrder_Customer()
    {
        $SQL = 'INSERT INTO customer_order(customer_id, address, total, status) VALUES (:customer_id, :address, :total, 0)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'customer_id' => $this->customer_id,
            'address' => $this->address,
            'total' => $this->total
        ]);
        return self::$_conn->lastInsertId(); // Capture and return the order ID
    }

    public function insertItem_Order()
    {
        $SQL = 'INSERT INTO item_order(order_id, product_id, quantity, price) VALUES (:order_id, :product_id, :quantity, :price)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'price' => $this->price
        ]);
    }

    public function getAll()
    {
        $SQL = 'SELECT * FROM customer_order';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
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

