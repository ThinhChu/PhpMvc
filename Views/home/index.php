<?php
    $this->view('partitions.header', 
    [
        'menu' => $menu ?? [],
        'title' => $title,
    ]);
    $this->view('partitions.category_choose');
    $this->view('partitions.product_choose');
    $this->view('partitions.banner_choose');
    $this->view('partitions.blog_choose');
    $this->view('partitions.footer');
?>