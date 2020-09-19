
<input required type="hidden" id="category_title" class="form-control the_title" name="page_id" value="<?php if(isset($page)){ echo $page->page_id;} ?>">
	<div class="form-group ">
		<label for="category_title"> Page Name<span class="required">*</span></label>
		<input required type="text" id="category_title" class="form-control the_title" name="page_name" value="<?php if(isset($page)){ echo $page->page_name;} ?>">

	</div>
	<div class="form-group "> <label for="category_name">Page Link<span class="required">*</span></label>
		<input  required type="text" class="form-control the_name" id="category_name" name="page_link" value="<?php if(isset($page)){ echo $page->page_link;} ?>">
	</div>
	<div class="form-group ">
		<label for="page_template">Select Template</label>
		<select name="page_template" class="form-control" id="page_template">
			<option value="default" >Default</option>
			<option value="full_width">Full Width</option>
			<option value="contact">Contact</option>
			<option value="trackorder">Track Order</option>
		</select>
	</div>



	<div class="form-group ">
		<label for="page_content">Page Content</label>
		<textarea      name="page_content"  rows="10" cols="50" class="form-control ckeditor" id="page_content">
<?php if(isset($page)){ echo $page->page_content;} ?>
		</textarea>
	</div>
	
	<div class="box box-primary" style="border: 2px solid #ddd;">
    <div class="box-header" style="background-color: #bdbdbf;">
        <h3 class="box-title">SEO Options</h3>
    </div>

    <div class="box-body">

        <div class="form-group ">
            <label for="seo_title"> Title</label> <input type="text" class="form-control" name="page_seo_title" id="seo_title" value="<?php if(isset($page)){ echo $page->seo_title;} ?>"></div>
         
        <div class="form-group "><label for="page_seo_meta"> Meta Description</label> <textarea class="form-control" rows="5" name="page_seo_meta" id="page_seo_meta"><?php if(isset($page)){ echo $page->page_seo_meta;} ?></textarea>
        </div>
        <div class="form-group "><label for="page_seo_key">Meta Keywords</label> <input type="text" class="form-control" name="page_seo_key" id="page_seo_key" value="<?php if(isset($page)){ echo $page->page_seo_key;} ?>">
        </div>
        

    </div>
</div>

