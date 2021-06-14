<?php

class BaseModel extends Database
{

    protected $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function all($table, $select = ['*'], $orders, $limit)
    {
        $columns = implode(",", $select);
        $order = implode(" ", $orders);
        if ($orders) {
            $sql = "SELECT ${columns} FROM ${table} ORDER BY ${order} LIMIT ${limit}";
        }
            $sql = "SELECT ${columns} FROM ${table} LIMIT ${limit}";
        
        $query = $this->_query($sql);
        
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }

    public function findById($table, $id)
    {
        $sql = "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    // Them du lieu vao bang
    public function store($table, $data = [])
    {
        
        $datasKey = implode(',', array_keys($data));
        $datasValue = array_values($data);
        
        $newValues = implode(',',array_map(function ($value){
            return "'".$value."'";
        },$datasValue));    

        $sql = "INSERT INTO ${table} (${datasKey}) VALUES (${newValues})";
        return $this->_query($sql);
    }

    // Update du lieu vao bang
    public function update($table, $id, $data)
    {
    
        $newData = [];
        
        foreach ($data as $key => $value) {
            array_push($newData, "${key} = '". $value ."'");
        }
        $Values = implode(",", $newData);

        $sql = "UPDATE ${table} SET ${Values} WHERE `id` = ${id}";

        return $this->_query($sql);
    }

    // Xoa du lieu vao bang
    public function delete($table, $id)
    {
        $sql = "DELETE FROM ${table} WHERE `id` = ${id}";
        return $this->_query($sql);
    }

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}