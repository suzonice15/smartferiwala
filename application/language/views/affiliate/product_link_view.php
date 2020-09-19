<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Commission %</th>
        <th>Link Action</th>
    </tr>
    <?php foreach ($product_link as $v_link) {

        $featured_image = get_product_meta($v_link->product_id, 'featured_image');
        $featured_image = get_media_path($featured_image, 'thumb');
        $product_link = base_url() . 'product/' . $v_link->product_name;
        $prduct_price = $v_link->product_price;
        $discount_price = $v_link->discount_price;
        if ($discount_price) {
            $price = $discount_price;
        } else {
            $price = $prduct_price;

        }
        ?>
        <tr>
            <td><?php echo $v_link->sku; ?></td>
            <td><a target="_blank" href="<?php echo $product_link ?>"><?php echo $v_link->product_title; ?></a></td>
            <td style="text-align: center;"><img src="<?php echo $featured_image; ?>" width="50" height="50"></td>
            <td>৳<?php echo $price; ?></td>
            <td><?php echo $v_link->commission; ?>%</td>
            <td>
                <a href="#" onclick="get_link(<?php echo $v_link->product_id; ?>)" type="button"
                   class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">GET LINK</a>
            </td>
        </tr>
    <?php } ?>
</table>