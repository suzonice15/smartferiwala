<!-- top category section -->


<?php



$today = date('Y-m-d');




  
         $query25 = "SELECT distinct(product_name),product.product_id,product_title,product_price,discount_price,sku,product_stock,product_availability,product_percent_tag,discount_date_to FROM `product` WHERE `discount_type`='percent' and product_percent_tag BETWEEN 1 and 15
and discount_date_from <='$today' and discount_date_to >='$today' and status=1 order by product_percent_tag desc limit 6";
        $product25= $this->MainModel->AllQueryDalta($query25);
        $query50 = "SELECT distinct(product_name),product.product_id,product_title,product_price,discount_price,sku,product_stock,product_availability,product_percent_tag,discount_date_to FROM `product` WHERE `discount_type`='percent' and product_percent_tag BETWEEN 16 and 30 and discount_date_from <='$today' and discount_date_to >='$today'
and status=1 order by product_percent_tag desc limit 6";
        $product50= $this->MainModel->AllQueryDalta($query50);
        $query75 = "SELECT distinct(product_name),product.product_id,product_title,product_price,discount_price,sku,product_stock,product_availability,product_percent_tag,discount_date_to FROM `product` WHERE `discount_type`='percent' and product_percent_tag BETWEEN 31 and 100
and discount_date_from <='$today' and discount_date_to >='$today' and status=1 order by product_percent_tag desc limit 6";
        $product75 = $this->MainModel->AllQueryDalta($query75);





?>


