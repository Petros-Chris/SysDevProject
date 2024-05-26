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
    public $postal_code;
    public $state;
    public $total;
    public $status;
    public $timestamp;
    public $quantity;
    public $price;
    public $customer_information;
    public $product_information;
    public $statusText;
    public $items_bought_each_order;

    public function insertOrder_Customer()
    {
        $SQL = 'INSERT INTO customer_order(customer_id, address, postal_code, state, total, status) VALUES (:customer_id, :address, :postal_code, :state, :total, 0)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'customer_id' => $this->customer_id,
            'address' => $this->address,
            'total' => $this->total,
            'postal_code' => $this->postal_code,
            'state' => $this->state
        ]);
        return self::$_conn->lastInsertId();
    }

    public function insertItem_Order()
    {
        try {
            $SQL = 'INSERT INTO order_item(order_id, product_id, quantity, price) VALUES (:order_id, :product_id, :quantity, :price)';
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute([
                'order_id' => $this->order_id,
                'product_id' => $this->product_id,
                'quantity' => $this->quantity,
                'price' => $this->price
            ]);
        } catch (PDOException $e) {
            die("Error inserting item order: " . $e->getMessage());
        }
    }

    public function getAllOrders()
    {
        $SQL = 'SELECT * FROM customer_order';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

    public function getOrdersByCustomerId($customer_id)
    {
        $SQL = 'SELECT * FROM customer_order WHERE customer_id = :customer_id ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

       public function getCustomerOrderInformationById($customer_id)
    {
        $SQL = 'SELECT * FROM customer_order WHERE customer_id = :customer_id ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetch();
    }

    public function getAllOrderItems()
    {
        $SQL = 'SELECT * FROM order_item';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();

    }

    public function getAllOrderItemsFromCustomer($order_id)
    {
        $SQL = 'SELECT * FROM order_item WHERE order_id = :order_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['order_id' => $order_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();

    }

    public function getItemsPerOrder($order_id)
    {
        $SQL = 'SELECT * FROM order_item where order_id = :order_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['order_id' => $order_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

    public function getLatestOrderFromCustomer($customer_id)
    {
        $SQL = 'SELECT * FROM customer_order where customer_id = :customer_id ORDER BY timestamp DESC LIMIT 1';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetch();
    }

    public function get($email)
    {
        $SQL = 'SELECT * FROM Customer WHERE email = :email';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['email' => $email]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        return $STMT->fetch();
    }

    public function getId($customer_id)
    {
        $SQL = 'SELECT * FROM ticket WHERE ticket_id = :ticket_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['ticket_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Ticket');
        return $STMT->fetch();
    }

    public function getMultiFilter($type, $type2, $type3, $customer_id, $filter)
    {
        $SQL ="SELECT * FROM customer_order WHERE customer_id = :customer_id
        AND ($type LIKE :$type OR $type2 LIKE :$type2 OR $type3 LIKE :$type3)";
        
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            "$type" => '%' . $filter . '%',
            "$type2" => '%' . $filter . '%',
            "$type3" => '%' . $filter . '%',
            "customer_id" => $customer_id
        ]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }
}

