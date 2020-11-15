<?php
$uri_string = uri_string();
$site_title = get_option('site_title');
$page_title = isset($page_title) ? $page_title : $site_title;
$og_image = $logo =get_option('logo');
$favicon =get_option('icon');



$title = $page_title . (!empty($uri_string) ? ' | ' . $site_title : NULL);



// if (isset($prod_row)) {
//     $og_image = get_product_meta($prod_row->product_id, 'featured_image');
//     $og_image = get_media_path($og_image);
// }


$cart_items = 0;
foreach ($this->cart->contents() as $key => $val) {
	if (!isset($val['qty'])) {
		continue;
	}
	$cart_items += $val['qty'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?= $title ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta charset="utf-8">

	<link rel="shortcut icon" href="<?= $favicon ?>">
	<meta name="title" content="<?=$seo_title?>"/>
	<meta name="keywords" content="<?=$seo_keywords?>"/>
	<meta name="description" content="<?=$seo_content ?>"/>

	<meta name="robots" content="index,follow" />


	<link rel="canonical" href="<?=$canonical?>"/>
	<meta property="og:locale" content="EN"/>
	<meta property="og:url" content="<?= current_url() ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?= $page_title ?>"/>
	<meta property="og:description" content="<?= $page_title ?>"/>
	<meta property="og:image" content="<?= $og_image ?>"/>
	<meta property="og:site_name" content="<?= $site_title ?>"/>

	<link rel="image_src" href="<?= $og_image ?>"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/jquery-ui.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/iconfont.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/isotope.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/vertical-menu.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/navigation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/lightslider.css">

	<!--For Plugins external css-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/plugins.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/mobile_menu.css"/>
	<!--Theme custom css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/mycustom.css">

	<!--Theme Responsive css-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/responsive.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontend/css/owl.carousel.min.css"/>
	<script src="<?php echo base_url(); ?>assets/fontend/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.3.5/dist/sweetalert2.all.min.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

</head>
<body>

<style>
	.sticky_class {
		position: fixed;
		top: -64px;
		border: 2px solid #ddd;
		background-color: #F7F7F7;
		z-index: 99999;
		height: 64px;
		margin-top: 55px;
		width: 100%;
	}
	.desktop_new_sticky_class{
		position: fixed;
		top: -4px;
	}
	}

	.sticky_mobile_class {
		position: fixed;
		top: -66px;

		background-color: #fff;
		z-index: 99999;
		height: 53px;
		margin-top: 55px;
		width: 100%;
	}

	.top_sticky_category_menu {
	}

	.sticy_menu_id {
		position: relative;
		top: -24px;
		left: 44px;
	}

	.sticy_menu_id1 {
		position: relative;
		top: 1px;
		left: 44px;
	}
</style>


<div class="xs-top-bar d-none d-md-none d-lg-block d-print-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row">

					<div class="col-lg-6">
						<p>Hotline: <?= get_option('hotline') ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<ul class="xs-top-bar-info right-content">
					<?php

					$active = $this->session->userdata('user_status');
					$user_f_name = $this->session->userdata('user_f_name');
					$user_l_name = $this->session->userdata('user_l_name');
					$name = $user_f_name . ' ' . $user_l_name;
					if ($active == 'active') {

						?>

					<?php } else { ?>

						<li><a href="<?=base_url()?>pages/how-to-buy"  >How to Buy</a></li>
						<li><a href="<?=base_url()?>affiliate/login_signup"  >Register</a></li>
						<li><a href="<?=base_url()?>affiliate/login_signup"  >Sign In</a></li>
					<?php } ?>


				</ul><!-- .xs-top-bar-info END -->

			</div>
		</div><!-- .row END -->
	</div><!-- .container END -->
</div>

<!-- header section -->
<header class="xs-header version-fullwidth d-print-none">
	<!-- nav bar section -->
	<div class="xs-navBar v-yellow  mobile_margin_class_suzon">
		<div class="container container-fullwidth">
			<div class="row">
				<div class="col-lg-2 col-sm-4 xs-order-1" style="margin-top: -12px;">
					<div class="xs-logo-wraper hide_class_suzon">
						<a href="<?php echo base_url() ?>">
							<img src="<?=$logo?>" alt="">
						</a>

					</div>

				</div>
				<div class="justify-content-center  col-lg-8 col-sm-3 xs-order-3 xs-menus-group ">
					<form class="xs-navbar-search" method="get" action="<?php echo base_url() ?>search">
						<div class="input-group ">
							<input type="text" name="q" id="seachId" class="form-control"
								   placeholder="Find your products" autocomplete="off">


							<div class="input-group-btn">

								<button type="submit" class="btn btn-xs btn-success desktop-search-button"><i class="fa fa-search"
																						style="margin-top: 2px;"></i></button>

							</div>


						</div>
						<div class="search_div_section" style="background-color: rgb(255, 255, 255);height: 410px;overflow: scroll;">
							<table id="table_click_hide" class="table table-bordered" style="background-color: #fff;">

								<tbody id="searching_data">


								</tbody>
							</table>
						</div>

					</form>

				</div>


				<div class="col-lg-2 col-sm-5 xs-order-2 xs-wishlist-group">
					<div class="" style="
    float: right;
    margin-top: 35px;
">
						<span id="total_item_bag"><?=$cart_items?> </span>
						<a href="<?=base_url()?>cart""><img style="float:left;width: 30px;" src="<?=base_url()?>images/cart.png"></a>
						<a href="<?=base_url()?>pages/track-your-order" style="margin-left: 0px;margin-right: 6px;"><img src="<?=base_url()?>images/track.png"></a>
						<a href="<?=base_url()?>affiliate/login_signup"><img  style="
    margin-left: 12px;width:30px
"src="<?=base_url()?>images/user.png"></a>

					</div>



				</div>
			</div><!-- .row END -->
		</div><!-- .container END -->
	</div>    <!-- End nav bar section -->

	<!-- nav down section -->
	<div class="xs-navDown v-yellow" id="sticky_class">
		<div class="container container-fullwidth" id="top_category_menu" style="background-color:#333333;margin-top: -30px;">
			<div class="row searh_class_daynamic" style="/*! border: 1px solid #ddd; */height: 56px;/*! border-left: none; *//*! border-right: navajowhite; */background-color: #333333;color: white;">
				<div class="col-lg-3 col-xl-3  d-none d-md-none d-lg-block">

					<div class="cd-dropdown-wrapper xs-vartical-menu v-gray" id="sticy_menu_id">
						<a class="cd-dropdown-trigger" href="#0">
							<i class="fa fa-list-ul"></i> CATEGORIES
						</a>
						<nav  style="margin-top: -22px;" class="cd-dropdown top_sticky_category_menu" >
							 
							<a href="#0"  style="margin-left:-15px" class="cd-close">Close</a>


<style>
.cd-dropdown-content:first-child li {
 margin-top:-28px
}
</style>


							<ul class="cd-dropdown-content">
								<?php
								
								$count=0;
								$parentCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where parent_id=0 and status=1 ORDER BY rank_order ASC");
								foreach ($parentCategories as $parentCategory) {

									$parent_id = $parentCategory->category_id;
									$link_parent = base_url() . 'category/' . $parentCategory->category_name;
									$subCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$parent_id ORDER BY rank_order ASC");

									if ($subCategories) {
										?>

										<li class="has-children" >
											<a class="no-padding"
											   href="<?= $link_parent ?>"><?php echo $parentCategory->category_title; ?>
												<i
													class="fa fa-angle-right submenu-icon"></i></a>


											<ul class="cd-secondary-dropdown is-hidden">
												<li style="margin-top:-28px" class="go-back"><a
														href="<?= $link_parent ?>"><?php echo $parentCategory->category_title; ?> </a>
												</li>

												<?php $subCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$parent_id and status=1 ORDER BY rank_order ASC");
												if (isset($subCategories)) {
													foreach ($subCategories as $subCategory) {

														$sub_parent = $subCategory->category_id;
														$link_sub_parent = base_url() . 'category/' . $subCategory->category_name;

														?>
														<li class="has-children">
															<a href="<?= $link_sub_parent ?>" style="cursor:pointer"
															   class="secend_menu_class"><?php echo $subCategory->category_title; ?>
															</a>
															<ul class="is-hidden" style="height: 350px">
																<?php
																$childenCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$sub_parent and status=1 ORDER BY rank_order ASC");
																if (isset($childenCategories)) {

																	foreach ($childenCategories as $childen) {

																		$sub_parent = $subCategory->category_id;
																		$link_sub_sub_parent = base_url() . 'category/' . $childen->category_name;

																		?>

																		<li><a
																				href="<?= $link_sub_sub_parent ?>"><?php echo $childen->category_title; ?></a>
																		</li>
																		<?php
																	}
																}
																?>

																<!--                                                            <li><a-->
																<!--                                                                    href="-->
																<?//= $link_sub_parent ?><!--">All -->
																<?php //echo $subCategory->category_title; ?><!--</a>-->
																<!--                                                            </li>-->
															</ul>
														</li>
														<?php


													}
												} ?>


											</ul> <!-- .cd-secondary-dropdown -->
										</li> <!-- .has-children -->
									<?php } else { ?>
									
										<li <?php if($count==0) { echo 'style="margin-top:-28px"';} ?> >
											<a href="<?= $link_parent ?>">  <?php echo $parentCategory->category_title; ?>
											</a>


										</li>

									<?php }
									$count++;
								} ?>


							</ul> <!-- .cd-dropdown-content -->


						</nav> <!-- .cd-dropdown -->
					</div>
				</div>
				<div class="col-lg-6 col-xl-6 ">

					<nav class="xs-menus">
						<div class="nav-header">
							<div class="nav-toggle"></div>
						</div><!-- .nav-header END -->
						<div class="nav-menus-wrapper hide_class_suzon" style="transition-property: none;margin-left: -108px;margin-top: -23px;">
							<style>
								.hide_class_suzon ul li a:hover{color:red !important;}
							</style>

							<ul class="nav-menu top_menu_style">
								 		<li><a href="<?php echo base_url(); ?>pages/contact-us">Follow us on Facebook</a>
								<li><a href="<?php echo base_url(); ?>pages/affiliate-program">Watch Reviews on Youtube</a>


								</li>
								<li><a href="<?php echo base_url(); ?>facebook">HOT Deals</a>


							</ul>
						</div><!-- .nav-menus-wrapper END -->
					</nav><!-- .xs-menus END -->

				</div>
				<div class="col-lg-3 col-xl-3 d-none d-md-none d-lg-block">


						<p style="color: black;font-weight: bold;margin-top: 13px;margin-left: -61px;font-size: 15px;color: white;"><img style="width: 45px;" src="https://www.sohojbuy.com/public/call.gif"><?=get_option('phone')?> (AM to 10 PM - Everyday)</p>



				</div><!-- .row END -->
			</div><!-- .container END -->
		</div>    <!-- End nav down section -->
	</div>    <!-- End nav down section -->

	<!-- <div class="nav-cover"></div> -->
</header>
<!-- End header section -->


<header id="hide_mobile_menu">
	<div class="container container-fullwidth"">
		<div class="row">


			<div class="col-1 off-canvas-toggle" style="margin-top: 8px;cursor: pointer;display:none">


				<div class="moble_menu_icon"></div>
				<div class="moble_menu_icon"></div>
				<div class="moble_menu_icon"></div>


			</div>

			<div class="col-4">

				<a href="<?php echo base_url() ?>">
					<img src="<?php echo get_option('logo') ?>" alt="" style="margin-left: 10px;
margin-top: 5px;display:none">
				</a>
			</div>

			<div class="col-7">

				<nav class="xs-menus" style="margin-top: -8px;z-index: 9999999">
					<div class="nav-header">
						<div hidden class="nav-toggle" style="position: absolute;

top: 615px;"></div>
					</div><!-- .nav-header END -->
					<div class="nav-menus-wrapper " style="display:none">
						<ul class="nav-menu" style="text-align: center;font-size: 16px;
font-family: initial;">
							<li><a href="<?php echo base_url(); ?>">Home</a>


							<li><a href="<?php echo base_url(); ?>pages/affiliate-program">Affiliate</a>

							<li><a href="<?php echo base_url(); ?>all-products">All Products</a>


							</li>

							<?php

							$active = $this->session->userdata('user_status');
							$user_f_name = $this->session->userdata('user_f_name');
							$user_l_name = $this->session->userdata('user_l_name');
							$name = $user_f_name . ' ' . $user_l_name;
							if ($active == 'active') {

								?>
								<li>
									<div class="dropdown">
										<button type="button" class=" dropdown-toggle" data-toggle="dropdown"
												style="background-color: #F5F5F5;color: black;border: none;">
											Welcome <?php echo $name ?>
										</button>
										<div class="dropdown-menu dropdown-menu-right" style="z-index:9999999999">
											<a class="dropdown-item"
											   href="<?php echo base_url() ?>Affiliate/my_account">My
												ACCOUNT</a>
											<a class="dropdown-item" href="<?php echo base_url() ?>Affiliate/logOut">Sign
												Out</a>

										</div>
									</div>
								</li>
							<?php } else { ?>

								<li><a href="<?php echo base_url() ?>affiliate/login_signup">Login / signup</a></li>
							<?php } ?>


						</ul>
					</div><!-- .nav-menus-wrapper END -->
				</nav><!-- .xs-menus END -->

				<nav class="navbar navbar-expand-sm" style="margin-top: -75px;

margin-left: 50px;z-index: 10000">

					<!-- Links -->
				</nav>


			</div>


		</div><!-- .row END -->
	</div><!-- .container END -->


	<div class="row">
		<div class="col-12">
			<form class="xs-navbar-search" method="get" action="<?php echo base_url() ?>search">
				<div class="input-group " style="margin-top: 11px;">
					<input type="text" style="height: 40px;
width: 79%;
margin-left: 1px;
z-index: 10000000;" name="q" id="seach_mobile_Id"
						   class="form-control"
						   placeholder="Find your products" autocomplete="off">
					<div class="input-group-btn ">
						<button type="submit" class="btn btn-success" style="height: 40px;padding: 10px;z-index: 44444;"><i
								class="fa fa-search"></i></button>
					</div>
				</div>
				<div class="search_div_section">
					<table id="table_mobile_click_hide" class="table table-bordered" style="background-color: #fff;">

						<tbody id="searching_mobile_data">


						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div><!-- .row END -->
	</div><!-- .container END -->


	<!-- <div class="nav-cover"></div> -->
</header>



<div class="wrapper">

	<nav class="mobile-nav">


		<ul class="nav__item-container" style="margin-left: 72px;">


			<li class="nav__item off-canvas__container" data-off-canvas-direction="left">


				<a  style="position: relative;

left: -59px;

font-size: 15px;

color:
black;

top: 0px;

padding: 8px 1px;" href="JavaScript:Void(0);"
					id="mobile_menu_close_cross_icon" >CATEGORIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✕</a>


				<ul class="nav__item__content off-canvas__content">

					<?php
					$parentCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where parent_id=0 and status=1 ORDER BY rank_order ASC");
					foreach ($parentCategories as $parentCategory) {

						$parent_id = $parentCategory->category_id;
						$link_parent = base_url() . 'category/' . $parentCategory->category_name;
						$subCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$parent_id and status=1 ORDER BY rank_order ASC");

						if ($subCategories) {
							?>

							<li class="nav__item">
							<span class="nav-click"><i class="fa fa-fw fa-angle-down"></i></span>
							<a href="<?php echo $link_parent; ?>"
							   class="nav__item__title"><?php echo $parentCategory->category_title; ?></a>
							<?php
							$subCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$parent_id and status=1 ORDER BY rank_order ASC");
							if (isset($subCategories)) {
								foreach ($subCategories as $subCategory) {

									$sub_parent = $subCategory->category_id;
									$link_sub_parent = base_url() . 'category/' . $subCategory->category_name;


									?>
									<ul class="nav__item__content">
										<?php $childenCategories = get_result("SELECT category_id,category_name,category_title FROM `category` where  parent_id=$sub_parent and status=1 ORDER BY rank_order ASC");
										if (isset($childenCategories)) {

											?>

											<li class="nav__item">
												<span class="nav-click"><i class="fa fa-fw fa-angle-down"></i></span>
												<a href="#"
												   class="nav__item__title"><?php echo $subCategory->category_title; ?></a>
												<ul class="nav__item__content">
													<?php foreach ($childenCategories as $childen) {

														$sub_parent = $subCategory->category_id;
														$link_sub_sub_parent = base_url() . 'category/' . $childen->category_name;

														?>

														<li class="nav__item"><a
																href="<?php echo $link_sub_sub_parent; ?>"
																class="nav__item__title"><?php echo $childen->category_title; ?></a>
														</li>

													<?php } ?>

												</ul>
											</li>
										<?php } else { ?>
											<li class="nav__item"><a href="<?php echo $link_sub_parent; ?>"
																	 class="nav__item__title"><?php echo $subCategory->category_title; ?></a>
											</li>

											</li>
										<?php } ?>


									</ul>


								<?php }
							}
						} else { ?>


							<li class="nav__item"><a href="<?= $link_parent ?>"
													 class="nav__item__title"><?php echo $parentCategory->category_title; ?></a>
							</li>

						<?php }
					} ?>

				</ul>

			</li>

		</ul>


	</nav>


</div>

<!-- End header section -->

