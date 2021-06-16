<?php

class ProductController extends BaseController
{
    private $productModel;
    public $categoryModel;

    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;

        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }

    public function index()
    {
        $selectColumns = ['id', 'name', 'price'];
        $orderBy =['columns' => 'id','order'   => 'desc'];
        // Get dữ liệu theo : tên cột cần lây, orderby, limit
        $products = $this->productModel->getAll(
            $selectColumns, 
        $orderBy
    );
        return $this->view('products.index',[
            'products' => $products,
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $menu = $this->categoryModel->getAll();
        $productId = $this->productModel->getById($id);
        return $this->view('products.show',
        [
            'title' => $productId,
            'menu' => $menu,
        ]
        );
    }

    public function store()
    {
        $data = [
            'name' => 'Iphone 15',
            'price' => 15000000,
            'category_id' => 1,
        ];

        $this->productModel->insert($data);
    }
}