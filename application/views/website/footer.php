



<a id="button_move_to_top"> </a>

<style>
    .xs-footer-section address,.xs-footer-section ul a{color:white}
 .xs-footer-section ul a:hover{color:white}

</style>

<footer class="xs-footer-section d-print-none" style="background-color: #333E4F;color:white">
    <div class="xs-footer-main">
        <div class="container container-fullwidth">
            <div class="row no-gutters">
                <div class="col-lg-12  col-md-12 row xs-footer-info-and-payment">

					<div class=" col-lg-2 col-md-6  col-12 footer-widget">
						<h5 style="margin-bottom: -3px;">Menu</h5>

						<ul class="xs-list" style="margin-bottom: 10px;">

							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/about-us">About US</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/privacy-policy">Privacry Policy</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/terms-conditions">Terms and Conditions</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/return-refund-policy">Return and
									Refund Policy</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/contact-us">Contact US</a></li>

						</ul><!-- .xs-list END -->


					</div><!-- .footer-widget END -->

					<div class=" col-lg-2 col-md-6 col-12 footer-widget">
						<h5 style="margin-bottom: -3px;">Earn with us </h5>


						<ul class="xs-list">


							<li><a  style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>affiliate/login_signup">Join Affiliate Program</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/affiliate-program">Affiliate Program</a></li>
							<li><a target="_blank" style="font-style: normal;
line-height: inherit;" href="<?php echo base_url() ?>pages/affiliate-faq">Affiliate FQA</a></li>



						</ul><!-- .xs-list END -->
						</ul><!-- .xs-list END -->
					</div><!-- .footer-widget END -->




                    <div class="col-lg-4 col-md-6 col-12  media">
                        <span class="icon icon-highlight color-yellow d-flex"></span>
                        <div class="media-body">
                            <h5>We Using Safe Payments </h5>
                            <ul class="xs-payment-card">

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo base_url() ?>images/bkashp.png"
                                            style="height: 32px;border-radius: 7px;" alt="payment-icon-image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img
                                            src="<?php echo base_url() ?>images/roket.png"
                                            style="height: 29px;border-radius: 7px;" alt="payment-icon-image">
                                    </a>
                                </li>


                            </ul><!-- .xs-payment-card END -->
                            <div class="xs-footer-secure-info">
                                <h6>	Verified by:</h6>
                                <ul class="footer-secured-by-icons">
                                    <li>
                                        <img
                                            src="https://wp.xpeedstudio.com/marketo/wp-content/uploads/2018/06/norton_av_logo1.png"
                                            alt="norton">
                                    </li>
                                    <li>
                                        <img
                                            src="https://wp.xpeedstudio.com/marketo/wp-content/uploads/2018/06/mcAfee_logo1.png"
                                            alt="mcafee">
                                    </li>
                                </ul>
                            </div><!-- .xs-footer-secure-info END -->
                        </div>
                    </div><!-- .media END -->

					<div class="col-lg-4 col-md-6 media">
						<span class="icon icon-support color-yellow d-flex"></span>
						<div class="media-body">
							<h5>Got Question? Call us 24/7 <br><?= get_option('phone') ?></br></h5>
							<address>House 13B, Block B <br/>
								Second Colony, Mazar Road <br>
								Dhaka-1216, Bangladesh

							</address>
							<p>E-mail: Support@smartferiwala.com</p>
						</div>
					</div><!-- .media END -->


				</div>

            </div>
        </div>
    </div><!-- .xs-footer-main END -->
    <div  style="background-color: #333E4F;color:white;border-top: 1px solid #485160;" class="xs-copyright copyright-yellow <?php if(isset($product_page_error_solve)) {  echo 'product_page_error_solve' ;  } ?>" style="background-color: green;"  >
        <div class="container container-fullwidth" >
            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="xs-copyright-text" style="color:#ffffff">
                        ©  <?= get_option('copyright') ?>

                    </div>
                    <!-- .xs-copyright-text END -->
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                    <ul class="xs-social-list version-2">
                        <li><a style="color:#ffffff" target="_blank" href="<?php echo get_option('facebook'); ?>"><i
                                    class="icon icon-facebook"></i>Facebook</a></li>
                        <li><a style="color:#ffffff" target="_blank" href="<?php echo get_option('youtube'); ?>"><i
                                    class="icon icon-youtube-v"></i>Youtube</a></li>
                        <li><a style="color:#ffffff" target="_blank" href="<?php echo get_option('twitter'); ?>"><i
                                    class="icon icon-twitter"></i>Twitter</a></li>

                        <li><a style="color:#ffffff" target="_blank" href="<?php echo get_option('instagram'); ?>"><i
                                    class="icon icon-instagram"></i> Instagram</a></li>
                    </ul><!-- .xs-social-list END -->
                </div>
            </div>

        </div>
    </div><!-- .xs-copyright END -->
</footer>


<div class="mobile_menu_area">
    <div class="container">
        <div class="row">

            <div class="col-2" style="text-align: center">

                <a href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url() ?>images/l.png" width="25" alt="" style="margin-left: 10px;

