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
						$i=$count;
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
			
		
			
			<script>
	$(document).ready(function () {
		$("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
	});
</script>
	