
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
                
                
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>