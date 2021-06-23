<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="./public/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ Hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<?php if ($productCart != [] && isset($_SESSION["cart"])) :?>
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <form action="index.php?controller=cart&action=update" method="post" class="w-100">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <?php foreach ($productCart as $key => $item) :?>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <img src="./public/img/cart/<?= empty($item["img"]) ? "cart-1.jpg" : $item["img"]?>" alt="">
                                                <h5><?= $item["name"]?></h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                <?= number_format($item["price"])?>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" name="qty[<?=$item["id"]?>]" value="<?= $item["qty"]?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">
                                                <?= number_format($item["price"] * $item["qty"]) ?>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <a href="index.php?controller=cart&action=delete&id_product=<?=$item["id"]?>"><span class="icon_close"></span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    
                            </tbody>
                        </table>
                    </div>
                    <div class="shoping__cart__btns">
                        <a href="index.php?id_category=&nameProduct=&controller=product" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <button type="submit" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION["cart"])) {
                $total = 0;
                foreach ($productCart as $key => $value) {
                    $total += $value["price"]*$value["qty"];
                }
            }
            ?>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span><?= isset($total) ? number_format($total) : "0" ?></span></li>
                        <li>Total <span><?= isset($total) ? number_format($total) : "0" ?></span></li>
                    </ul>
                    <a href="index.php?controller=order" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
<?php else :?>
    <div class="w-100" style="text-align: center;">
        <p class="w-100" style="margin-top: 30px;">Không cái sản phẩm trong giỏ</p>
        <a href="index.php?controller=product" class="primary-btn cart-btn" style="margin-top: 30px; margin-bottom: 50px;">Quay lại trang sản phẩm</a>
    </div>
<?php endif?>