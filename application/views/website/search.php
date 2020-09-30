
    <div class="container">
              <div class="row">
              
                
                            <div class="row no-gutters product-block-category">
                                <?php

                                if (isset($products)) {
                                    if (count($products) == 1) {

                                        foreach ($products as $prod_row) ;
                                        //$this->load->helper('url');
                                        $link = base_url() . 'product/' . ($prod_row->product_name);
                                        redirect($link);

                                    } else {


//print_r($products);exit();
                                        foreach ($products as $product) {


                                            $total_review = 0;
                                            $reviews = get_review($product->product_id);


                                            if (isset($reviews)) {
                                                $total_review = count($reviews);


                                            }


                                            $featured_image = get_product_meta($product->product_id, 'featured_image');
                                            $featured_image = get_media_path($featured_image, 'thumb');

                                            $discount = false;

                                            $product_price = $sell_price = $product->product_price;

                                            $product_discount = $product->discount_price;
                                            $discount_type = $product->discount_type;

                                            if ($product_discount != 0) {
                                                 
                                                    $sell_price = floatval( $product->discount_price) ;
                                            }
                                            $less_money = '';

                                            if ($product_price > $sell_price) {
                                                $less_money = formatted_price($product_price);

                                            }
                                            $product_title = $product->product_title;
                                            $link = base_url() . 'product/' . $product->product_name;

$product_availabie = $product->product_availability;

                                             ?>


                                            <div class="col-md-2 col-lg-2 col-sm-4 col-6">
                                                <div class="xs-product-wraper version-2">
                                                    <div class="xs-product-header media">
                        <span class="star-rating d-flex" style="margin-top: -29px;">
                            <span class="value">(<?php echo $total_review; ?>)</span>
                        </span>

                                                    </div>
                                                     <?php   if ($product_availabie == 'Out of stock') { ?>
            <p style="font-size: 15px;
    background: yellow;
    width: 109px;
    position: absolute;
    padding: 3px;
    font-weight:bold;
    z-index: 999;
">Out of Stock</p>

<?php } ?>
 
                                                    <a href="<?= $link ?>">
                                                        <img
                                                            src="<?= $featured_image ?>"
                                                            alt="Mobile">
                                                    </a>
                                                    <div class="xs-product-content text-center">
                        <span class="product-categories">

                        </span>
                                                        <h4 class="product-title"><a
                                                                href="<?= $link ?>"><?= $product_title ?></a></h4>
												<span style="color:#00B050"  class="price">
                           <?= formatted_price($sell_price) ?>
                                                    <del style="color:red"><?= $less_money ?></del>
                        </span>
                                                    </div><!-- .xs-product-content END -->
 <?php   if ($product_availabie != 'Out of stock') { ?>
                                                    <div class="category_product_hover clearfix">

                                                            <a href="#" class="add_to_cart_releted_product"
                                                               data-product_id="<?= $product->product_id ?>"
                                                               data-product_price="<?= $sell_price ?>"
                                                               data-product_title="<?= $product_title ?>"><i
                                                                    class="icon icon-online-shopping-cart"></i>Add to Cart</a>

                                                            <a href="#" class="buy_now_releted_product"
                                                               data-product_id="<?= $product->product_id ?>"
                                                               data-product_price="<?= $sell_price ?>"
                                                               data-product_title="<?= $product_title ?>"><i
                                                                    class="icon icon-bag"></i>Buy Now</a>

                                                    </div>
                                                    
                                                    <?php } ?>

                                                </div>
                                            </div>

                                        <?php }
                                    }

                                }
                                ?>


                            </div>
                       

               
          </div>
    </div>
    <!-- .container END -->



