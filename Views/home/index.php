<?php
    $this->view('partitions.header', 
    [
        'menu' => $menu ?? []
    ]);
    $this->view('partitions.category_choose');
    $this->view('partitions.product_choose');
    $this->view('partitions.banner_choose');
    $this->view('partitions.blog_choose');
    $this->view('partitions.footer');
?>