margin-top: 5px;

margin-bottom: -2px;">

                    <span style="margin-left: 8px;
font-size: 12px;color:black"> Home</span>
                </a>
            </div>


            <div class="col-2">


                <div class="col-1 off-canvas-toggle" style="margin-top: 14px;

cursor: pointer;

margin-bottom: -13px;">


                    <i class="fa fa-fw fa-bars">
                        <span style="font-size: 12px;
margin-left: -17px;"> Categories</span>

                    </i>


                </div>


            </div>

            <div class="col-2" style="text-align: center">


                <?php
                $cart_items = $cart_total = 0;
                /*echo '<pre>'; print_r($this->cart->contents()); echo '</pre>';*/

                foreach ($this->cart->contents() as $key => $val) {
                    if (!is_array($val) OR !isset($val['price']) OR !isset($val['qty'])) {
                        continue;
                    }

                    $cart_items += $val['qty'];
                    $cart_total += $val['subtotal'];

                }
                ?>
                <a href="<?php echo base_url() ?>cart">

                    <i class="fa fa-fw fa-shopping-cart" style="margin-top: 14px;margin-left: 20px;"></i>
                    <br>
                  <span style="font-size: 12px;

color:
black;


position: relative;

top: -6px;left: 10px;">  Cart</span>

                    <span class="total_item_bag" style="color:white"><?php echo $cart_items; ?> </span>


                </a>

            </div>
            <div class="col-2" style="text-align: center">
                <a href="<?php echo base_url() ?>pages/track-your-order" class="ml-3">
                    <i class="icon icon-van" style="position: relative;top: 9px;left: 7px;"></i>
                    <span style="color:
black;

position: relative;

top: 4px;left: 10px;

font-weight: initial;font-size: 12px;">Track</span>
                </a>

            </div>

            <div class="col-2" style="text-align: center">
                <a href="<?php echo base_url() ?>affiliate/login_signup" class="ml-3">
                    <i class="fa fa-fw fa-user" style="margin-top: 11px;margin-left: 8px;"></i>
                    <span style="color:
black;

position: relative;

top: -3px;left: 10px;

font-weight: initial;font-size: 12px;">Account</span>
                </a>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/Popper.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery.magnific-popup.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery.menu-aim.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/vertical-menu.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/tweetie.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/echo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/jquery.waypoints.min.js"></script>
 
<script src="<?php echo base_url(); ?>assets/fontend/js/spectragram.min.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/lightslider.js"></script>
<script src="<?php echo base_url(); ?>assets/fontend/js/mobile_menu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fontend/js/elevatezoom.js"></script>

<script>


    function mobile_caollapse_menu_function($id) {
        var categroy_id = $id;
        $('#' + categroy_id).toggle();
        //$('.mobile_caollapse_menu').show();

    }
    $(document).ready(function () {
        $('#mobile_menu_close_cross_icon').hide();
        //   $('.mobile_caollapse_menu').hide();

        $('#mobile_menu_close_cross_icon').click(function () {
            $('.wrapper').hide();
            $(this).hide();
        });

        $('#user_email').blur(function () {
            var error_email = '';
            var email = $('#user_email').val();
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!filter.test(email)) {
                $('#user_email_error').html('<label class="text-danger">email address format is not correct</label>');
                $('#user_email_error .text-danger').fadeOut(50000000);


            }
            else {
                $('#user_email_error').html('');

                $.ajax({
                    url: "<?php echo base_url()?>Affiliate/email_check",
                    method: "POST",
                    data: {email: email},
                    success: function (result) {
                        if (result == 'unique') {
                            // $('#user_email_error').html('<label class="text-success">Ok,Unique</label>');

                        }
                        else {
                            $('#user_email_error').html('<label class="text-danger">Duplicated email Enter another email</label>');

                        }
                    }
                })
            }
        });


        $('#user_mobile').blur(function () {
            var error_email = '';
            var user_mobile = $('#user_mobile').val();
            if (!/^01\d{9}$/.test(user_mobile)) {
                $('#user_phone_error').html("<span class='text-danger'>Invalid phone number: must have exactly 11 digits and begin with 01</span> ");
            } else {
                $('#user_phone_error').html("");


                $.ajax({
                    url: "<?php echo base_url()?>Affiliate/phone_check",
                    method: "POST",
                    data: {phone: user_mobile},
                    success: function (result) {
                        if (result == 'unique') {
                            // $('#user_email_error').html('<label class="text-success">Ok,Unique</label>');

                        }
                        else {
                            $('#user_phone_error').html('<label class="text-danger">This number already been registered, please reset your password or use another number . </label>');
                            $('#signUp"]').attr('disabled', 'disabled');

                        }
                    }
                });
            }
        });

        $('#user_passwor_signup').blur(function () {

            var passowrd = $('#user_passwor_signup').val();

            if (passowrd.length < 8) {
                $('#user_passowrd_error').html("<span class='text-danger'>Enter at least 8 digit password</span> ");
            } else {
                $('#user_passowrd_error').html("");
            }
        });

    });
