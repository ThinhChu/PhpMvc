<?php

class CategoryModel extends BaseModel
{
    const TABLE = 'categories';

    public function getAll($columns, $order = [], $limit = 15)
    {
        return $this->all(self::TABLE, $columns, $order, $limit);
    }

    public function getByid($id)
    {
        return $this->findById(self::TABLE, $id);
    }

    public function insert($data)
    {
        return $this->store(self::TABLE, $data);
    }

    public function edit($id, $data)
    {
        return $this->update(self::TABLE, $id, $data);
    }

    public function destroy($id)
    {
        return $this->delete(self::TABLE, $id);
    }
}