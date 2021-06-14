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

    public function insert($data)
    {
        return $this->store(self::TABLE, $data);
    }
}