<?php

class HomeController extends BaseController
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
        // $params = $_GET;

        $menu = $this->categoryModel->getAll();
        $products = 
        // ? 
        $this->productModel->getAllCategoryName() ;
        // : $this->productModel->Search($params) ;
        
        return $this->view('home.index',
        [
            'menu' => $menu,
            'products' => $products,
        ],
        );
    }
}