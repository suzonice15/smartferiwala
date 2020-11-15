<?php
$home_cat_section = explode(",", get_option('home_cat_section'));
//echo '<pre>'; print_r($home_cat_section); echo '</pre>';
$active_tab = 0;

foreach ($home_cat_section as $home_cat) {
    $category_info = get_category_info($home_cat);
    $category_title = $category_info->category_title;
    $category_id = $category_info->category_id;
    $category_name = $category_info->category_name;
    $link = base_url().'category/'.$category_info->category_name;
    //print_r($category_info)
    $featured_image = get_media_path($category_info->medium_banner);
    //$featured_image = get_media_path($featured_image, 'thumb');


    ?>

        <div class="container-fluid">
                 <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="row no-gutters">


                            <div class="col-lg-2 col-sm-12 col-md-12 col-12 ">
                                <div class="block-product-cate-wraper"
                                     style="background-image: url(<?= $featured_image ?>">
                                    <a class="home_category_hover_anchor" href="<?php echo $link;?>"> <h3 class="block-cate-header category_bold" style="color:white" ><?= $category_title ?></h3></a>
                                    <ul class="nav flex-column">

                                        <?php
                                        $subcategorys = get_subcategories_web($category_id);
                                        if (isset($subcategorys)) {
                                            $count = 1;

                                            foreach ($subcategorys as $sub):
                                                $link = base_url() . 'category/' . $sub->category_name;
                                                if ($count <= 12):
                                                    ?>

                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                           href="<?= $link ?>"><?= $sub->category_title ?></a>
                                                    </li>

                                                    <?php
                                                endif;
                                                $count++;
                                            endforeach;
                                        }
                                        ?>


                                    </ul>
                                    <div class="xs-overlay bg-teal"></div>
                                </div>
                            </div>

                   

                            <div class="col-lg-10 col-sm-12  col-md-12 col-12 ">
                                <div class="row no-gutters product-block-category">
                                    <?php
                                    $catproducts = get_category_products($home_cat, 8);
                                    
                                 
                                    if (isset($catproducts)) {
                                        $i = 0;
                                        foreach ($catproducts as $prod) {
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


                                            $i++;

                                            ?>
                                            <div class="col-md-6 col-12 col-lg-3 col-sm-6">
                                                <div class="xs-product-wraper version-2">
                                                    
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
                                                    <a href="<?= $product_link ?>">
                                                        <img src="<?= $featured_image ?>"
                                                             alt="<?= $_product_title ?>"  ></a>
                                                    <div class="product-content" style="text-align:center">
                                                        <h4 class="product-title" style="text-align: center"><a
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



<?php if($prod->product_availability=='In stock') { ?>


                                                    <div class="xs-product-hover-area clearfix">
                                                        <div>
                                                            <a href="#"
                                                               class="btn btn-primary btn-sm  add_to_cart mobile_add_to_cart"
                                                               data-product_id="<?= $prod->product_id ?>"
                                                               data-product_price="<?= $sell_price ?>"
                                                               data-product_title="<?= $prod->product_title ?>"><i
                                                                    class="icon icon-online-shopping-cart"></i>&nbsp;&nbsp;Add to
                                                                Cart</a>
                                                        </div>
                                                        <div>
                                                            <a style="width: 170px;
margin-left: -30px;" href="#" class="btn btn-info  btn-sm   buy_now mobile_buy_now_cart"
                                                               data-product_id="<?= $prod->product_id ?>"
                                                               data-product_price="<?= $sell_price ?>"
                                                               data-product_title="<?= $prod->product_title ?>"><i
                                                                    class="icon icon-bag"></i>&nbsp;&nbsp;Buy Now</a>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }

                                    ?>


                                </div>
                            </div>


                        </div>
                    </div>
                </div><!-- .row END -->



        </div><!-- .container END -->



<?php } ?>

<?php
$home_cat_section = explode(",", get_option('home_cat_section'));
//echo '<pre>'; print_r($home_cat_section); echo '</pre>';
$active_tab = 0;

foreach ($home_cat_section as $home_cat) {
$category_info = get_category_info($home_cat);
$category_title = $category_info->category_title;
$category_id = $category_info->category_id;
$category_name = $category_info->category_name;
$link = base_url().'category/'.$category_info->category_name;
//print_r($category_info)
$featured_image = get_media_path($category_info->medium_banner);
//$featured_image = get_media_path($featured_image, 'thumb');


?>
<div class="col-md-12">
	<div class="tab-content">
		<div class="tab-pane fade show active" id="newArrival-nSale" role="tabpanel"
			 aria-labelledby="newArrival-on-sale-tab">
			<h3 class="section-title">
				<a class="category_title_section" href="https://www.sohojbuy.com/category/toys--games">Toys
					&amp; Games</a>
			</h3>
			<div class="xs-tab-slider-6-col owl-carousel">


				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>  Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>  Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->

				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->
				<div class="xs-product-wraper version-2">
					<img src="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 data-echo="https://www.sohojbuy.com/public/uploads/483/thumb/483.bag.jpg"
						 alt="Mobile">
					<h4 class="product-title"><a href="product-details.html">Notebook BIgscreen Z51-70
							40K6013</a></h4>
					<span class="price">
                                    $340.00
                                    <del>$460.00</del>
                                </span>

					<div class="home_category_product_hover clearfix">

						<a href="#" class="home_add_to_cart_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-online-shopping-cart"></i>Add to Cart</a>

						<a href="#" class="home_buy_now_releted_product"
						   data-product_id="<?= $rel_prod->product_id ?>"
						   data-product_price="<?= $sell_price ?>"
						   data-product_title="<?= $_product_title ?>"><i
								class="icon icon-bag"></i>Buy Now</a>

					</div>
				</div><!-- .xs-product-category text-center END -->




			</div><!-- #newArrival-nSale END -->
		</div>
	</div>
</div>




</div>

<?php } ?>
