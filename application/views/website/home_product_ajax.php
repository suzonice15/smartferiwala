
<?php
$home_cat_section = explode(",", get_option('home_cat_section'));
//echo '<pre>'; print_r($home_cat_section); echo '</pre>';
$active_tab = 0;

foreach ($home_cat_section as $home_cat) {
	$category_info = get_category_info($home_cat);
	$category_title = $category_info->category_title;



	?>
	<div class="row">

	<div class="col-md-12">
		<div class="tab-content">
			<div class="tab-pane fade show active" id="newArrival-nSale" role="tabpanel"
				 aria-labelledby="newArrival-on-sale-tab">
				<h3 class="section-title">
					<a class="category_title_section" href="<?=base_url().'category/'.$category_info->category_name;?>"><?=$category_title?></a>
				</h3>
				<div class="xs-tab-slider-6-col owl-carousel">


					<?php
					$catproducts = get_category_products($home_cat, 15);


					if (isset($catproducts)) {
					$i = 0;
					foreach ($catproducts as $prod) {
					$featured_image = get_product_meta($prod->product_id, 'featured_image');
					$featured_image = get_media_path($featured_image, 'thumb');
					$sell_price = $prod->product_price;
					if ($prod->discount_price != 0) {
						$sell_price = $prod->discount_price;
					}
					?>
					<div class="xs-product-wraper version-2">

						<?php if($prod->product_percent_tag>0) {?>
						<span style="position: absolute;
background: #f14705;
font-size: 14px;
top: 0;
right: 0;
padding: 2px 5px;
color: #fff;
z-index: 10;">-<?=$prod->product_percent_tag?>%</span>
							<?php }?>
					<a href="<?=base_url() . 'product/' . $prod->product_name?>">	<img src="<?=$featured_image?>" alt="Mobile"></a>
						<h4 class="product-title"><a href="<?=base_url() . 'product/' . $prod->product_name?>"><?=$prod->product_title?></a></h4>


						<center>
						<span class="price">
                                 <?= formatted_price($sell_price) ?>
							<?php if($prod->discount_price != 0) {

							?>
                                    <del><?= formatted_price($prod->product_price) ?></del>

							<?php } ?>
                                </span>
						</center>

						<div class="home_category_product_hover clearfix">

							<a href="#" class="home_add_to_cart_releted_product"
							   data-product_id="<?= $prod->product_id ?>"
							   data-product_price="<?= $sell_price ?>"
							   data-product_title="<?= $_product_title ?>"><i
									class="icon icon-online-shopping-cart"></i>  Add to Cart</a>

							<a href="#" class="home_buy_now_releted_product"
							   data-product_id="<?= $prod->product_id ?>"
							   data-product_price="<?= $sell_price ?>"
							   data-product_title="<?= $_product_title ?>"><i
									class="icon icon-bag"></i>  Buy Now</a>

						</div>
					</div><!-- .xs-product-category text-center END -->



						<?php
					}
					}

					?>


				</div>


				</div>
		</div>
	</div>




	</div>
	</div>

<?php } ?>

<script>




		$('body').on('click', '.home_add_to_cart_releted_product', function () {
		var product_id = $(this).attr('data-product_id');
		var product_price = $(this).attr('data-product_price');
		//var product_size = $('#product_size').val();
		var product_title = $(this).attr('data-product_title');

		var product_qty = 1;
		if ($("input#quantity").length > 0) {
			product_qty = $("input#quantity").val();

		}


		$.ajax({
			type: 'POST',
			cache: true,
			data: {
				"product_id": product_id,
				"product_qty": product_qty,
				"product_price": product_price,
				"product_title": product_title

			},
			url: '<?php echo base_url()?>ajax/add_to_cart',
			success: function (result) {


				var total_result = JSON.parse(result);
				$('.xs-item-count').text(total_result.cart_items);
				$('#total_item_bag').text(total_result.cart_items);
				$('.total_item_bag').text(total_result.cart_items);
				$('#total_amount_bag').text(total_result.cart_total);


			}

		});

		return false;
	});

</script>


<script>
	jQuery('body').on('click', '.home_buy_now_releted_product', function () {
		var product_id = jQuery(this).attr('data-product_id');
		var product_price = jQuery(this).attr('data-product_price');
		var product_title = jQuery(this).attr('data-product_title');

		var product_qty = 1;
		if ($("input#quantity").length > 0) {
			product_qty = $("input#quantity").val();

		}

		jQuery.ajax({
			type: 'POST',
			cache: true,
			data: {
				"product_id": product_id,
				"product_qty": product_qty,
				"product_price": product_price,
				"product_title": product_title
			},
			url: '<?php echo base_url()?>ajax/add_to_cart',
			success: function (result) {

				var total_result = JSON.parse(result);

				$('#shoping_bag .itemno').text(total_result);
				var location = '<?php echo base_url() ?>chechout';
				//window.location('')
				window.location.href = location;
			}
		});

		return false;
	});
</script>
