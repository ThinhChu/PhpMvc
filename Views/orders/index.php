<?php
    $this->view("partitions.header",
    [
        'menu' => $menu,
        'countCart' => $countCart,
    ]
    );

    $this->view("orders.show",
    [
        'productCarts' => $productCarts,
    ]
    );

    $this->view("partitions.footer");
?>