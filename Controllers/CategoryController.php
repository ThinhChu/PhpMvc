<?php

class CategoryController extends BaseController
{
    public $categoryModel;
    public $productModel;

    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;

        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;

    }
    public function index()
    {
        // $order = ['columns' => 'id', 'order' => 'desc'];
        // $columns = ['id', 'name'];
        // Get dữ liệu theo : tên cột cần lây, orderby, limit
        $menu = $this->categoryModel->getAll(
            // $columns
        );
        return $this->view('categories.index',
        [
            'menu' => $menu,
        ]
    );
    }

    public function show()
    {
        $id = $_GET['id_category'];
        $params = $_GET;

        $menu = $this->categoryModel->getAll();
        $categoryId = $this->categoryModel->getByid($id);
        $products = 
        !$params ?
        $this->productModel->getByCategoryId($id)
        : $this->productModel->Search($params);
        $countCart = count($_SESSION["cart"] ?? []);
        $price = $this->productModel->priceProduct();
        
        return $this->view('categories.show',
        [
            'products'   => $products,
            'category' => $categoryId,
            'menu' => $menu,
            'price' => $price,
            'countCart' => $countCart,
        ],
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