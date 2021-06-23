<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
        'countCart' => $countCart,
    ]
    );
    $this->view('products._detail',
    [
        'menu' => $menu,
        'product' => $product,
        'products' => $products,
    ]
    );
    $this->view('partitions.footer');
?>