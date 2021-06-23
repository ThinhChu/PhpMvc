<?php

class CartController extends BaseController
{
    protected $productModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->loadModel('categoryModel');
        $this->categoryModel = new CategoryModel;

        $this->loadModel('productModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        $menu = $this->categoryModel->getAll();
        $productCart = $_SESSION["cart"] ?? "";
        $countCart = count($_SESSION["cart"] ?? []);
        
        $this->view("cart.index",
        [
            'menu' => $menu,
            'productCart' => $productCart,
            'countCart' => $countCart,
        ]
        );
    }

    public function store()
    {
        $productId = $_GET["id_product"] ?? "";
        $qty = $_POST["qty"] ?? "1";
        $products = $this->productModel->getDetail($productId);

        if (empty($_SESSION["cart"]) || !array_key_exists($productId, $_SESSION["cart"])) {
            $products["qty"] = $qty;
            $_SESSION["cart"][$productId] = $products;
        }else{
            $products["qty"] = $_SESSION["cart"][$productId]["qty"] + $qty;
            $_SESSION["cart"][$productId] = $products;
        }
        
        header("location: index.php?controller=cart");
    }

    public function update()
    {
        foreach ($_POST["qty"] as $productId => $qty) {
            if ($qty == 0) {
                unset($_SESSION["cart"][$productId]);
            }else{
                $_SESSION["cart"][$productId]["qty"] = $qty;
            }
        }
        
        header("location: index.php?controller=cart");
    }

    public function delete()
    {
        $productId = $_GET["id_product"] ?? "";

        unset($_SESSION["cart"][$productId]);

        header("location: index.php?controller=cart");
    }
}