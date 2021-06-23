<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
        'countCart' => $countCart,
    ]
    );

    $this->view('products.listProduct',
    [
        'menu' => $menu,
        'products' => $products,
        'price' => $price,
        'nameCategory' => $nameCategory,
    ]
    );

    $this->view('partitions.footer');
?>