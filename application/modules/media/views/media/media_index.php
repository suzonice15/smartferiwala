<div class="col-md-offset-0 col-md-12">
<div class="box  box-success">
	<div class="box-header with-border">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<a href="<?=base_url('media-create')?>" class="btn btn-success">Add New</a>
				<input type="submit" name="delete" value="Delete" id="deleteAll"  onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')" class="btn btn-danger" id="del_all" data-table="product"/>

			</div>


			<div class="col-md-4 col-sm-6 col-xs-12 pull-right " style="text-align:right;">

				<input type="text" name="media_title"  placeholder="Enter product Code or Product Title" id="media_title" oninput="return search_content()"  class="form-control "  />
			</div>
		</div>
	</div>
	<div class="box-body">
	<div class="table-responsive" id="ajaxdata">
				<table  class="table table-bordered table-striped table-responsive ">
					<thead>
					<tr>
					    <th width="5%">Sl#</th>
						<th width="5%"><input type="checkbox" id="checkAll"></th>
						 
						<th width="10%">Picture</th>
						<th width="30%">Media </th>
						<th width="30%">Url </th>
					</tr>
					</thead>
					<tbody>
					<?php if (isset($media)){
						$i = 0;
						foreach ($media as $med) {

							?>
							<tr>
							 <td><?php echo ++$i;?></td>

								<td><input type="checkbox" id="<?php echo $med->media_id; ?>" class="checkAll" value="<?php echo  $med->media_id; ?>"></td>

								 
								<td>

									<img src="<?php echo base_url();echo $med->media_path; ?>" width="50" height="50"/>
								</td>
								<td><?php echo $med->media_title; ?></td>
								<td> <input id="url_<?php echo $med->media_id ?>"  class="form-control lg " value="<?php echo base_url();echo $med->media_path;?>"/>
									<button  id="<?php echo $med->media_id ?>" class="btn btn-success selectAllUrl">Copy text</button>

								</td>

							</tr>

						<?php }} ?>
					</tbody>

				</table>
				
					<?php echo $links; ?>
			</div>
			
		
		<div>
		    
		    
		     
		</div>

	</div>

</div>
</div>
 

 
 



<script>


		$(document).on("change", "#checkAll", function(event){

		if($(this).is(":checked")){

			$('.checkAll').prop('checked',true);

		}

		else if($(this).is(":not(:checked)")){

			$('.checkAll').prop('checked',false);

		}

	});
	$('#deleteAll').click(function (e) {
		e.preventDefault();
		var medId = new Array();

	//	var allId = $('.checkAll').val();
		$('.checkAll').each(function () {
			if ($(this).is(":checked")) {
				medId.push(this.id);
			}
		});
		if (medId.length > 0) {
			$.ajax({

				url: '<?php echo base_url()?>media/mediaController/multipleDelete',
				data: {media_id: medId},
				type: 'post',
				success: function (data) {
					alert(data)
					window.location = '<?php echo base_url()?>media-list';
				}
			});
		} else {
		 alert("Select at least one product checkbox");

	}


	});

</script>
<script>

		$(document).on("click", ".selectAllUrl", function(event){

			url_id=this.id;
		var urlLink=$('#url_'+url_id);
		urlLink.select();
		document.execCommand("copy");
	})



</script>
<script>
	$(document).ready(function () {
		$("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
	});
</script>

<script>
	function main_page_pagination($this) {
		var url = $this.attr("href");
		if (url != '') {
			$.ajax({
				type: "POST",
				url: url,
				success: function (msg) {
					$("#ajaxdata").html(msg);
				}
			});
		}
		return false;
	}
</script>
<script>
	function search_content() {
	
		var media_title = $("#media_title").val();

		if ($.trim(media_title) != ""  ) {
			$.ajax({
				type: "post",
				url: '<?php echo base_url()?>media/MediaController/index',
				data: {media_title:media_title },
				success: function (data) {
					$("#ajaxdata").html(data);
				}
			});
		} else {
			$.post(base_url + "media/MediaController/index", function (data) {
				$("#ajaxdata").html(data);
			});
		}
	}
</script>
 