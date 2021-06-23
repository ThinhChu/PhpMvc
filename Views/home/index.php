<?php
    $this->view('partitions.header', 
    [
        'menu' => $menu ?? [],
        'countCart' => $countCart,
    ]);
    $this->view('partitions.category_choose', 
    [
        'menu' => $menu ?? []
    ]);
    $this->view('partitions.product_choose',
    [
        'menu' => $menu,
        'products' => $products,
    ]
    );
    $this->view('partitions.banner_choose');
    $this->view('partitions.blog_choose');
    $this->view('partitions.footer');
?>