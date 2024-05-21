<?php
namespace app\models;

use PDO;
use PDOException;

class Wishlist extends \app\core\Model
{
    public $product_id;
    public $customer_id;
    public $customer;
    public $product;

    public function insert()
    {
        $SQL = 'INSERT INTO wishlist(product_id, customer_id) VALUES (:product_id, :customer_id)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['product_id'=>$this->product_id,
            'customer_id'=>$this->customer_id]);
    }

    public function getAllHearts($customer_id)
    {
        $SQL = 'SELECT * FROM wishlist WHERE customer_id = :customer_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Wishlist');
        return $STMT->fetchAll();
    }

    function deleteItem($product_id, $customer_id) {
        $SQL = 'DELETE FROM wishlist WHERE product_id = :product_id AND customer_id = :customer_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['product_id'=>$product_id,
            'customer_id'=>$customer_id]);
    }
}