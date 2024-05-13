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
        $SQL = 'INSERT INTO review(product_id, customer_id, rating, description, image_link) VALUES (:product_id, :customer_id, :rating, :description, :image_link)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['rating'=>$this->rating,
            'description'=> $this->description,
            'image_link'=>$this->image_link,
            'product_id'=>$this->product_id,
            'customer_id'=>$this->customer_id]);
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
		$SQL = 'SELECT * FROM review WHERE product_id = :product_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['product_id' => $product_id]);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Review');
		return $STMT->fetchAll();
	}

    public function update()
    {
        $SQL = 'UPDATE review SET rating = :rating, description = :description, image_link = :image_link WHERE review_id = :review_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute((array) $this);
    }


    // function delete()
    // {
    //     //change anything but the PK
    //     $SQL = 'UPDATE user SET active = :active WHERE user_id = :user_id';
    //     $STMT = self::$_conn->prepare($SQL);
    //     $data = ['user_id' => $this->user_id, 'active' => 0];
    //     $STMT->execute($data);
    // }
}