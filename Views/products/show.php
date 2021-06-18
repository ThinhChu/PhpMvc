<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
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