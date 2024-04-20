<?php
namespace app\models;

use PDO;
use PDOException;

class Product extends \app\core\Model
{
    public $product_id;
    public $brand;
    public $model;
    public $color;
    public $price;
    public $shape;
    public $size;
    public $optial_sun;
    public $description;


    public function insert()
    {
        $SQL = 'INSERT INTO product(brand, model, color, price, shape, size, optial_sun, description) VALUES (:brand, :model, :color, :price, :shape, :size, :optial_sun, :description)';

        $STMT = self::$_conn->prepare($SQL);
 
        $STMT->execute(
            ['brand'=>$this->brand,
            'model'=> $this->model,
            'color'=>$this->color,
            'price'=>$this->price,
            'shape'=>$this->shape,
            'size'=>$this->size,
            'optial_sun'=>$this->optial_sun,
            'description'=>$this->description]);
    }

    public function update()
    {
        $SQL = 'UPDATE product SET brand = :brand, model = :model, color = :color, price = :price, shape = :shape, size = :size, optial_sun = :optial_sun, description = :description WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute((array) $this);
    }

    public function get($product_id)
    {
        $SQL = 'SELECT * FROM product WHERE product_id = :product_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetch();
    }

    public function getAll(){
		$SQL = 'SELECT * FROM product';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Product');
		return $STMT->fetchAll();
	}
}