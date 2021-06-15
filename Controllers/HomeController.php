<?php

class HomeController extends BaseController
{
    public $categoryModel;

    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;

    }

    public function index()
    {
        $menu = $this->categoryModel->getAll();
        return $this->view('home.index', 
            ['menu' => $menu],
        );
    }
}