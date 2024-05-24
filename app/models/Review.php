<?php
namespace app\models;

use PDO;
use PDOException;

class Review extends \app\core\Model
{
    public $review_id;
    public $product_id;
    public $customer_id;
    public $rating;
    public $description;
    public $image_link;
    public $timestamp;
    public $customer_information;

    public function insert()
    {
        $SQL = 'INSERT INTO review(product_id, customer_id, rating, description) VALUES (:product_id, :customer_id, :rating, :description)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            [
                'rating' => $this->rating,
                'description' => $this->description,
                'product_id' => $this->product_id,
                'customer_id' => $this->customer_id
            ]
        );
    }

    public function get($review_id)
    {
        $SQL = 'SELECT * FROM review WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['review_id' => $review_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
        return $STMT->fetch();
    }

    public function getAllFromProduct($product_id)
    {
        $SQL = 'SELECT * FROM review WHERE product_id = :product_id ORDER BY timestamp DESC';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
        return $STMT->fetchAll();
    }

    public function update()
    {
        $SQL = 'UPDATE review SET rating = :rating, description = :description, timestamp = :timestamp WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);

        $STMT->bindValue(':rating', $this->rating);
        $STMT->bindValue(':description', $this->description);
        $STMT->bindValue(':review_id', $this->review_id);
        $STMT->bindValue(':timestamp', $this->timestamp);

        $STMT->execute();
    }

    function delete($review_id)
    {
        $SQL = 'DELETE FROM review WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['review_id' => $review_id]
        );
    }

    function getAllFromCustomerId($customer_id)
    {
        $SQL = 'SELECT * FROM review WHERE customer_id = :customer_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['customer_id' => $customer_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
        return $STMT->fetchAll();
    }
}