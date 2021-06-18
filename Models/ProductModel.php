<?php

class ProductModel extends BaseModel
{
    const TABLE = 'products';
    
    public function getAll($select = ['*'],$orders = [] ,$limit = 15)
    {
        return $this->all(self::TABLE, $select, $orders,$limit);
    }

    public function getById($id)
    {
        return $this->findById(self::TABLE, $id);
    }

    public function getAllCategoryName()
    {
        $sql = "SELECT  products.*, categories.name as category_name FROM ".self::TABLE."
        JOIN categories ON categories.id = products.category_id ";

        return $this->getByQuery($sql);
    }

    public function Search($input)
    {
        $sql = "SELECT  * FROM ".self::TABLE." ";
        if($input)
        {
            $sql.= ' WHERE name LIKE "%'.$input['nameProduct'].'%"';
            if (isset($input['minPrice']) && isset($input['maxPrice'])) {
                $sql.= " AND price >= ${input['minPrice']} AND price <= ${input['maxPrice']}";
            }
            if ($input['category']) {
                $sql.= " AND category_id = ${input['category']}";
            }
        }
        return $this->getByQuery($sql);
    }

    public function getDetail($id)
    {
        $sql = "SELECT  products.*, categories.name as category_name FROM ".self::TABLE."
        JOIN categories ON categories.id = products.category_id
        WHERE products.id = ${id} ";

        return $this->getFirstById($sql);
    }

    public function getByCategoryId($categoryId, $productId = NULL)
    {
        $sql = "SELECT * FROM ".self::TABLE." WHERE category_id = ${categoryId} ";

        if ($productId) {
            $sql = "SELECT * FROM ".self::TABLE." WHERE category_id = ${categoryId} and id != ${productId} ";
        }

        return $this->getByQuery($sql);
    }

    public function insert($data)
    {
        return $this->store(self::TABLE, $data);
    }
}