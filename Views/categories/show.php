<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
        'title' => $title['name'],
    ]
    );
    $this->view('categories._detail',
    [
        'menu' => $menu,
        'product' => $product,
    ]
    );
    $this->view('partitions.footer');
?>