<!-- hot sale section -->
<section class="xs-section-padding bg-gray v-yellow-and-black" style="margin-top:-39px;padding: 28px 14px;">
    <div class="container container-fullwidth">
        <div class="row">
            <div class="col-lg-12">
                <div class="xs-content-header">
                    <h2 class="xs-content-title">Hot Sale</h2>
                    <ul class="nav nav-tabs xs-nav-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="hot-40off-tab" data-toggle="tab" href="#hot-40off" role="tab"
                               aria-controls="hot-40off" aria-selected="true">31-100% Off</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hot-57off-tab" data-toggle="tab" href="#hot-57off" role="tab"
                               aria-controls="hot-57off" aria-selected="false">16-30% Off</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hot-75off-tab" data-toggle="tab" href="#hot-75off" role="tab"
                               aria-controls="hot-75off" aria-selected="false">1-15% Off</a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content version-border-right" >
                    <div class="tab-pane fade show active" id="hot-40off" role="tabpanel"
                         aria-labelledby="hot-40off-tab">
                        <div class="row no-gutters">
                            <?php if (isset($product75)) :
                                foreach ($product75 as $prod):


                                    $featured_image = get_product_meta($prod->product_id, 'featured_image');
                                    $featured_image = get_media_path($featured_image, 'thumb');
                                    $_product_title = strip_tags($prod->product_title);

                                    $product_link = base_url() . 'product/' . $prod->product_name;


                                    $discount = false;

                                    $product_price = $sell_price = $prod->product_price;

                                    $product_discount = $prod->discount_price;
                                    $discount_type = $prod->discount_type;

                                    if ($product_discount != 0) {


                                        $product_discount_price = floatval($product_discount);


                                        $sell_price = $product_discount_price;

                                    }

                                    $_product_title = strip_tags($prod->product_title);


                                    ?>
                                    <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                                        <div class="xs-deal-blocks deal-block-v2 hot_sell_offer_mother_class">
                                              <?php if($prod->product_availability !='In stock') { ?>
                                                    <p style="font-size: 15px;
    background: yellow;
    width: 109px;
    position: absolute;
    padding: 3px;
    font-weight:bold;
    z-index: 999;
">Out of Stock</p>

<?php } ?>
                                            <a  href="<?= $product_link ?>">
                                                <img class="img-fluid" src="<?= $featured_image ?>"
                                                     alt="<?= $_product_title ?>" style="width: 100%;">

                                            </a>
                                            <div class="xs-product-offer-label">
                                                <span><?php echo round($prod->product_percent_tag); ?>%</span>
                                                <small>Offer</small>
                                            </div>
                                            <div class="title-and-price">
                                                <h4 class="product-title ">
                                                    <a
                                                       href="<?= $product_link ?>"><?= $_product_title ?></a>
                                                </h4>
												<span style="color:#00B050" class="price">
                                            <?php echo formatted_price($sell_price); ?>

                                                    <del style="color:red"> <?php
                                                        if ($product_price > $sell_price) {
                                                            echo formatted_price($product_price);

                                                        } ?></del>
                                        </span>
                                            </div>
                                            <div class="xs-deals-info">
   <?php if($prod->product_availability =='In stock') { ?>

                                                <div class="hot_sell_offer">
                                                    <a href="#"  style="margin-left: -141px;" class="btn btn-success btn-sm  add_to_cart col-4"
                                                       data-product_id="<?= $prod->product_id ?>"
                                                       data-product_price="<?= $sell_price ?>"
                                                       data-product_title="<?= $prod->product_title ?>"><i
                                                            class="icon icon-online-shopping-cart"></i>&nbsp; Add to Cart</a>
                                                </div>
<?php }?>

                                            </div><!-- .xs-deals-info END -->

                                            <div class="countdow-timer" style="margin-top: -30px;">
                                                <h4><span class="color-primary">Hurry up!</span> Offers ends in:</h4>
                                                <div class="xs-countdown-timer"
                                                     data-countdown="<?php echo date('Y-m-d', strtotime($prod->discount_date_to)) ?>"></div>
                                            </div><!-- .countdow-timer END -->
                                        </div>
                                    </div>
                                <?php endforeach;endif; ?>
                        </div>
                    </div><!-- #hot-40off END -->


                    <div class="tab-pane fade show" id="hot-57off" role="tabpanel" aria-labelledby="hot-57off-tab">
                        <div class="row no-gutters">
                            <?php if (isset($product50)) :
                                foreach ($product50 as $prod):


                                    $featured_image = get_product_meta($prod->product_id, 'featured_image');
                                    $featured_image = get_media_path($featured_image, 'thumb');
                                    $_product_title = strip_tags($prod->product_title);

                                    $product_link = base_url() . 'product/' . $prod->product_name;


                                    $discount = false;

                                    $product_price = $sell_price = $prod->product_price;

                                    $product_discount = $prod->discount_price;
                                    $discount_type = $prod->discount_type;

                                    if ($product_discount != 0) {
                                        $product_discount_price = floatval($product_discount);


                                        $sell_price = $product_discount_price;
                                    }

                                    $_product_title = strip_tags($prod->product_title);


                                    ?>
                                    <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                                        <div class="xs-deal-blocks deal-block-v2 hot_sell_offer_mother_class">
                                            
                                              <?php if($prod->product_availability !='In stock') { ?>
                                                    <p style="font-size: 15px;
    background: yellow;
    width: 109px;
    position: absolute;
    padding: 3px;
    font-weight:bold;
    z-index: 999;
">Out of Stock</p>

<?php } ?>
                                            <a  href="<?= $product_link ?>"><img
                                                    src="<?= $featured_image ?>" alt="<?= $_product_title ?>"
                                                    style="width: 100%;"></a>
                                            <div class="xs-product-offer-label">
                                                <span><?php echo round($prod->product_percent_tag); ?>%</span>
                                                <small>Offer</small>
                                            </div>
                                            <div class="title-and-price">
                                                <h4 class="product-title">
                                                    <a
                                                       href="<?= $product_link ?>"><?= $_product_title ?></a>
                                                </h4>
												<span style="color:#00B050" class="price">
                                            <?php echo formatted_price($sell_price); ?>

                                                    <del style="color:red"> <?php
                                                        if ($product_price > $sell_price) {
                                                            echo formatted_price($product_price);

                                                        } ?></del>
                                        </span>
                                            </div>
                                            <div class="xs-deals-info">
   <?php if($prod->product_availability =='In stock') { ?>

                                                <div class="hot_sell_offer">
                                                    <a href="#" style="margin-left: -141px;" class="btn btn-success  btn-sm   add_to_cart"
                                                       data-product_id="<?= $prod->product_id ?>"
                                                       data-product_price="<?= $sell_price ?>"
                                                       data-product_title="<?= $prod->product_title ?>"><i
                                                            class="icon icon-online-shopping-cart"></i>&nbsp; Add to Cart</a>
                                                </div>


<?php } ?>
                                            </div><!-- .xs-deals-info END -->

                                            <div class="countdow-timer" style="margin-top: -30px;">
                                                <h4><span class="color-primary">Hurry up!</span> Offers ends in:</h4>
                                                <div class="xs-countdown-timer"
                                                     data-countdown="<?php echo date('Y-m-d', strtotime($prod->discount_date_to)) ?>"></div>
                                            </div><!-- .countdow-timer END -->
                                        </div>
                                    </div>
                                <?php endforeach;endif; ?>
                        </div>
                    </div><!-- #hot-40off END -->


                    <div class="tab-pane fade show " id="hot-75off" role="tabpanel" aria-labelledby="hot-75off-tab">
                        <div class="row no-gutters">
                            <?php if (isset($product25)) :
                                foreach ($product25 as $prod):


                                    $featured_image = get_product_meta($prod->product_id, 'featured_image');
                                    $featured_image = get_media_path($featured_image, 'thumb');
                                    $_product_title = strip_tags($prod->product_title);

                                    $product_link = base_url() . 'product/' . $prod->product_name;


                                    $discount = false;

                                    $product_price = $sell_price = $prod->product_price;

                                    $product_discount = $prod->discount_price;
                                    $discount_type = $prod->discount_type;

                                    if ($product_discount != 0) {
                                        $product_discount_price = floatval($product_discount);


                                        $sell_price = $product_discount_price;
                                    }

                                    $_product_title = strip_tags($prod->product_title);


                                    ?>
                                    <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                                        <div class="xs-deal-blocks deal-block-v2 hot_sell_offer_mother_class">
                                            
                                              <?php if($prod->product_availability !='In stock') { ?>
                                                    <p style="font-size: 15px;
    background: yellow;
    width: 109px;
    position: absolute;
    padding: 3px;
    font-weight:bold;
    z-index: 999;
">Out of Stock</p>

<?php } ?>
                                            <a  href="<?= $product_link ?>"><img class="lazyloaded"
                                                    src="<?= $featured_image ?>" alt="<?= $_product_title ?>"
                                                    style="width: 100%;"></a>
                                            <div class="xs-product-offer-label">
                                                <span><?php echo round($prod->product_percent_tag); ?>%</span>
                                                <small>Offer</small>
                                            </div>
                                            <div class="title-and-price">
                                                <h4 class="product-title">
                                                    <a
                                                       href="<?= $product_link ?>"><?= $_product_title ?></a>
                                                </h4>
												<span style="color:#00B050" class="price">
                                            <?php echo formatted_price($sell_price); ?>

                                                    <del style="color:red"> <?php
                                                        if ($product_price > $sell_price) {
                                                            echo formatted_price($product_price);

                                                        } ?></del>
                                        </span>
                                            </div>
                                            <div class="xs-deals-info">

   <?php if($prod->product_availability =='In stock') { ?>
                                                <div class="hot_sell_offer">
                                                    <a href="#" style="margin-left: -141px;" class="btn btn-success btn-sm   add_to_cart"
                                                       data-product_id="<?= $prod->product_id ?>"
                                                       data-product_price="<?= $sell_price ?>"
                                                       data-product_title="<?= $prod->product_title ?>"><i
                                                            class="icon icon-online-shopping-cart"></i>&nbsp; Add to Cart</a>
                                                </div>
<?php } ?>

                                            </div><!-- .xs-deals-info END -->
                                            <div class="countdow-timer" style="margin-top: -30px;">
                                                <h4><span class="color-primary">Hurry up!</span> Offers ends in:</h4>
                                                <div class="xs-countdown-timer"
                                                     data-countdown="<?php echo date('Y-m-d', strtotime($prod->discount_date_to)) ?>"></div>
                                            </div><!-- .countdow-timer END -->
                                        </div>
                                    </div>
                                <?php endforeach;endif; ?>
                        </div>
                    </div><!-- #hot-40off END -->

                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- end hot sale section -->

<!-- product category block section -->
