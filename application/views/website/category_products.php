<div class="container container-fullwidth">
	<nav class="bg-white">
		<ol class="breadcrumb">
			<li class="breadcrumb-item text-decoration-none"><a href="<?php echo base_url() ?>">Home</a></li>
			<li class="breadcrumb-item active"><a
					href="<?= $breadcumb_category_link ?>">            <?= $breadcumb_category ?>
				</a>
		</ol>
	</nav>
</div>

<div class="container">
	<div class="row">
		<div  id="product_serial" class="col-md-6 float-left">
<!--			Items 1-12 of <span id="total_product"></span>-->
		</div>
		<div class="col-md-6 float-right" style="text-align: right">
			Sort By


			<select  id="sorting" style="height: 37px;
width: 200px;" >
				<option value="default">Default</option>
				<option value="name_asc">Name A-Z</option>
				<option value="name_desc">Name Z-A</option>
				<option value="price_asc">Pirce Low to High</option>
				<option value="price_desc">Pirce High to Low</option>

			</select>
		</div>
	</div>
</div>

<style>
	.cat_class{
		padding-left:65px;padding-right:65px;

	}

	@media only screen and (max-width: 600px) {
		.cat_class {
			padding-left: 5px;
			padding-right: 5px;
		}

	}
</style>

<section class="xs-section-padding" style="padding-top: 5px">
	<div class="container-fluid cat_class"  >

<span id="dynamic_content"></span>
		<span class=" filter_data"></span>


	</div><!-- .container END -->
</section><!-- end product info section -->



<input type="hidden" class="form-control" id="category_id" name="category_id" value="<?php echo $category_id; ?>"/>


<script>
	$(document).ready(function () {

		var per_page=12;
		var page=1;


		var sorting_data='default';
		filter_data(1);

		function filter_data(page,sorting_data) {
			$('.filter_data').html('<div id="loading" style="" ></div>');

			var category_id = $('#category_id').val();
			sorting=sorting_data;

			$.ajax({
				url: "<?php echo base_url(); ?>Ajax/product_filter/" + page,
				method: "POST",
				dataType: "JSON",
				data: {
					category_id: category_id,

					sorting:sorting
				},
				success: function (data) {
$('#dynamic_content').empty();
					$('.filter_data').html(data.product_list);
					$('#pagination_link').html(data.pagination_link);
					$('#product_serial #total_product').text(data.total);
				},
				error: function (data) {
					console.log(data)
					$('.filter_data').html(data.product_list);
					$('#pagination_link').html(data.pagination_link);
					$('#product_serial #total_product').text(data.total);


				}
			});
		}

		$(document).on('click', '.pagination li a', function (event) {
			event.preventDefault();
			var page = $(this).data('ci-pagination-page');
			filter_data(page);
		});

		// $(document).on('change', '#page_id', function () {
		// 	var page_id = $('#page_id').val();
		// 	filter_data(page_id);
		//
		//
		//
		// });
		$(document).on('change', '#sorting', function () {
			var sorting = $('#sorting').val();

			filter_data(page,sorting);



		});

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

