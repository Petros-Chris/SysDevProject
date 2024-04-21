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
    public $cost_price;
    public $shape;
    public $size;
    public $optical_sun;
    public $description;


    public function insert()
    {
        $SQL = 'INSERT INTO product(brand, model, color, cost_price, shape, size, optical_sun, description) VALUES (:brand, :model, :color, :cost_price, :shape, :size, :optical_sun, :description)';

        $STMT = self::$_conn->prepare($SQL);
 
        $STMT->execute(
            ['brand'=>$this->brand,
            'model'=> $this->model,
            'color'=>$this->color,
            'cost_price'=>$this->cost_price,
            'shape'=>$this->shape,
            'size'=>$this->size,
            'optical_sun'=>$this->optical_sun,
            'description'=>$this->description]);
    }

    public function update()
    {
        $SQL = 'UPDATE product SET brand = :brand,
            model = :model,
            color = :color,
            cost_price = :cost_price,
            shape = :shape,
            size = :size,
            optical_sun = :optical_sun,
            description = :description 
            WHERE product_id = :product_id';
            
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

    public function getColor($product_color)
    {
        $SQL = 'SELECT * FROM product WHERE color LIKE :color';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['color' => '%' . $product_color . '%']);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function getAll(){
		$SQL = 'SELECT * FROM product';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Product');
		return $STMT->fetchAll();
	}
}