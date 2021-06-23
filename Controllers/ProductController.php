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
        $categoryId = $_GET["id_category"] ?? false;
        // Get dữ liệu theo : tên cột cần lây, orderby, limit
        $menu = $this->categoryModel->getAll();
        $price = $this->productModel->priceProduct();
        $countCart = count($_SESSION["cart"] ?? []);
        $nameCategory = !$categoryId ? "Sản phẩm" : $this->categoryModel->getByid($categoryId);

        $products = !$params ? $products = $this->productModel->getAll() 
        : $this->productModel->Search($params) ;

        return $this->view('products.index',
        [
            'products' => $products,
            'menu' => $menu,
            'price' => $price,
            'nameCategory' => $nameCategory,
            'countCart' => $countCart,
        ]);
    }

    public function show()
    {
        $id = $_GET['id'] ?? "";

        $menu = $this->categoryModel->getAll();
        $countCart = count($_SESSION["cart"] ?? []);
        $productId = $this->productModel->getDetail($id);
        $products = $this->productModel->getByCategoryId($productId['category_id'], $id);
        
        return $this->view('products.show',
        [
            'product' => $productId,
            'menu' => $menu,
            'products' => $products,
            'countCart' => $countCart,
        ]
        );
    }
}