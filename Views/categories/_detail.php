<?php if (isset($_REQUEST["controller"])) { ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="./public/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2><?= $category['name'] ?? "Ogani" ?></h2>
                            <div class="breadcrumb__option">
                                <a href="./">Home</a>
                                <a href="index.php?controller=category&action=show&id=<?=$category['id']?>"><?= $category['name'] ?? "" ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->
<?php } ?>
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <?php $this->view('partitions.sidebar', 
            [
                'menu' => $menu,
                'products' => $products,
                'price' => $price,
            ]); 
            ?>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?=count($products);?></span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if(count($products)>0) { foreach ($products as $key => $item) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="./public/img/product/<?php if ($item['img'] != "") { $item['img'];}else{echo 'product-1.jpg';} ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="index.php?controller=product&action=show&id=<?=$item['id']?>"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="index.php?controller=cart&action=store&id=<?=$item['id']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="index.php?controller=product&action=show&id=<?=$item['id']?>"><?=$item['name']?></a></h6>
                                    <h5><?= number_format($item['price'])." vnđ" ?? "Liên hệ"?></h5>
                                </div>
                            </div>
                        </div>
                    <?php  } }else{ ?>
                        <p class="center">Không có sản phẩm</p>
                    <?php }?>
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->