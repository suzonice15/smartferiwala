<div class="col-md-offset-0 col-md-12">

<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo $title; ?></h3>


	</div>
	<div class="box-body">


		<form action="<?php echo base_url()?>review-update"  name="page_update" method="post" enctype="multipart/form-data" >
			<?php $this->load->view('review_form');?>

			<div class="box-footer">
				<button type="submit" class="btn btn-success pull-left">Update</button>
			</div>
		</form>



	</div>
</div>
<script>

		document.forms['page_update'].elements['review_active'].value="<?php echo $riview->review_active;?>";


	</script>













