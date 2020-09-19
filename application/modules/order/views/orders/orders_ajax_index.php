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
                                   $name=substr($name,0,15);

                            $html .= '<tr>
											<td>' . ++$i . '</td>
											<td>' . $row->order_id . '</td>
												<td>' . $customer_name . '</td>
												<td>' . $row->customer_phone . '</td>';
                            $html .= '<td> ' . $row->city . '</td>';

                            $html .= '<td>' . $created_by . '</td>';


                            $html .= '<td> ৳ ' . $row->order_total. '.00</td>';
                            $html .= '<td>' . $order_status . '</td>';
                            $html .= '<td> <a style="
    width: 150px;
"  target="_blank" href="' . base_url() . 'affilator-order-view/'. $row->order_id .'" class="btn btn-info">' .$affiliate_id . ' '.$name .'</a></td>';


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
            
            
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>

            
