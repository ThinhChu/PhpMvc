<?php
    $this->view('partitions.header',
    [
        'menu' => $menu,
        'title' => $title['name'],
    ]
    );
    $this->view('products._detail',
    [
        'menu' => $menu,
        'product' => $title,
    ]
    );
    $this->view('partitions.footer');
?>