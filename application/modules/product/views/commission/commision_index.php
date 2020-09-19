<div class="col-md-12">
    <div class="box-body">
        <section class="content" style="background-color: white;">
            <br>
            <div class="text-center" style="color: green;" id="add_msg"></div>
            <br>
            <form action="" method="post" id="add_commission">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            
                            <tr><td colspan="2">Product name:<?php echo $product_name;?></td></tr>
                            <tr>
                                <td>Commission Rate</td>
                                <td>
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    <input type="hidden" name="check_status" value="<?php echo $check_status; ?>">
                                    <input type="hidden" id="set_id" name="id">
                                    <input type="text" id="commission" name="commission" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td><input type="text" id="start_date" name="start_date" autocomplete="off" class="form-control withoutFixedDate"></td>
                            </tr>
                            <tr>
                                <td>End Date</td>
                                <td><input type="text" id="end_date" name="end_date" autocomplete="off" class="form-control withoutFixedDate"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-success" value="Set Commission"></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-4">
                    <h4>Total Commision product:<?php echo $total_product;?></h4>
                    </div>
                    <div class="col-md-4">
                    <h4>Total Zero Commision product:<?=$total_zero_product?></h4>
                    </div>
                      <div class="col-md-4">
                         
                    <input type="text"    name="search_code" id="search_code" value="" class="form-control" placeholder="Enter Product Code / Product Title" />
                    </div>
                </div>
           
                <br/>
            <div  id="ajaxdata" class="table-responsive">
                
               
            <table   class="table table-bordered  ">


               <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Product Code</th>
                    <th>Product Name</th>

                    <th>Sell  Price</th>
                    <th>Discount  Price</th>
                    <th>Commission</th>
                    <th>Stat Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

               </thead>
                <?php
                $i = 0;
                foreach ($commission as $v_commission) {
                    $i++;
                    $link=base_url().'product/'.$v_commission->product_name;
                    ?>


                 <tbody>
                    <tr>
                        <td><?php echo $i; ?>
                            <input type="hidden" id="get_id<?php echo $i; ?>" value="<?php echo $v_commission->id; ?>">
                        </td>
                        <td><?php echo $v_commission->sku; ?></td>
                        <td><a href="<?php echo $link;?>" target="_blank"><?php echo $v_commission->product_title; ?></a></td>
                        <td><?php echo $v_commission->product_price; ?></td>
                        <td><?php echo $v_commission->discount_price; ?></td>
                        <td>
                            <?php echo $v_commission->commission; ?>
                            <input type="hidden" id="get_commission<?php echo $i; ?>"
                                   value="<?php echo $v_commission->commission; ?>">
                        </td>
                        <td>
                            <?php echo $v_commission->start_date; ?>
                            <input type="hidden" id="get_start_date<?php echo $i; ?>"
                                   value="<?php echo $v_commission->start_date; ?>">
                        </td>
                        <td>
                            <?php echo $v_commission->end_date; ?>
                            <input type="hidden" id="get_end_date<?php echo $i; ?>"
                                   value="<?php echo $v_commission->end_date; ?>">
                        </td>
                        <td>
                            <?php
                            if ($v_commission->status == 1) {
                                echo "<p style='color: green'>Continue</p>";
                            } else {
                                echo "<p style='color: red'>Closed</p>";
                            } ?>
                        </td>
                        <td>
                            <input type="button" class="btn btn-primary" value="Update"
                                   onclick="update_commission(<?php echo $i ?>)">
                        </td>
                    </tr>
                </tbody>


                <?php } ?>
            </table>
            
              <?php echo $links; ?>
                </div>
        </section>

    </div>

</div>

</div>
</div>
<script>
    function update_commission($id) {
        var set_id = $id;
        var get_commission = $('#get_commission' + set_id + "").val();
        var get_start_date = $('#get_start_date' + set_id + "").val();
        var get_end_date = $('#get_end_date' + set_id + "").val();
        var get_id = $('#get_id' + set_id + "").val();

        $('#commission').val(get_commission);
        $('#start_date').val(get_start_date);
        $('#end_date').val(get_end_date);
        $('#set_id').val(get_id);

    }
</script>
<script>
    $(document).ready(function () {
        $('#add_commission').submit(function () {
            var dataString = $('#add_commission').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>product/ProductController/create_commission',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').show();
                        $('#add_msg').html(result);
                        $('#add_commission').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>all-commission";
                        }, 2000);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        });
    });
</script>





<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>

<script>
    function main_page_pagination($this) {
        var url = $this.attr("href");
      // var date_from = $('#date_from').val();
      // var date_to = $('#date_to').val();
        
      
       
         if (url != '') {
            $.ajax({
                type: "POST",
                 contentType: false,
                async: false,
                url: url,
                   cache: false,
                
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>


 
<script>

$("body").on('input','#search_code', function(){
    
  var product=  $(this).val();
    $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>product/ProductController/all_commission',
                data: {product: product},
                success: function (data) {
                    console.log(data);
                    $("#ajaxdata").html(data);
                },
                error:function(data){
                    alert('error')
                    console.log(data);
                }
            });
});
     
      
</script>
