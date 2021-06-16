<?php
    $this->view('partitions.header', 
    [
        'menu' => $menu,
        'title' => $title,
    ]);
    // echo' <pre>';
    // print_r($categories) ;
    // $this->view('categories.show',
    // [
    //     'menu' => $menu,
    //     'title' => $title,
    //     'product'   => $product,
    // ]
    // );
    $this->view('partitions.footer');
?>