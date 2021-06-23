<?php

class OrderModel extends BaseModel
{
    const TABLE = 'orders';

    public function insert($data)
    {
        return $this->store(self::TABLE,$data);
    }

    public function insertOrderDetail($data)
    {
        return $this->store('order_details',$data);
    }

    public function destroy($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}