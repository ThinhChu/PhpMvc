<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
    ]
    );

    $this->view('products.listProduct',
    [
        'menu' => $menu,
        'products' => $products,
    ]
    );

    $this->view('partitions.footer');
?>