</script>

<script>


    $(document).ready(function () {

        $('#signUp').click(function () {

            var user_f_name = $('input[name=user_f_name]').val();
            var mobile = $('input[name=user_mobile]').val();
            var user_email = $('#user_email').val();
            var user_password = $('#user_passwor_signup').val();


            if (mobile.length < 10) {

                $('#sign_up_login_error').text("Fill up all the field");

            } else {

                $.ajax({
                    url: "<?php echo base_url()?>Affiliate/sign_up_user",
                    method: "POST",
                    data: {
                        user_email: user_email,
                        user_password: user_password,
                        mobile: mobile,
                        user_f_name: user_f_name
                    },
                    success: function (result) {
                        if (result == 'ok') {
                            window.location.href = '<?php echo base_url();?>affiliate/my_account';
                        }
                    }
                });
            }
        });


    });
</script>

<script>
    $(document).ready(function () {

        $('#user_login').click(function () {
            var user_email = $('#mobile_value').val();
            var user_password = $('#user_password_login').val();


            if (user_email.length < 11 || user_password.length < 1) {
                $('#login_up_sign_error').text("Fill up all the field");
                $('input[type="submit"]').attr('disabled', 'disabled');

            } else {
                $.ajax({
                    url: "<?php echo base_url()?>Affiliate/login_check",
                    method: "POST",
                    data: {user_email: user_email, user_password: user_password},
                    success: function (result) {

                        if (result == 'Login Successfully') {

                            window.location.href = '<?php echo base_url();?>affiliate/my_account';
                        }

                    },
                    errors: function () {

                    }
                });
            }
        });
    });


</script>


<script>

    jQuery(document).ready(function () {
        
        
        
          $.ajax({
            type: 'get',
            url: '<?php echo base_url()?>home/visitor',
            success: function (result) {
              


            }
          });


        var btn = jQuery('#button_move_to_top');


        jQuery(window).scroll(function (e) {


            // OR  $(window).scroll(function() {
            var scroll = jQuery(document).scrollTop();


            if (scroll > 30) {

                btn.show();
            } else {


                btn.hide();
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();

            jQuery('html, body').animate({scrollTop: 0}, '300');
        });

    });

</script>

<script>

     $('body').click(function () {

        $(".search_div_section").hide();

    });
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });

    $("#zoom_09").elevateZoom({
        gallery: "gallery_09",
        galleryActiveClass: "active"
    });

    $(document).ready(function () {

       $(window).scroll(function () {

                var scroll_home_menu = $(window).scrollTop();

            var windowViewPort =   jQuery(window).width()
            var heightViewPort = $(window).height();

            $('.home_icon_class').show();
		   if (windowViewPort >992) {
            if (scroll_home_menu > 10) {



					$('.xs-header').addClass('desktop_new_sticky_class');


				} else {

				$('.xs-header').removeClass('desktop_new_sticky_class');


			}
        }
        if (screen.width < 992) {


            $('#hide_mobile_menu').addClass('sticky_mobile_class');
            $('.desktop_category_menu').hide();
            $('.mobile_category_menu').show();

        } else {
            $('#hide_mobile_menu').removeClass('sticky_mobile_class');


        }

    });


    $('#seachId').on('input', function () {
        var search_query = $('#seachId').val();
        if (search_query.length >= 2) {
            $("#table_click_hide").show();
			console.log('if')

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '<?php echo base_url(); ?>Home/ajax_search_items',
                data: {
                    search_query: search_query
                },

                success: function (response) {
                    console.log(response);

                    if (response.status == "success") {
						$(".search_div_section").show();
						$(".search_div_section").css({"z-index": "1","position":"relative"});
						$("#searching_data").show();

                        $("#searching_data").html(response.return_value);
                    }
                }
            })
        } else {
        	console.log('else')
            $(".search_div_section").hide();

        }

    });
    $('#seach_mobile_Id').on('change input keypress keydown keyup', function () {
        var search_query = $('#seach_mobile_Id').val();
        if (search_query.length >= 1) {
            $("#table_mobile_click_hide").show();

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '<?php echo base_url(); ?>Home/ajax_search_items',
                data: {
                    search_query: search_query
                },

                success: function (response) {
                    console.log(response);
                    $('.search_div_section').show();
                    if (response.status == "success") {
                        $("#searching_mobile_data").html(response.return_value);
                    }
                }
            });
        } else {
			$("#searching_mobile_data").html('');
		}
    });
    });

</script>


<script>



    $('body').on('click', '.add_to_cart_releted_product', function () {
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
	$('body').on('click', '.add_to_cart', function () {
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
	jQuery('body').on('click', '.buy_now', function () {
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

<script>
    jQuery('body').on('click', '.buy_now_releted_product', function () {
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

<script>
    $(document).ready(function () {
        $(".no-padding").click(function () {

            var link = $(this).attr("href");
            window.location.href = link;

        });
    });
    $('.secend_menu_class').click(function () {
        var link = $(this).attr("href");
        window.location.href = link;
    })

</script>

<!--************************************   scroll product show ****************************-->
