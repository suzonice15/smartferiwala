<style>
    .aw-aff-balance-info1 {
        margin-top: 25px;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-align-items: flex-start;
        -ms-align-items: flex-start;
        align-items: flex-start;
        padding-top: 10px;
    }

    .aw-aff-balance-info1 ul {
        background: red;
    }

    .aw-aff-balance-info1 .balance-element {
        position: relative;
        padding-left: 15px;
        margin-right: 40px;
        display: inline-block;
    }

    #search_earning .aw-aff-balance-info1 .balance-element:nth-child(4),
    #search_earning .aw-aff-balance-info1 .balance-element:nth-child(5),
    #search_earning .aw-aff-balance-info1 .balance-element:nth-child(6),
    .aw-aff-balance-info1 .balance-element:last-child {
        background: green;
        margin-right: 0;
        padding: 6px;
    }

    .aw-aff-balance-info1 .balance-element .balance-label {
        display: block;
        color: white;
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        line-height: 1;
        margin-bottom: 5px;
        margin-top: 13px;
    }

    .aw-aff-balance-info1 .balance-element:first-child .balance-label {
        font-size: 15px;
    }

    .aw-aff-balance-info1 .balance-element .balance-value {
        display: block;
        font-size: 18px;
        font-weight: 600;
        line-height: 1;
        color: white;
    }

    .aw-aff-balance-info1 .balance-element:first-child .balance-value {
        font-size: 24px;
    }

    .aw-aff-balance-info1 .balance-element::before {
        content: '';
        position: absolute;
        left: -3px;
        top: 0;
        background-color: #000000;
        height: 100%;
        width: 4px;
    }

    .aw-aff-balance-info1 .balance-element:first-child::before {
        background-color: #669932;
    }
    </style>


<div class="row">
    
        <div   style="background: red;
    margin-top: 9px;
    width: 150px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>      <?php
                             $set_commission = 0;
                             $count_commission = $this->MainModel->on_process_product_approx_earning_from_search($user_id,$from_date,$to_date);
                             foreach ($count_commission as $v_comm) {
                                 $product_items = unserialize($v_comm->products);
                                 if (is_array($product_items['items'])) {
                                     foreach ($product_items['items'] as $product_id => $item) {
                                         $result = $this->MainModel->select_product_commission($product_id);
                                         $set_commission += $result->commission * $item['qty'];
                                     }
                                 }
                             }
                             echo "৳" . round($set_commission, 2);
                             ?></h3>
                        <p style="
    font-weight: bold;
    font-size: 15px;
">Approx. Earning</p>

<p style="    background-color: #880505;
    margin: -6px;
    padding: 7px;
    height: 122px;
    font-size: 13px;
    text-align: left;
">This is the approximate calculation only. It will change as per the order cancellation & refund</p>
          
                       
                    </div>
                    
                    
                      <div  style="    background: red;
    margin-top: 9px;
    width: 150px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>     <?php
                            $count_total_cancel_or_refund_commission = 0;
                            $count_buy_refund = $this->MainModel->cancel_or_refund_product_from_search($user_id,$from_date,$to_date);
                            foreach ($count_buy_refund as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission($product_id);
                                        $count_total_cancel_or_refund_commission += $result->commission * $item['qty'];
                                    }
                                }
                            }
                            echo $count_total_cancel_or_refund_commission;
                            ?></h3>
                       <p style="
    font-weight: bold;
    font-size: 15px;
">Order Cancelled</p>
 <p style="    background-color: #880505;
    margin: -6px;
    padding: 7px;
    height: 122px;
    font-size: 13px;
    text-align: left;
">This amount will be deducted from approx. earing as some orders have been cancelled. </p>
                       
                       
                    </div>
                    
                     
                          <div  style="  background: red;
    margin-top: 9px;
    width: 158px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>    ৳   
                            <?php
                            $count_total_on_process_commission = 0;
                            $count_buy_on_process = $this->MainModel->on_process_product_from_search($user_id,$from_date,$to_date);
                            foreach ($count_buy_on_process as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission($product_id);
                                        $count_total_on_process_commission += $result->commission * $item['qty'];
                                    }
                                }
                            }
                            echo $count_total_on_process_commission;
                            ?></h3>
                       <p style="
    font-weight: bold;
    font-size: 15px;
">Orders On Process</p>
 <p style="    background-color: #880505;
    margin: -6px;
    padding: 7px;
    height: 122px;
    font-size: 13px;
    text-align: left;
">This commission amount are still on process. It will be added to “Order Finalized” after the return period is over  </p>
                       
             
                       
                    </div>
                    
                    
                        
                     
                      <div  style="background: green;
    margin-top: 9px;
    width: 150px;
    color: white;
    padding: 10px;
    
    margin-right: 4px">
                       
                       <h3>       ৳  
                            <?php
                            $count_total_finalized_commission = 0;
                            $total_paid_commission = $this->MainModel->count_total_paid_commission_from_search($user_id,$from_date,$to_date);

                            $finalized_order = $this->MainModel->finalized_product_from_search($user_id,$from_date,$to_date);
                            foreach ($finalized_order as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission($product_id);
                                        $count_total_finalized_commission += $result->commission * $item['qty'];
                                    }
                                }
                            }
                            echo $count_total_finalized_commission;
                            ?></h3>
                        <p style="
    font-weight: bold;
    font-size: 15px;
">Order Finalized</p>
 <p style="    background-color: #055a05;
    margin: -10px;
    padding: 8px;
    height: 121px;
    font-size: 13px;
">This is the final commission amount which you have earned so far</p>
            
                       
                    </div>
                    
                    
                    
                    
                         
                      <div style="background: green;
    margin-top: 9px;
    width: 158px;
    color: white;
    padding: 10px;
  
    margin-right: 4px">
                       
                     <h3>      ৳
                            <?php echo round($total_paid_commission->total_commission_request, 2); ?></h3>
                        <p style="
    font-weight: bold;
    font-size: 15px;
">Total Paid</p>
 <p style=" background-color: #055a05;
    margin: -10px;
    padding: 8px;
    height: 121px;
    font-size: 13px;
">This is the total commission amount you have claimed so far</p>
                       
            
                       
                    </div>
                        
                     <div style="background: green;
    margin-top: 9px;
    width: 182px;
    color: white;
    padding: 10px;
 
    margin-right: 4px">
                       
                       <h3>    ৳
                             <?php echo round($count_total_finalized_commission - $total_paid_commission->total_commission_request, 2); ?></h3>
                      <p style="
    font-weight: bold;
    font-size: 15px;
">Available Commission</p>

  <p style="    background-color: #055a05;
    margin: -10px;
    padding: 8px;
    height: 121px;
    font-size: 13px;
">This is the commission amount available for you to claim/withdrawal</p>
               
                       
                    </div>
                    
                    
                    
                    
    </div>
 