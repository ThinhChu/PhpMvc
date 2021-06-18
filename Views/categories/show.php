<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
    ]
    );
    $this->view('categories._detail',
    [
        'menu' => $menu,
        'category' => $category,
        'products' => $products,
    ]
    );
    $this->view('partitions.footer');
?>