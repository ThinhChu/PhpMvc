<div class="col-lg-3 col-md-5">
    <div class="sidebar">
        <div class="sidebar__item">
            <h4>Danh mục sản phẩm</h4>
            <ul>
                <?php foreach ($menu as $key => $value) { ?>
                    <li><a href="index.php?controller=category&action=show&id_category=<?=$value['id']?>"><?=$value['name']?></a></li>
                <?php }?>
            </ul>
        </div>
        <form action="" method="get">
            <div class="sidebar__item">
                <h4>Price</h4>
                <div class="price-range-wrap">
                    <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                        data-min="<?= $price[0]['priceMin']?>"
                        data-max="<?= $price[0]['priceMax']?>"
                    >
                        <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                    </div>
                    <div class="range-slider">
                        <div class="price-input">
                            <input type="text" name="minPrice" id="minamount">vnđ
                            <input type="text" name="maxPrice" id="maxamount">vnđ
                        </div>
                    </div>
                </div>
                <div class="w-100 mt-3 btn-cs">
                    
                        <input type='hidden' name='nameProduct' value='<?php echo $_GET['nameProduct'] ?? ""?>'>
                    
                    <input type="hidden" name="controller" value="<?php echo $_GET["controller"] ?? "product"?>">
                    <?php  if (isset($_GET["action"])) :?>
                        <input type='hidden' name='action' value='<?php echo $_GET['action']?>'>
                    <?php endif ?>
                    <?php  if (isset($_GET["id_category"])) :?>
                        <input type="hidden" name="id_category" value="<?php echo $_GET['id_category'] ?? "" ?>">
                    <?php endif ?>
                    <?php  if (isset($_GET["id"])) :?>
                        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?? ""?>">
                    <?php endif ?>
                    <button class="btn-submit" type="submit">Chọn mức giá</button>
                </div>
            </div>
        </form>
        <div class="sidebar__item sidebar__item__color--option">
            <h4>Colors</h4>
            <div class="sidebar__item__color sidebar__item__color--white">
                <label for="white">
                    White
                    <input type="radio" id="white">
                </label>
            </div>
            <div class="sidebar__item__color sidebar__item__color--gray">
                <label for="gray">
                    Gray
                    <input type="radio" id="gray">
                </label>
            </div>
            <div class="sidebar__item__color sidebar__item__color--red">
                <label for="red">
                    Red
                    <input type="radio" id="red">
                </label>
            </div>
            <div class="sidebar__item__color sidebar__item__color--black">
                <label for="black">
                    Black
                    <input type="radio" id="black">
                </label>
            </div>
            <div class="sidebar__item__color sidebar__item__color--blue">
                <label for="blue">
                    Blue
                    <input type="radio" id="blue">
                </label>
            </div>
            <div class="sidebar__item__color sidebar__item__color--green">
                <label for="green">
                    Green
                    <input type="radio" id="green">
                </label>
            </div>
        </div>
        <div class="sidebar__item">
            <h4>Popular Size</h4>
            <div class="sidebar__item__size">
                <label for="large">
                    Large
                    <input type="radio" id="large">
                </label>
            </div>
            <div class="sidebar__item__size">
                <label for="medium">
                    Medium
                    <input type="radio" id="medium">
                </label>
            </div>
            <div class="sidebar__item__size">
                <label for="small">
                    Small
                    <input type="radio" id="small">
                </label>
            </div>
            <div class="sidebar__item__size">
                <label for="tiny">
                    Tiny
                    <input type="radio" id="tiny">
                </label>
            </div>
        </div>
        <!-- <div class="sidebar__item">
            <div class="latest-product__text">
                <h4>Latest Products</h4>
                <div class="latest-product__slider owl-carousel">
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-1.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-2.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="./public/img/latest-product/lp-3.jpg" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>