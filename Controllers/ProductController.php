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
        $params = $_GET;
        // Get dữ liệu theo : tên cột cần lây, orderby, limit
        $menu = $this->categoryModel->getAll();
        $products = !$params
        ? 
        $products = $this->productModel->getAll()
        : $this->productModel->Search($params) ;

        return $this->view('products.index',
        [
            'products' => $products,
            'menu' => $menu,
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];

        $menu = $this->categoryModel->getAll();
        $productId = $this->productModel->getDetail($id);
        $products = $this->productModel->getByCategoryId($productId['category_id'], $id);
        
        return $this->view('products.show',
        [
            'product' => $productId,
            'menu' => $menu,
            'products' => $products,
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