<div class="col-md-offset-0 col-md-12">
    <div class="box  box-success">
        <div class="box-header with-border  ">

            <?php

            function order_status($id)
            {
                $array_value = Array(
                    'new' => 'New',
                    'pending_payment' => 'Pending for Payment',
                    'processing' => 'On Process',
                    'on_courier' => 'With Courier',
                    'delivered' => 'Delivered',
                    'completed' => 'Completed',
                    'refund' => 'Refunded',
                    'cancled' => 'Cancelled'


                );
                echo $array_value[$id];
            }

            ?>


            <form action="<?php echo base_url() ?>order-list-report" name="order" method="post">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="email">Order status</label>

                            <select class="form-control select2" id="order_status" name="order_status" >
                                <option value="">--select--</option>

                                <option value="new">New</option>
                                <option value="pending_payment">Pending for Payment</option>
                                <option value="processing">On Process</option>
                                <option value="on_courier">With Courier</option>
                                <option value="delivered">Delivered</option>
                                <option value="refund">Refunded</option>
                                <option value="cancled">Cancelled</option>
                                <option value="completed">Completed</option>
                              
                              
                            </select>
                        </div>
                    </div>
                   
                   
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Date From</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" id="date_from" name="date_from"
                                       class="form-control pull-right  withoutFixedDate"
                                       value=" ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Date To</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" id="date_to" name="date_to"
                                       class="form-control pull-right  withoutFixedDate  "
                                       value=" ">
                            </div>
                        </div>
                    </div>
                      <div class="col-md-3">
                       
                        
                       
                        <div class="form-group">
                              <label>Order Id or Phone</label>
                             <input type="text" name="input_id" oninput="return search_content()" id="input_id" placeholder="Enter order Id or Phone" class="form-control">
                            
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                       
                        
                          <br/>
                        <div class="form-group">
                           
                            <button type="submit"  class="btn btn-success">Filter</button>
                        
                           <a href="<?php echo base_url()?>order-create" class="btn btn-info" >Add New Order</a>
                        </div>
                    </div>


                </div>
            </form>


        </div>
        <div class="box-body">
            <div id="ajaxdata" class="table-responsive">
                <table   class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Order Id</th>
                        <th>Customer</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Created By</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Affiliater </th>

                        <th>Date</th>
                        <th>Actions&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    if (isset($orders)) {
                        $html = NULL;
                        $i = 0;
                        //echo '<pre>'; print_r($orders); echo '</pre>';
                        foreach ($orders as $row) {
                            if ($row->order_status == 'new') {
                                $order_status = 'New';
                            } else if ($row->order_status == 'pending_payment') {
                                $order_status = 'Pending for Payment';
                            } else if ($row->order_status == 'processing') {
                                $order_status = 'On Process';
                            } else if ($row->order_status == 'on_courier') {
                                $order_status = 'With Courier';
                            } else if ($row->order_status == 'delivered') {
                                $order_status = 'Delivered';
                            } else if ($row->order_status == 'completed') {
                                $order_status = 'Completed';
                            } else if ($row->order_status == 'refund') {
                                $order_status = 'Refunded';
                            } else {
                                $order_status = 'Cancelled';

                            }
                            if ($row->affiliate_user_id == 0) {
                                if($row->staff_id >0 ){
                                     $name = 'Admin User';
                                } else {
                                    $name = 'General customer'; 
                                    
                                }
                               
                            } else {
                                $this->db->select('affiliate_users.*');
                                $this->db->join('order_data', 'affiliate_users.user_id=order_data.affiliate_user_id');
                                $this->db->where('order_data.affiliate_user_id', $row->affiliate_user_id);
                                $this->db->where('affiliate_users.affiliate_request_status', 2);
                                $results = $this->db->get('affiliate_users')->row();
                                $name = $results->user_f_name;
                                $affiliate_id = $results->user_id;
                                if(empty($name)){
                                   $name= 'General customer';
                                   $affiliate_id='';
                                }
                            }
                            //print_r($results);
                            $created_by=substr($row->created_by,0,20);
                               $customer_name=substr($row->customer_name,0,20);
                               $total= str_replace(","," ",$row->order_total);
                                $name=substr($name,0,15);


                            $html .= '<tr>
											<td>' . ++$i . '</td>
											<td>' . $row->order_id . '</td>
												<td>' . $customer_name . '</td>
												<td>' . $row->customer_phone . '</td>';
                            $html .= '<td> ' . $row->city . '</td>';

                            $html .= '<td>' . $created_by . '</td>';


                            $html .= '<td> ৳ ' .$total.'.00</td>';
                            $html .= '<td>' . $order_status . '</td>';
                            $html .= '<td> <a  style="
    width: 150px;
" target="_blank" href="' . base_url() . 'affilator-order-view/'. $row->order_id .'" class="btn btn-info">' .$affiliate_id . ' '.$name . '</a></td>';


                            $html .= '<td>' . date('d-M-Y h:i:s a', strtotime($row->created_time)) . '</td>
												<td class="action text-center">';


                            $html .= '	<a   href="' . base_url() . 'order-view/' . $row->order_id . '"> <span class="glyphicon glyphicon-edit btn btn-success"></span>&nbsp;</a>
													 	</td>
											</tr>';
                        }
                        echo $html;

                    }
                    ?>
                    

                    </tbody>
                </table>
                 <?php echo $links; ?>

            </div>
          
          

        </div>

    </div>
</div>

 
 
<script>
    function search_content() {
  
  
        var input_id = $('#input_id').val();
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/index',
                data: {input_id: input_id},
                success: function (data) {
                    console.log(data);
                    $("#ajaxdata").html(data);
                },
                error:function(data){
                    alert('error')
                    console.log(data);
                }
            });
        
        
     
    }
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
        var order_status = $('#order_status').val();
      
       
         if (url != '') {
            $.ajax({
                type: "POST",
                 contentType: false,
                async: false,
                url: url,
                   cache: false,
                   data: { order_status: order_status},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>

