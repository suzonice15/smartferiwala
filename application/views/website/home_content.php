
<div class="xs-banner banner-fullwidth-version-2 suzon_slider_class">
	<div class="container container-fullwidth">
		<div class="row">
			<div class=" col-lg-12 col-md-12 col-sm-12 owl-loaded owl-drag">


			<div id="demo" class="carousel slide" data-ride="carousel">

	<!-- The slideshow -->
	<div class="carousel-inner">
		<?php

                if ($sliders) {
                    $html = '';
                    $indicators = '';
                    $i = 0;
                    foreach ($sliders as $slider) {
                      $html .= '<div class="carousel-item ' . ($i == 0 ? 'active' : null) . '"><a href="'.$slider->target_url.'">
												<img src="' .base_url(). $slider->homeslider_banner . '" alt="Dhaka Image Slider">
												</a>
											</div>';

		 $indicators .= '<li data-target="#demo" data-slide-to="' . $i . '" class="' . ($i == 0 ? 'active' : null) . '">&nbsp;</li>';

						$i++;

					}
					$html .= '<ol class="carousel-indicators">' . $indicators . '</ol>';

				}
		echo $html;
		?>

	</div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>
</div>
</div>
</div>
</div>

<!-- new arrivals section -->


<span id="dynamic_content"></span>

<span class="top_product"></span>

<div class="xs-banner banner-fullwidth-version-2 home-category-product-list">
	<div class="container-fluid container-fullwidth">
		<span class="home_cat_content"></span>




	</div><!-- .container END -->
</div><!-- end new arrivals section -->


<script>
	$(document).ready(function () {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 0,
			responsiveClass: true,
			responsive: {
				0: {
					items: 2,
					nav: true
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 6,
					nav: true,
					loop: false,
					margin: 5
				}
			}
		})
	})
</script>






<script type="text/javascript">


	$.ajax({
		url:"<?php echo base_url()?>home/top_category",
		type:"get",
		catch:true,
		success:function(data){
			$('#dynamic_content').empty();
			$('.top_product').html(data);
		}
	});

	$.ajax({
		url:"<?php echo base_url()?>ajax/home_cat_contentt",
		type:"get",
		catch:true,
		success:function(data){
			$('.home_cat_content').html(data);
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 0,
					responsiveClass: true,
					responsive: {
						0: {
							items: 2,
							nav: true
						},
						600: {
							items: 3,
							nav: false
						},
						1000: {
							items: 6,
							nav: true,
							loop: false,
							margin: 5
						}
					}
				});
		}
	});
</script>


<script>
	//$(document).ready(function(){

	jQuery('#dynamic_content').html(make_skeleton());

	function make_skeleton()
	{
		var width = $(window).width();


		var count=2;
		if(width <500){
			count=6;
		}  else if(width > 500 && width <990){
			count =3;
		}   else {

			count=2;
		}

		var output = '<div class="ph-item">';
		for(var i = 0; i < 18; i++)
		{

			output  +='<div class="ph-col-'+count+'">';
			output  +=' <div class="ph-picture"></div>';
			output  +=' <div class="ph-row">';
			output  +=' <div class="ph-col-12"></div>';
			output  +=' <div class="ph-col-12"></div>';
			output  +=' <div class="ph-col-4"></div>';
			output  +=' <div class="ph-col-4 empty"></div>';
			output  +='<div class="ph-col-4"></div>';
			output  +=' </div>';
			output  +='</div>';

		}
		output  +=' </div>';
		return output;
	}
	// });

</script>

