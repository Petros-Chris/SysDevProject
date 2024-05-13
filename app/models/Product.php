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
    public $quantity;
    public $disable;


    public function insert()
    {
        $SQL = 'INSERT INTO product(brand, model, color, cost_price, shape, size, optical_sun, description, quantity, disable) VALUES (:brand, :model, :color, :cost_price, :shape, :size, :optical_sun, :description, :quantity, 1)';

        $STMT = self::$_conn->prepare($SQL);

        $STMT->execute(
            [
                'brand' => $this->brand,
                'model' => $this->model,
                'color' => $this->color,
                'cost_price' => $this->cost_price,
                'shape' => $this->shape,
                'size' => $this->size,
                'optical_sun' => $this->optical_sun,
                'description' => $this->description,
                'quantity' => $this->quantity
            ]
        );
    }

    public function update()
    {
        $SQL = 'UPDATE product SET
            brand = :brand,
            model = :model,
            color = :color,
            cost_price = :cost_price,
            shape = :shape,
            size = :size,
            optical_sun = :optical_sun,
            description = :description,
            quantity = :quantity,
            disable = :disable
            WHERE product_id = :product_id';

        $STMT = self::$_conn->prepare($SQL);

        $params = [
            'brand' => $this->brand,
            'model' => $this->model,
            'color' => $this->color,
            'cost_price' => $this->cost_price,
            'shape' => $this->shape,
            'size' => $this->size,
            'optical_sun' => $this->optical_sun,
            'description' => $this->description,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'disable' => $this->disable
        ];

        $STMT->execute($params);
    }

    public function getId($product_id)
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


    public function getFilter($type, $filter)
    {
        $SQL = "SELECT * FROM product WHERE $type = :$type ORDER BY product_id"; //maybe order by when created idk
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(["$type" => $filter]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function getMultiFilter($type, $type2, $type3, $type4, $type5, $filter)
    {
        $SQL = "SELECT * FROM product WHERE $type LIKE :$type OR $type2 LIKE :$type2 OR $type3 LIKE :$type3 OR $type4 LIKE :$type4 OR $type5 LIKE :$type5";
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            "$type" => '%' . $filter . '%',
            "$type2" => '%' . $filter . '%',
            "$type3" => '%' . $filter . '%',
            "$type4" => '%' . $filter . '%',
            "$type5" => '%' . $filter . '%'
        ]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }

    public function getAll()
    {
        $SQL = 'SELECT * FROM product';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
    }
}