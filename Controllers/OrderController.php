<?php

class OrderController extends BaseController
{
    protected $categoryModel;
    protected $orderModel;

    public function __construct()
    {
        $this->loadModel("CategoryModel");
        $this->categoryModel = new CategoryModel;

        $this->loadModel("orderModel");
        $this->orderModel = new OrderModel;
    }
    

    public function index()
    {
        $productCarts = $_SESSION["cart"] ?? [];
        $menu = $this->categoryModel->getAll();
        $countCart = count($_SESSION["cart"] ?? []);

        $this->view("orders.index",
        [
            'productCarts' => $productCarts,
            'menu' => $menu,
            'countCart' => $countCart,
        ]
        );
    }

    public function store()
    {
        if (!empty($_SESSION["cart"])) {
            $order = $this->orderModel->insert($_POST);

            foreach ($_SESSION["cart"] as $item) {
                $this->orderModel->insertOrderDetail([
                    'order_id' => $order['id'],
                    'product_id' => $item['id'],
                    'product_name' => $item['name'],
                    'product_price' => $item['price'],
                    'product_qty' => $item['qty'],
                ]);
            }
        }
        unset($_SESSION["cart"]);
        header("location: index.php");
    }
}