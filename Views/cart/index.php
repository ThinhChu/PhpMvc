<?php
    $this->view("partitions.header",
    [
        'menu' => $menu,
        'countCart' => $countCart,
    ]
    );

    $this->view("cart.show",
    [
        'productCart' => $productCart,
    ]
    );

    $this->view("partitions.footer");
?>