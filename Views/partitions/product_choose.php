<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php foreach ($menu as $key => $category) :?>
                            <li data-filter=".<?= $category['name']?>"><?= $category['name']?></li>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php foreach ($products as $key => $items) {?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $items['category_name'] ?? "" ?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="public/img/featured/<?= $items['img'] ? $items['img'] :  'feature-1.jpg';?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?= $items['name'] ?? "" ?></a></h6>
                            <h5><?= number_format($items['price'])." vnđ"  ?? "Liên hệ" ?></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->