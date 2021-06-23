<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
        'countCart' => $countCart,
    ]
    );
    $this->view('categories._detail',
    [
        'menu'     => $menu,
        'category' => $category,
        'products' => $products,
        'price'    => $price,
    ]
    );
    $this->view('partitions.footer');
?>