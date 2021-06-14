<?php

class CategoryController extends BaseController
{
    public $categoryModel;

    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;

    }
    public function index()
    {
        // $order = ['columns' => 'id', 'order' => 'desc'];
        $columns = ['id', 'name'];
        // Get dữ liệu theo : tên cột cần lây, orderby, limit
        $categories = $this->categoryModel->getAll(
            $columns
        );

        return $this->view('categories.index',
        ['categories' => $categories],
    );
    }

    public function show()
    {
        $id = $_GET['id'];
        $categoryId = $this->categoryModel->getByid($id);
        return $this->view('categories.show',
        ['categoryId' => $categoryId],
    );
    }

    public function store()
    {
        $category = [
            'name' => 'Destop',
        ];
        
        $this->categoryModel->insert($category);
    }

    public function update()
    {
        $id = $_GET['id'];

        $data = [
            'name' => 'PC',
        ];

        $this->categoryModel->edit($id, $data);
    }

    public function delete()
    {
        $id = $_GET['id'];

        $this->categoryModel->destroy($id);
    }
}