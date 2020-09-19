<style>
    .aw-aff-balance-info {
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

    .aw-aff-balance-info ul {
        background: red;
    }

    .aw-aff-balance-info .balance-element {
        position: relative;
        padding-left: 15px;
        margin-right: 40px;
        display: inline-block;
    }

    #main_earning .aw-aff-balance-info .balance-element:nth-child(4),
    #main_earning .aw-aff-balance-info .balance-element:nth-child(5),
    #main_earning .aw-aff-balance-info .balance-element:nth-child(6),
    .aw-aff-balance-info .balance-element:last-child {
        background: green;
        margin-right: 0;
        padding: 6px;
    }

    .aw-aff-balance-info .balance-element .balance-label {
        display: block;
        color: white;
        font-weight: 400;
        font-style: normal;
        font-size: 15px;
        line-height: 1;
        margin-bottom: 5px;
        margin-top: 13px;
    }

    .aw-aff-balance-info .balance-element:first-child .balance-label {
        font-size: 15px;
    }

    .aw-aff-balance-info .balance-element .balance-value {
        display: block;
        font-size: 18px;
        font-weight: 600;
        line-height: 1;
        color: white;
    }

    .aw-aff-balance-info .balance-element:first-child .balance-value {
        font-size: 24px;
    }

    .aw-aff-balance-info .balance-element::before {
        content: '';
        position: absolute;
        left: -3px;
        top: 0;
        background-color: #000000;
        height: 100%;
        width: 4px;
    }

    .aw-aff-balance-info .balance-element:first-child::before {
        background-color: #669932;
    }

    .message-notice-one {
        margin: 0 0 10px;
        padding: 8px 5px 5px 45px;
        display: block;
        background: #fdf0d5;
        color: #6f4400;
        position: relative;
    }

    .message-notice-one:before {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 24px;
        line-height: 24px;
        color: #c07600;
        content: '\f071';
        font-family: 'FontAwesome';
        vertical-align: middle;
        display: inline-block;
        font-weight: normal;
        overflow: hidden;
        speak: none;
        overflow: visible;
        left: 0;
        top: 22px;
        width: 45px;
        position: absolute;
        text-align: center;
        margin-top: -18px;
    }

    .message-notice-two {
        margin: 0 0 10px;
        padding: 8px 5px 5px 45px;
        display: block;
        background: #fdf0d5;
        color: #6f4400;
        position: relative;
    }

    .message-notice-two:before {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 24px;
        line-height: 24px;
        color: #c07600;
        content: '\f071';
        font-family: 'FontAwesome';
        margin: -12px 0 0;
        vertical-align: middle;
        display: inline-block;
        font-weight: normal;
        overflow: hidden;
        speak: none;
        overflow: visible;
        left: 0;
        top: 22px;
        width: 45px;
        position: absolute;
        text-align: center;
    }

    .message-notice-one p, .message-notice-two p {
        font-size: 13px;
        margin-bottom: 0px;
        text-align: justify;
    }

    .nav-tabs .nav-item {
        border: 1px solid #b0b0b0;
        background-color: #e4e4e4;
        padding: 6.76px;
        font-size: 15px;
        margin-right: 3px;
    }

    .nav-item .nav-link {
        color: black;
    }
</style>
<input type="hidden" value="<?php echo $affiliate_request; ?>" id="affiliate_request">
<?php if ($affiliate_request == 2) { ?>
<div class="col-lg-9">
    <p style="margin-top: 12px; font-size: 18px; color: black;">Affiliate Program</p>
    <div class="message-notice-one">
        <p id="one_msg">1</p>
        <p id="two_msg" style="display: none;">2</p>
        <p id="three_msg" style="display: none;">3</p>
        <p id="four_msg" style="display: none;">4</p>
        <p id="five_msg" style="display: none;">5</p>
        <p id="six_msg" style="display: none;">6</p>
        <p id="seven_msg" style="display: none;">7</p>
    </div>
    <div class="home-nav-tab-wrapper">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" onclick="set_message(1)" data-toggle="tab" href="#information"
                   style="font-size: 12px;">Payment Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(2)" data-toggle="tab" href="#product_linking"
                   style="font-size: 13px;">Generate Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(3)" data-toggle="tab" href="#reports" style="font-size: 13px;">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(4)" data-toggle="tab" href="#balance" style="font-size: 13px;">Earning
                    Status </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(5)" data-toggle="tab" href="#transactions"
                   style="font-size: 13px;">Payout
                    request </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(6)" data-toggle="tab" href="#payouts" style="font-size: 13px;">Payment
                    History </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="set_message(7)" data-toggle="tab" href="#my_profile"
                   style="font-size: 13px;">My Profile</a>
            </li>

        </ul>
        <div class="tab-content">

            <!--=============================================-->
            <!--==============first tab start================-->
            <!--=============================================-->
            <div id="information" class="tab-pane active">
                <form action="#" id="information_add" method="post">
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <label><b>Payment Type</b></label>
                                <select class="form-control" onchange="select_payment_method()" id="payment_type"
                                        name="payment_type"
                                        required="required">
                                    <option value="">--Please Select--</option>
                                    <option value="1">bKash Payment</option>
                                    <option value="2">Rocket payment</option>
                                    <option value="3">Bank Transfer</option>
                                    <option value="4">Cash Collection from ekusheshop office</option>
                                </select>
                            </div>
                            <div class="col-md-4" style="display: none;" id="mobile_payment_info">
                                <label><b>Mobile Number</b>&nbsp;<span id="j1" style="color: red;"></span></label>
                                <input type="text"  name="phone_account_no" id="phone_account_no"
                                       class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    <div id="bank_payment_info" style="display: none;">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <label><b>Account Name</b>&nbsp;<span id="j2"
                                                                          style="color: red;"></span></label>
                                    <input type="text" pattern="[A-Z a-z 0-9]+" id="account_name"
                                           name="account_name"
                                           class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label><b>Bank Name</b>&nbsp;<span id="j3" style="color: red;"></span></label>
                                    <input type="text" pattern="[A-Z a-z 0-9]+" name="bank_name" id="bank_name"
                                           class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <label><b>Branch Name</b>&nbsp;<span id="j4" style="color: red;"></span></label>
                                    <input type="text" pattern="[A-Z a-z 0-9]+" name="branch_name" id="branch_name"
                                           class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label><b>Account Number</b>&nbsp;<span id="j5"
                                                                            style="color: red;"></span></label>
                                    <input type="text" name="account_number" id="account_number"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <label><b>SWIFT Code</b>&nbsp;<span id="j6" style="color: red;"></span></label>
                                    <input type="text" name="swift_code" id="swift_code" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="display:none;" id="cash_payment_info">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <p>You need to <a href="#">contact us</a> before every time you like to collect your
                                    payment</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                <input style="background-color: green" type="submit" class="btn btn-success  btn-sm"
                                       value="SAVE">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <div id="add_msg_information"
                                     style="height: 30px; padding-top: 3px; text-align: center; display: none; background-color: green; color: white;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--==============================================-->
            <!--============== first tab end =================-->
            <!--==============================================-->

            <!--=============================================-->
            <!--============ second tab start ===============-->
            <!--=============================================-->
            <div id="product_linking" class="tab-pane fade">
                <br>
                <form action="#" method="post" id="select_product_link1">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label><b>Product Type</b></label>
                                <select class="form-control" name="product_type" id="product_type"
                                        required="required"
                                        onchange="select_product_link()">
                                    <option value="">--Please Select--</option>
                                    <?php foreach ($all_category as $v_category) { ?>
                                        <option
                                            value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label><b>Search by Name</b></label>
                                <input type="text" id="product_name" onkeyup="select_product_name()" name="product_name"
                                       class="form-control">
                            </div>
                            
                             <div class="col-md-2">
                                <label><b>Search by Code</b></label>
                                <input type="text" id="product_code" onkeyup="select_product_code()" name="product_code"
                                       class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label><b>Rate From</b></label>
                                <input type="text" id="from" name="from" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label><b>Rate To</b></label>
                                <input type="text" id="to" name="to"
                                       class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label><b>&nbsp;</b></label>
                                <input type="submit" value="Filter" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <p id="product_link_view"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--=============================================-->
            <!--==============second tab end=================-->
            <!--=============================================-->


            <!--=============================================-->
            <!--==============third tab start================-->
            <!--=============================================-->

            <!--=============================================-->
            <!--==============third tab end==================-->
            <!--=============================================-->


            <!--=============================================-->
            <!--==============fourth tab start===============-->
            <!--=============================================-->
            <div id="reports" class="tab-pane fade">
                
                
                 
                <div class="row">
                   
                   <div class="col-md-2" style="
    background: red;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    
">
                       
                       <h3 style="
    margin-top: 6px;
">  <?php
                                 $count_hit = $this->MainModel->count_hit_by_user_id($user_id);
                                 echo $count_hit->total_count;
                                 ?></h3>
                       <p  style="font-size: 17px;
    font-weight: bold;
" >Total Hits</p>
                      <p style=" background-color: #880505;
    margin: -15px;
    padding: 9px;
    height: 116px;
    font-size: 13px;
" >This is the total hits counting based on your campaign/promotion</p>
                       
                    </div>
                    
                    
                      <div class="col-md-2" style="
    background: red;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    
">
                       
                       <h3 style="
    margin-top: 6px;
" >   <?php
                                  $count_order = $this->MainModel->count_order($user_id);
                                  echo count($count_order);
                                  ?></h3>
                     <p  style="font-size: 17px;
    font-weight: bold;
" >Total Orders</p>
                       <p style=" background-color: #880505;
    margin: -15px;
    padding: 9px;
    height: 116px;
    font-size: 13px;
" >This is the total order counting based on your campaign/promotion</p>
                       
                    </div>
                    
                    
                      <div class="col-md-2" style="
    background: red;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    
">
                       
                       <h3 style="
    margin-top: 6px;
">       <?php
                                $count_buy_on_process = $this->MainModel->on_process_product($user_id);
                                echo count($count_buy_on_process);
                                ?></h3>
                        <p  style="font-size: 16px;
    font-weight: bold;
" >Order on Progress</p>
                      <p style=" background-color: #880505;
    margin: -15px;
    padding: 9px;
    height: 116px;
    font-size: 13px;
" >This is the counting of the orders which are still on process. It will be added to “Order Finalized” after the return period is over </p>
                       
                    </div>
                    
                    
                      <div class="col-md-2" style="
    background: red;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    
">
                       
                       <h3 style="
    margin-top: 6px;
" >        <?php
                                  $count_buy_refund = $this->MainModel->cancel_or_refund_product($user_id);
                                  echo count($count_buy_refund);
                                  ?></h3>
                        <p  style="font-size: 17px;
    font-weight: bold;
" >Order Cancelled</p>
                       <p style=" background-color: #880505;
    margin: -15px;
    padding: 9px;
    height: 116px;
    font-size: 13px;
" >This the counting of the orders which have been cancelled or refunded. These will be deducted from the total order count. </p>
                       
                    </div>
                    
                    
                    
                      <div class="col-md-2" style="
    background: green;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    
">
                       
                       <h3 style="
    margin-top: 6px;
" >         <?php
                                 $count_finalized = $this->MainModel->finalized_product($user_id);
                                 echo count($count_finalized);
                                 ?></h3>
                        <p  style="font-size: 17px;
    font-weight: bold;
" >Order Finalized</p>
                       <p style="
    background-color: #055a05;
    margin: -15px;
    padding: 9px;
    height: 116px;
    font-size: 13px;
" >These are the total orders have been finalized for your commission calculation </p>
                    </div>
                    
                    
                           
                </div>
                
                
                
                
                
                
                
              

                <p style="font-size: 22px; color: black; text-align: center; margin-top: 40px;"><b>Performance by
                        Link</b></p>
                <form action="#" id="search_report_result" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" autocomplete="off" required="required" onblur="check_blank_data3()" placeholder="From Date" name="report_from_date" id="report_from_date"
                                   class="form-control report_from_date">
                        </div>
                        <div class="col-md-3">
                            <input type="text" autocomplete="off" required="required" onblur="check_blank_data3()" placeholder="To Date" name="report_to_date" id="report_to_date"
                                   class="form-control report_to_date">
                        </div>
                        <div class="col-md-3">
                            <input style="background-color:green" type="submit" class="btn btn-success btn-sm"
                                   value="Filter">
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <p id="show_generate_link" style="display: none;"></p>
                <div id="show_result_report"></div>
                <div id="hide_main_report">
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>SL NO</th>
                            <th style="width: 300px;">Campaign Name</th>
                            <th style="width: 120px;">Campaign Date</th>
                            <th style="width: 120px;">Hits</th>
                            <th style="width: 120px;">Orders</th>
                            <th style="width: 120px;">On Process</th>
                            <th style="width: 120px;">Cancelled/Refund</th>
                            <th style="width: 120px;">Finalized</th>
                        </tr>
                        <?php
                        $total = 0;
                        $i = 0;
                        foreach ($my_create_link as $v_link) {
                            $i++;
                            $total++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <a href="#"
                                       onclick="get_generate_link(<?php echo $v_link->id ?>);"><?php echo $v_link->traffic_source; ?></a>
                                </td>
                                <td><?php echo date('h:i:s a d-M-Y', strtotime($v_link->create_date)); ?></td>
                                <td>
                                    <?php
                                    $count_hit = $this->MainModel->count_hit_by_user_id($user_id, $v_link->product_id);
                                    echo $count_hit->total_count;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $count_order = $this->MainModel->count_order($user_id, $v_link->id);
                                    echo count($count_order);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $count_buy_on_process = $this->MainModel->on_process_product($user_id, $v_link->id);
                                    echo count($count_buy_on_process);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $count_buy_refund = $this->MainModel->cancel_or_refund_product($user_id, $v_link->id);
                                    echo count($count_buy_refund);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $count_finalized = $this->MainModel->finalized_product($user_id, $v_link->id);
                                    echo count($count_finalized);
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php echo $total; ?> item(s)
                </div>
            </div>
            <!--=============================================-->
            <!--==============fourth tab end=================-->
            <!--=============================================-->


            <!--=============================================-->
            <!--==============five tab start=================-->
            <!--=============================================-->
            <div id="balance" class="tab-pane fade">
                <br>
                <form action="#" id="select_earning_status" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control earning_status_from_date"
                                   name="from_date"
                                   id="earning_status_from_date" autocomplete="off" placeholder="From Date">
                        </div>
                        <div class="col-md-3">
                            <input type="text"
                                   class="form-control earning_status_to_date" name="to_date"
                                   id="earning_status_to_date" autocomplete="off" placeholder="To Date">
                        </div>
                        <div class="col-md-3">
                            <input type="submit" style="background-color: green" class="btn btn-success btn-sm"
                                   value="Filter">
                        </div>
                    </div>
                </form>
                <div id="loading_msg" style="color: green; display: none;">
                    Please wait.....
                </div>
                
                
                    
                <div class="row"  id="main_earning" style="
    padding-left: 8px;
">
                      <div   style="background: red;
    margin-top: 9px;
    width: 160px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>        <?php
                             $set_commission = 0;
                             $count_commission = $this->MainModel->on_process_product_approx_earning($user_id);
                             foreach ($count_commission as $v_comm) {
                                 $product_items = unserialize($v_comm->products);
                                 if (is_array($product_items['items'])) {
                                     foreach ($product_items['items'] as $product_id => $item) {
                                         $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_comm->order_id);
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
                    
                    
                     <div  style="background: red;
    margin-top: 9px;
    width: 160px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>     ৳    <?php
                            $count_total_cancel_or_refund_commission = 0;
                            $count_buy_refund = $this->MainModel->cancel_or_refund_product($user_id);
                            foreach ($count_buy_refund as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
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
                       <p style="background-color: #880505;
    margin: -6px;
    padding: 7px;
    height: 122px;
    font-size: 13px;
    text-align: left;
">This amount will be deducted from approx. earing as some orders have been cancelled. </p>
                       
                    </div>
                    
                    
                    
                      
                     <div  style="  background: red;
    margin-top: 9px;
    width: 160px;
    color: white;
    padding: 6px;
    margin-right: 4px;">
                       
                       <h3>    ৳      <?php
                            $count_total_on_process_commission = 0;
                            $count_buy_on_process = $this->MainModel->on_process_product($user_id);
                            foreach ($count_buy_on_process as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
                                        $count_total_on_process_commission += $result->commission * $item['qty'];
                                    }
                                }
                            }
                            echo $count_total_on_process_commission;
                            ?></h3>
                       <p style="
    font-weight: bold;
    font-size: 15px;
">Order on Progress</p>
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
    width: 160px;
    color: white;
    padding: 10px;
    
    margin-right: 4px">
                       
                       <h3>       ৳    <?php
                            $count_total_finalized_commission = 0;
                            $total_paid_commission = $this->MainModel->count_total_paid_commission($user_id);

                            $finalized_order = $this->MainModel->finalized_product($user_id);
                            foreach ($finalized_order as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
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
    width: 160px;
    color: white;
    padding: 10px;
  
    margin-right: 4px">
                       
                     <h3>    ৳     <?php echo round($total_paid_commission->total_commission_request, 2); ?></h3>
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
                       
                       <h3>          ৳
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

   <div id="search_earning"></div>
         
              

                <div id="main_earning_sujon">
                    <?php $count_commission1 = $this->MainModel->count_total_commission_without_completed($user_id);
                    if ($count_commission1->total_commission) {
                        ?>
                        <br>
                        *Note: some text here*
                    <?php } ?>
                    
                    
                


                 
                    <p>&nbsp;</p>
                <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>SL NO</th>
                            <th style="width: 300px;">Campaign Name</th>
                            <th style="width: 120px;">Campaign Date</th>
                            <th style="width: 120px;">Orders</th>
                            <th style="width: 120px;">On Process</th>
                            <th style="width: 120px;">Cancelled/Refund</th>
                            <th style="width: 120px;">Finalized</th>
                        </tr>
                        <?php
                        $total = 0;
                        $i = 0;
                        foreach ($my_create_link as $v_link) {
                            $i++;
                            $total++;
                            ?>
                            
                            
                            
                            
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $v_link->traffic_source; ?></td>
                                <td><?php echo date('h:i:s a d-M-Y', strtotime($v_link->create_date)); ?></td>
                                
                            
                                <td>
                                    <?php
                                    $Orders1=0;
                                    $count_order = $this->MainModel->count_order($user_id, $v_link->id);
                                    //print_r($count_order);
                                    foreach($count_order as $v_order){
                                         $product_items = unserialize($v_order->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                      $comm = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order->order_id);
                                        $Orders1 +=$comm->commission* $item['qty'];
                                    }
                                }
                                        
                                         // $comm = $this->MainModel->select_product_commission($v_order->product_id);
                                          
                                          
                                       // $Orders1+=$comm->commission;
                                     //   select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
                                    }
                                    echo $Orders1;
                                    ?>
                                </td>
                                
                                
                                <td>
                                    
                    
                                    <?php
                                    $Orders2 =0;
                                    $count_buy_on_process = $this->MainModel->on_process_product($user_id, $v_link->id);
                            foreach ($count_buy_on_process as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                      $comm = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
                                        $Orders2+=$comm->commission * $item['qty'];
                                    }
                                }
                            }
                                 echo $Orders2;
                            
                                    ?>
                                </td>
                                
                                <td>
                                    
                                  <?php
                                    $Orders3 =0;
                                    $count_buy_refund = $this->MainModel->cancel_or_refund_product($user_id, $v_link->id);
                            foreach ($count_buy_refund as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                      $comm = $this->MainModel->select_product_commission($product_id);
                                        $Orders3+=$comm->commission * $item['qty'];
                                    }
                                }
                            }
                                 echo $Orders3;
                                    ?>
                                </td>
                                <td>
                                   <?php
                                    $Orders4 =0;
                                 $count_finalized = $this->MainModel->finalized_product($user_id, $v_link->id);
                            foreach ($count_finalized as $v_order_id) {
                                $product_items = unserialize($v_order_id->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                      $comm = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
                                        $Orders4+=$comm->commission * $item['qty'];
                                    }
                                }
                            }
                                 echo $Orders4;
                                    ?>
                                    
                                
                                </td>
                            </tr>
                        <?php } ?>
                        
                        
                        
                    </table>
                    <?php echo $total; ?> item(s)
                    </div>
            </div>
         
            <!--=============================================-->
            <!--===============five tab end==================-->
            <!--=============================================-->


            <!--=============================================-->
            <!--===============six tab start=================-->
            <!--=============================================-->
            <div id="transactions" class="tab-pane fade">
                <br>
                <br>
                <form action="#" method="post" id="select_payment_request">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control payment_request_from_date"
                                       name="request_from_date"
                                       id="request_from_date" placeholder="From Date">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text"
                                       class="form-control payment_request_to_date" name="request_to_date"
                                       id="request_to_date" placeholder="To Date">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-sm" value="Filter">
                            </div>
                        </div>
                    </div>
                </form>



<div class="row">
      <div class="col-md-3" style="
    background: green;
    margin-top: 9px;
    margin-left: 14px;
    color: white;
    padding: 10px;
        margin-right: 9px
    
">
                       
                       <h3>    ৳   <?php
                                $count_total_finalized_commission = 0;
                                $total_paid_commission = $this->MainModel->count_total_paid_commission($user_id);
                                $finalized_order = $this->MainModel->finalized_product($user_id);
                                foreach ($finalized_order as $v_order_id) {
                                    $product_items = unserialize($v_order_id->products);
                                    if (is_array($product_items['items'])) {
                                        foreach ($product_items['items'] as $product_id => $item) {
                                            $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_order_id->order_id);
                                            $count_total_finalized_commission += $result->commission * $item['qty'];
                                        }
                                    }
                                }
                                echo $count_total_finalized_commission;
                                ?></h3>
                        <p  style="font-size: 16px;
    font-weight: bold;
" >Commission Finalized</p>
                       
                       <p style="background-color:#055a05;
    margin: -10px;
    padding: 9px;
    height: 64px;
" >This is the final commission amount which you have earned so far</p>
                       
                    </div>
                    
                    
                    
                      <div class="col-md-3" style="
    background: green;
    margin-top: 9px;
  margin-right:5px;
    color: white;
    padding: 10px;
    
">
                       
                       <h3>         ৳
                            <?php
                            $total_paid_commission = $this->MainModel->count_total_paid_commission($user_id);
                            echo round($total_paid_commission->total_commission_request, 2); ?></h3>
                         <p  style="font-size: 16px;
    font-weight: bold;
" >Total Paid</p>

<p style="background-color:#055a05;
    margin: -10px;
    padding: 9px;
    height: 64px;
" >This is the total commission amount you have claimed so far</p>
                       
                    </div>
                    
                    
                      <div class="col-md-3" style="
    background: green;
    margin-top: 9px;
    
    color: white;
    padding: 10px;
    
">
                       
                       <h3>          ৳
                            <?php
                            $commission_amount = round($count_total_finalized_commission - $total_paid_commission->total_commission_request, 2);
                            echo round($count_total_finalized_commission - $total_paid_commission->total_commission_request, 2); ?></h3>
                         <p  style="font-size: 16px;
    font-weight: bold;
" >Available Commission</p>

<p style="background-color: #055a05;
    margin: -10px;
    padding: 9px;
    height: 64px;
" >This is the commission amount available for you to claim/withdrawal</p>
                       
                    </div>
                    
                    
    </div>

               
                <br>
                <p style="font-size: 16px;">I like to place payout request for my available commission, please process
                    my request.</p>
                <form action="#" id="amount_request" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                    <input type="hidden" name="commission_amount" value="<?php echo $commission_amount ?>">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12" id="search_request"></div>
                            <div class="col-md-12">
                                <input type="submit" class="form-control btn btn-success"
                                       value="Payment Request">
                            </div>
                        </div>
                    </div>
                </form>
                <p id="payment_success_msg1" style="display: none; color: green; font-size: 16px;">Request successfully
                    accepted</p>
                <p id="payment_success_msg2" style="display: none; color: green; font-size: 16px;">Your payout request
                    has been sent to
                    ekusheyshop
                    finance team . Please keep your eyes on Payment History tab to get further update . In case of any
                    query please drop a mail to finance@ekusheyshop.com</p>
                <p id="payment_one_msg" style="display: none; font-size: 16px;color: red;"> <i class="fa  fa-bullhorn" style="color: black;margin-right: 6px;font-size: 17px;"></i>One of your payout request still
                    pending, please wait for
                    the payment clearance
                </p>
                 <p id="payment_six_msg" style="display: none; font-size: 16px;color: red;"><i class="fa  fa-bullhorn" style="color: black;margin-right: 6px;font-size: 17px;"></i>Please enter your payout information in payment information tab </p>
                <p id="payment_two_msg" style="display: none; font-size: 16px;color: red;"><i class="fa  fa-bullhorn" style="color: black;margin-right: 6px;font-size: 17px;"></i>Your available commission is less then
                    500 taka…. You are
                    not allowed to make payout request.</p>
                <p id="payment_three_msg" style="display: none; font-size: 16px;color: red;">
                   <i class="fa  fa-bullhorn" style="color: black;margin-right: 6px;font-size: 17px;"></i>
                     Payout request can be send once in a
                    month & you not
                    allowed to request in second time.</p>
                <p style="font-size: 16px;">
                    <i class="fa fa-check" aria-hidden="true" style="color: green"></i> Condition- can be request if
                    earning is more than TK500<br>
                    <i class="fa fa-check" aria-hidden="true" style="color: green;"></i> Condition- Request can be send
                    once in a month
                </p>
            </div>
            <!--=============================================-->
            <!--===============six tab end===================-->
            <!--=============================================-->

            <!--=============================================-->
            <!--===============seven tab start===============-->
            <!--=============================================-->

            <div id="payouts" class="tab-pane fade">

                <p style="font-size: 18px; color: black; padding-top: 20px;">Payment History</p>
                <form action="#" method="post" id="select_payment_history">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control payment_history_from_date" name="history_from_date"
                                   id="history_from_date" placeholder="From Date" autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <input type="text"
                                   class="form-control payment_history_to_date" autocomplete="off" name="history_to_date"
                                   id="history_to_date" placeholder="To Date">
                        </div>
                        <div class="col-md-3">
                            <input type="submit" class="btn btn-success btn-sm" value="Filter">
                        </div>
                    </div>
                </form>
                <br>
                <div   id="main_data">
                    <table class="table table-bordered  " style="font-size: 13px;">
                        <tr>
                            <th>Payment Date</th>
                            <th>Voucher Number</th>
                            <th>Paid Amount</th>
                            <th>Paid Through</th>
                            <th>Transection Number</th>
                        </tr>
                        <?php
                        $total_paid = 0;
                        foreach ($all_paid_request as $v_paid) {
                            $total_paid++;
                            
                              $single_affilite = $this->MainModel->select_single_affilator_account_information($v_paid->user_id);
                            ?>
                            <tr>
                                <td><?php echo date('d-m-Y', strtotime($v_paid->date)); ?></td>
                                <td><?php echo $v_paid->vp_number; ?></td>
                                <td><?php echo $v_paid->commission_amount; ?></td>
                                <td>
                                      <?php
                                if ($single_affilite->payment_type == 1) {
                                    echo "bKash";
                                } else if ($single_affilite->payment_type == 2) {
                                    echo "Rocket";
                                } else if ($single_affilite->payment_type == 3) {
                                    echo "Bank Account";
                                } else if ($single_affilite->payment_type == 4) {
                                    echo "Payment by Ekusheshop";
                                }
                                ?>
                                </td>
                                <td><?php echo $v_paid->transaction_number; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php echo $total_paid; ?> item(s)
                </div>
                <div id="search_data"></div>
            </div>

            <!--=============================================-->
            <!--================eight tab end================-->
            <!--=============================================-->

            <div id="my_profile" class="tab-pane fade">
                <p style="font-size: 18px; color: black; padding-top: 20px;">My Profile</p>
                <div class="row">
                    <div class="col-md-8">
                        <form action="#" id="my_profile_frm" method="post">
                            <table class="table table-striped table-bordered table-hover">
                                <?php
                                foreach ($affiliate_details as $v_details) {
                                    ?>
                                    <tr>
                                        <td style="width: 300px;">Phone Number</td>
                                        <input type="hidden" name="user_id" value="<?php echo $v_details->user_id; ?>">
                                        <input type="hidden" name="status" value="3">
                                        <td><input class="form-control" type="text" name="phone_number"
                                                   value="<?php echo $v_details->phone_number ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" name="email" class="form-control"
                                                   value="<?php echo $v_details->email; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Permanent Address</td>
                                        <td>
                                            <textarea class="form-control" type="text"
                                                      name="permanent_address"><?php echo $v_details->permanent_address; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Present Address</td>
                                        <td>
                                            <textarea class="form-control" type="text"
                                                      name="present_address"><?php echo $v_details->present_address; ?></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website URL</td>
                                        <td><input class="form-control" type="text" name="website_url"
                                                   value="<?php echo $v_details->website_url ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook page URL</td>
                                        <td><input class="form-control" type="text" name="facebook_page_url"
                                                   value="<?php echo $v_details->facebook_page_url ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook profile URL</td>
                                        <td><input class="form-control" type="text" name="facebook_profile_url"
                                                   value="<?php echo $v_details->facebook_profile_url ?>">
                                    </tr>
                                    <tr>
                                        <td>YouTube channel URL</td>
                                        <td><input class="form-control" type="text" name="youtube_channel_url"
                                                   value="<?php echo $v_details->youtube_channel_url ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Promotional Strategy</td>
                                        <td><input class="form-control" type="text" name="promotional_strategy"
                                                   value="<?php echo $v_details->promotional_strategy ?>"></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-success" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <p class="text-center" style="color: green;" id="add_msg1"></p>
                        <p>Payment Info</p>
                        <table class="table table-striped table-bordered table-hover">
                            <?php
                            foreach ($account_details as $v_account) {
                                if (($v_account->payment_type == 1) or ($v_account->payment_type == 2) or ($v_account->payment_type == 4)) {
                                    ?>
                                    <tr>
                                        <td style="width: 300px;">Payment Type</td>
                                        <td>
                                            <?php if ($v_account->payment_type == 1) {
                                                echo "bKash";
                                                $payment_type = "bKash";
                                            } else if ($v_account->payment_type == 2) {
                                                echo "Rocket";
                                                $payment_type = "Rocket";
                                            } else if ($v_account->payment_type == 3) {
                                                echo "Bank Transfer";
                                                $payment_type = "Bank Transfer";
                                            } else {
                                                echo "Cash Collection From Ekusheyshop Office";
                                                $payment_type = "Cash Collection From Ekusheyshop Office";
                                            } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 300px;"><?php echo $payment_type; ?></td>
                                        <td>
                                            <?php if ($v_account->payment_type == 1) {
                                                echo $v_account->phone_account_no;
                                            } else if ($v_account->payment_type == 2) {
                                                echo $v_account->phone_account_no;
                                            } else {
                                                echo "Cash Collection From Ekusheyshop Office";
                                            } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">If you want to update payment information click "Payment
                                            Information" link
                                        </td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td style="width: 300px;">Payment Type</td>
                                        <td>Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Account Name</td>
                                        <td><?php echo $v_account->account_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Bank Name</td>
                                        <td><?php echo $v_account->bank_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Branch Name</td>
                                        <td><?php echo $v_account->branch_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Account Number</td>
                                        <td><?php echo $v_account->account_number; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Swift Code</td>
                                        <td><?php echo $v_account->swift_code; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">If you want to update payment information click "Payment
                                            Information" link
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>

                <!--=============================================-->
                <!--================eight tab end================-->
                <!--=============================================-->


            </div>
        </div>
    </div>
    <?php } else if ($affiliate_request == 1) { ?>
        <div class="col-lg-9">
            <div id="information" class="tab-pane active">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p style="font-size: 17px;font-weight: bolder;">That's it! Your application has been
                            submitted.Now you can sit back and relax, we will be
                            contacting you after we
                            review your application. It should not take longer than two days.You will be notified by
                            e-mail.... Thank you!

                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-lg-9">
            <div id="information" class="tab-pane active">
                <div id="hide_screen_one">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con1.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>30-Day Cookie</b></p>
                            <p style="text-align: center; font-size: 15px;">You will get paid even if the customer
                                delays
                                purchase for 30 days</p>
                        </div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con2.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>Bi-weekly Payouts</b></p>
                            <p style="text-align: center; font-size: 15px;">You will get paid twice each month if your
                                balance exceeds BDT 500.</p>
                        </div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con3.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>Real-Time Tracking</b></p>
                            <p style="text-align: center; font-size: 15px;">Traffic and sales are recorded and ready for
                                display as soon as they happen.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con4.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>Responsive Affiliate
                                    Dashboard</b></p>
                            <p style="text-align: center; font-size: 15px;">From any device. Dedicated dashboard with
                                lots
                                of flexible banners and text links.</p>
                        </div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con5.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>Exclusive Offers</b></p>
                            <p style="text-align: center; font-size: 15px;">Share special promotions and discounts we
                                offer
                                every now and then.</p>
                        </div>
                        <div class="col-md-3">
                            <p style="text-align: center;"><img src="<?php echo base_url() ?>images/i-con6.png"
                                                                height="40"
                                                                width="40"></p>
                            <p style="text-align: center;font-size: 16px;color:green;"><b>Affiliate Resources</b></p>
                            <p style="text-align: center; font-size: 15px;">every details and tricks explained in our
                                Knowledge Base and FAQs page, or you can Contact Us!</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-3">
                            <input type="button" style="background-color: green; " onclick="hide_screen_one()"
                                   value="Register as Affiliate"
                                   class="btn btn-success  btn-sm">

                        </div>
                    </div>
                </div>

                <div id="affiliate_registration" style="display: none;">
                    <?php
                    foreach ($affiliate_cancel_request as $v_request) {
                        if ($v_request->name) {
                            $set_name = $v_request->name;
                        } else {
                            $set_name = $v_request->user_f_name;
                        }
                        if ($v_request->phone_number) {
                            $set_phone = $v_request->phone_number;
                        } else {
                            $set_phone = $v_request->user_mobile;
                        }
                        if ($v_request->email) {
                            $set_email = $v_request->email;
                        } else {
                            $set_email = $v_request->user_email;
                        }
                        ?>
                        <div class="from-group">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-8">
                                    
                                    <?php if($v_request->cancel_note) { ?>
                                      <div style="color:red" class="message-notice-one">
                                     <p>  <span
                                        style="color: red; font-size: 18px;"> <?php echo $v_request->cancel_note; ?>
                                        </span></p>
       
                                              </div>
                                              <?php } ?>
                                  
                                        
                                </div>
                            </div>
                        </div>
                        <br>
                        <form action="#" id="affiliate_request_frm" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Name<span class="text-danger"
                                                                       style="font-size: 23px;position: relative;top: 9px;">*</span></b>
                                    </div>
                                    <div class="col-md-6">
                                        <input onchange="check_change(1)" type="text"
                                               placeholder="Name only use letter A-Z a-z"
                                               required="required" name="name"
                                               value="<?php echo $set_name; ?>" id="name"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Phone Number<span class="text-danger"
                                                                               style="font-size: 23px;position: relative;top: 9px;">*</span></b>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" onchange="check_change(2)" required="required"
                                               placeholder="Phone Number 01717000000"
                                               value="<?php echo $set_phone; ?>"
                                               name="phone_number" id="phone_number"
                                               class="form-control">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                        <input type="hidden" name="status" value="<?php echo $set_status; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>E-mail Address<span class="text-danger"
                                                                                 style="font-size: 23px;position: relative;top: 9px;">*</span></b>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" onchange="check_change(3)"
                                               required="required"
                                               value="<?php echo $set_email; ?>"
                                               name="email"
                                               id="email"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Present Address<span class="text-danger"
                                                                                  style="font-size: 23px;position: relative;top: 9px;">*</span></b>
                                    </div>
                                    <div class="col-md-6">
                                <textarea onchange="check_change(4)" name="present_address" required="required"
                                          placeholder="Present Address only use letter A-Za-z0-9" pattern="[A-Za-z0-9]+"
                                          id="present_address" rows="3"
                                          class="form-control"><?php echo $v_request->present_address; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Permanent Address <span class="text-danger"
                                                                                     style="font-size: 23px;position: relative;top: 9px;"></span></b>
                                    </div>
                                    <div class="col-md-6">
                                <textarea onchange="check_change(5)" name="permanent_address"
                                          placeholder="Permanent Address only use letter A-Za-0-9"
                                          pattern="[A-Za-z0-9]+" id="permanent_address" rows="3"
                                          class="form-control"><?php echo $v_request->permanent_address; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Recent Photograph <span class="text-danger"
                                                                                     style="font-size: 23px;position: relative;top: 9px;">
                                                *</span></b></div>
                                    <div class="col-md-6">
                                        <input type="file" name="profile_picture"
                                               id="profile_picture"
                                               class="form-control">
                                        <?php
                                        if (empty($v_request->profile_picture)) {
                                            ?>

                                        <?php } else { ?>
                                            <img
                                                src="<?php echo base_url() ?>uploads/affiliate_profile/<?php echo $v_request->profile_picture; ?>"
                                                height="50" width="50">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12"><b>How are you going to promote our products, please provide
                                            the
                                            following info</b></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Website URL</b></div>
                                    <div class="col-md-6">
                                        <input onchange="check_change(6)" type="text"
                                               value="<?php echo $v_request->website_url; ?>"
                                               placeholder="https://www.example.com"
                                               name="website_url"
                                               id="website_url" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Facebook Page URL</b></div>
                                    <div class="col-md-6">
                                        <input onchange="check_change(7)" type="text"
                                               value="<?php echo $v_request->facebook_page_url; ?>"
                                               name="facebook_page_url" id="facebook_page_url"
                                               placeholder="https://www.example.com"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Facebook Profile URL <span class="text-danger"
                                                                                        style="font-size: 23px;position: relative;top: 9px;">*</span></b>
                                    </div>
                                    <div class="col-md-6">
                                        <input onchange="check_change(8)" type="text"
                                               value="<?php echo $v_request->facebook_profile_url; ?>"
                                               name="facebook_profile_url" id="facebook_profile_url"
                                               placeholder="https://www.example.com"
                                               required="required" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>YouTube Channel URL</b></div>
                                    <div class="col-md-6">
                                        <input onchange="check_change(9)" type="text"
                                               value="<?php echo $v_request->youtube_channel_url; ?>"
                                               name="youtube_channel_url" id="youtube_channel_url"
                                               placeholder="https://www.example.com"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>Payment Method<span class="text-danger"
                                                                                 style="font-size: 23px;position: relative;top: 9px;">
                                                *</span></b></div>
                                    <div class="col-md-6">
                                        <select required="required" name="payment_method" class="form-control">
                                            <option value="">Select One</option>
                                            <option <?php if ($v_request->payment_method == 1) { ?> selected="selected" <?php } ?>
                                                value="1">bKash
                                            </option>
                                            <option <?php if ($v_request->payment_method == 2) { ?> selected="selected" <?php } ?>
                                                value="2">Rocket
                                            </option>
                                            <option <?php if ($v_request->payment_method == 3) { ?> selected="selected" <?php } ?>
                                                value="3">Bank Transfer
                                            </option>
                                            <option <?php if ($v_request->payment_method == 4) { ?> selected="selected" <?php } ?>
                                                value="4">Cash Collection From Ekusheyshop Office
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"><b>That's Your Promotional Strategy? Write Details <span
                                                class="text-danger"
                                                style="font-size: 23px;position: relative;top: 9px;">
                                                *</span></b></div>
                                    <div class="col-md-6">
                                <textarea onchange="check_change(10)" name="promotional_strategy" required="required"
                                          id="promotional_strategy"
                                          rows="3"
                                          class="form-control"><?php echo $v_request->promotional_strategy; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 29px;">
                                <div class="row">
                                    <div class="col-md-5" id="blank_div" style="display: none;">&nbsp;</div>
                                    <div class="col-md-7" id="hide_condition">
                                        <input type="checkbox"   value="1" id="condition"> <b>I have read & agree
                                            to Ekusheyshop <a target="_blank"
                                                              href="<?= base_url() ?>pages/privacy-policy">Privacy
                                                Policy </a> & <a target="_blank"
                                                                 href="<?= base_url() ?>pages/terms-conditions">Terms
                                                and conditions</a></b>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-3" id="checkbox_disable">
                                        <input type="button" onclick="set_error_msg();"
                                               style="background-color: green;margin-left: -44px;margin-top: -8px;"
                                               value="SUBMIT APPLICATION"
                                               class="btn btn-success btn-sm">
                                    </div>
                                    
                                    <div class="col-md-3" style="display: none;" id="checkbox_show">
                                        <input type="submit"
                                               style="background-color: green;margin-left: -44px;margin-top: -8px;"
                                               value="SUBMIT APPLICATION" class="btn btn-success btn-sm">
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="col-md-3" id="error_msg" style="color: red;">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="add_msg"
                                             style="height: 30px; padding-top: 3px; text-align: center; display: none; background-color: green; color: white;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 115px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" style="text-align: center;">Affiliate Link Generate</h3>
                    </div>
                    <div class="modal-body" id="load_data">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function set_error_msg() {
            
            var affiliate = $('#affiliate_request').val();
            if (affiliate == 3) {
           //$('#error_msg').html('Please accept terms and conditions');    
            }
            else {
                $('#error_msg').html('Please accept terms and conditions');    
            }
        }
    </script>
    <script>
        $('input[type="checkbox"]').click(function () {
            if ($(this).prop("checked") == true) {
                $('#checkbox_disable').hide();
                $('#checkbox_show').show();
                $('#blank_div').hide();
            } else {
                $('#checkbox_disable').show();
                $('#checkbox_show').hide();
                $('#blank_div').hide();
            }
        });
    </script>

    <script>
        function hide_screen_one() {
            $('#hide_screen_one').hide();
            $('#affiliate_registration').show();
        }
    </script>

    <script>
        $(document).ready(function () {
            var affiliate = $('#affiliate_request').val();
            if (affiliate == 3) {
                $('#hide_condition').hide();
                $('#blank_div').show();
                $('#hide_screen_one').hide();
                $('#affiliate_registration').show();
            } else {
                $('#hide_screen_one').show();
                $('#affiliate_registration').hide();
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#affiliate_request_frm').submit(function () {
                var dataString = new FormData($(this)[0]);
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/create_affiliate_request',
                    data: dataString,
                    async: false,
                    success: function (result) {
                        if (result) {
                            $('#add_msg').show();
                            $('#add_msg').html(result);
                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url()?>affiliate";
                            }, 2000);
                            return false;
                        } else {
                            return false;
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#my_profile_frm').submit(function () {
                var dataString = $('#my_profile_frm').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/profile_update_affiliate_request',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#add_msg1').html(result);
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
            $('#select_product_link1').submit(function () {
                var dataString = $('#select_product_link1').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/load_product_link_view',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#product_link_view').html(result);
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
        function select_product_link() {
            var product_type = $('#product_type').val();
            var from = $('#from').val();
            var to = $('#to').val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/load_product_link_view',
                data: {product_type: product_type, from: from, to: to},
                success: function (result) {
                    if (result) {
                        $('#product_link_view').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>

    <script>
        function select_product_name() {
            var product_type = $('#product_type').val();
            var product_name = $('#product_name').val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/load_product_link_view_by_name',
                data: {product_type: product_type, product_name: product_name},
                success: function (result) {
                    if (result) {
                        $('#product_link_view').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>
    
        <script>
        function select_product_code() {
            var product_type = $('#product_type').val();
            var product_code = $('#product_code').val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/load_product_link_view_by_code',
                data: {product_type: product_type, product_code: product_code},
                success: function (result) {
                    if (result) {
                        $('#product_link_view').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>
    <script>
        function get_link($id) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/load_product_link_from/' + $id,
                success: function (result) {
                    if (result) {
                        $('#load_data').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>
    <script>
        function single_get_link() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/load_product_single_link_from',
                success: function (result) {
                    if (result) {
                        $('#load_data').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>

    <script>
        $(document).ready(function () {
            $("#amount_request").submit(function () {
                var dataString = $('#amount_request').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/amount_request_entry',
                    data: dataString,
                    success: function (result) {
                        if (result == 6) {
                            $('#payment_six_msg').show();
                            return false;
                        } else if (result == 1) {
                            $('#payment_one_msg').show();
                            return false;
                        } else if (result == 2) {
                            $('#payment_two_msg').show();
                            return false;
                        } else if (result == 3) {
                            $('#payment_three_msg').show();
                            return false;
                        } else if (result == 4) {
                            $('#payment_success_msg1').show();
                            $('#payment_success_msg2').show();
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
        function select_payment_method() {
            var payment_type = $('#payment_type').val();
            if ((payment_type == 1) || (payment_type == 2)) {
                $('#mobile_payment_info').show();
                $('#bank_payment_info').hide();
                $('#cash_payment_info').hide();
                 
            } 
            
            else if (payment_type == 3) {
                $('#mobile_payment_info').hide();
                $('#bank_payment_info').show();
                $('#cash_payment_info').hide();
            } else if (payment_type == 4) {
                $('#mobile_payment_info').hide();
                $('#bank_payment_info').hide();
                $('#cash_payment_info').show();
            } else {
                $('#mobile_payment_info').hide();
                $('#bank_payment_info').hide();
                $('#cash_payment_info').hide();
            }
        }
    </script>

    <script>
        $('body').on('focus', ".payment_history_from_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".payment_history_to_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".earning_status_from_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".earning_status_to_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".payment_request_from_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".payment_request_to_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".report_from_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
        $('body').on('focus', ".report_to_date", function () {
            $(this).datepicker({dateFormat: 'dd-mm-yy', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#select_payment_history').submit(function () {
                var dataString = $('#select_payment_history').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/select_payment_history',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#main_data').hide();
                            $('#search_data').html(result);
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
            $('#select_earning_status').submit(function () {
                $('#main_earning').hide();
                $('#loading_msg').show();
                var dataString = $('#select_earning_status').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/select_earning_status',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#loading_msg').hide();
                            $('#search_earning').html(result);
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
        function check_change($id) {
            var set_id = $id;
            if (set_id == 1) {
                var set_var = $('#name').val();
            } else if (set_id == 2) {
                var set_var = $('#phone_number').val();
            } else if (set_id == 3) {
                var set_var = $('#email').val();
            } else if (set_id == 4) {
                var set_var = $('#present_address').val();
            } else if (set_id == 5) {
                var set_var = $('#permanent_address').val();
            } else if (set_id == 6) {
                var set_var = $('#website_url').val();
            } else if (set_id == 7) {
                var set_var = $('#facebook_page_url').val();
            } else if (set_id == 8) {
                var set_var = $('#facebook_profile_url').val();
            } else if (set_id == 9) {
                var set_var = $('#youtube_channel_url').val();
            } else if (set_id == 10) {
                var set_var = $('#promotional_strategy').val();
            }
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/check_change',
                data: {set_id: set_id, set_var: set_var},
                success: function (result) {
                    if (result) {
                       
                        $('#checkbox_disable').show();
                        $('#checkbox_show').hide();
                        return false;
                    } else {
                         
                        $('#checkbox_disable').hide();
                        $('#checkbox_show').show();
                        return false;
                    }
                }
            });
            return false;
        }
    </script>
    <script>
        function set_message($id) {
            var get_id = $id;
            if (get_id == 1) {
                $('#one_msg').show();
                $('#two_msg').hide();
                $('#three_msg').hide();
                $('#four_msg').hide();
                $('#five_msg').hide();
                $('#six_msg').hide();
                $('#seven_msg').hide();
            } else if (get_id == 2) {
                $('#one_msg').hide();
                $('#two_msg').show();
                $('#three_msg').hide();
                $('#four_msg').hide();
                $('#five_msg').hide();
                $('#six_msg').hide();
                $('#seven_msg').hide();
            } else if (get_id == 3) {
                $('#one_msg').hide();
                $('#two_msg').hide();
                $('#three_msg').show();
                $('#four_msg').hide();
                $('#five_msg').hide();
                $('#six_msg').hide();
                $('#seven_msg').hide();
            } else if (get_id == 4) {
                $('#one_msg').hide();
                $('#two_msg').hide();
                $('#three_msg').hide();
                $('#four_msg').show();
                $('#five_msg').hide();
                $('#six_msg').hide();
                $('#seven_msg').hide();
            } else if (get_id == 5) {
                $('#one_msg').hide();
                $('#two_msg').hide();
                $('#three_msg').hide();
                $('#four_msg').hide();
                $('#five_msg').show();
                $('#six_msg').hide();
                $('#seven_msg').hide();
            } else if (get_id == 6) {
                $('#one_msg').hide();
                $('#two_msg').hide();
                $('#three_msg').hide();
                $('#four_msg').hide();
                $('#five_msg').hide();
                $('#six_msg').show();
                $('#seven_msg').hide();
            } else if (get_id == 7) {
                $('#one_msg').hide();
                $('#two_msg').hide();
                $('#three_msg').hide();
                $('#four_msg').hide();
                $('#five_msg').hide();
                $('#six_msg').hide();
                $('#seven_msg').show();
            } else {
                $('#one_msg').show();
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#information_add').submit(function () {
                
          var phone_account_no=$('#phone_account_no').val();
           var phone_account_lenth=phone_account_no.length;
            var payment_type=$('#payment_type').val();
            if((payment_type==1) || (payment_type==2)){
                if(payment_type==1){
                    if(phone_account_lenth < 11 || phone_account_lenth > 11){
                         $('#j1').html("<code class='err_msg'>Please enter at least 11 digit bkash number</code>").fadeOut(3000);
                         return false;
                    }
                  
                } else {
                    
                      if(phone_account_lenth < 12 || phone_account_lenth > 12){
                             $('#j1').show();
                         $('#j1').html("<code class='err_msg'>Please enter at least 12 digit rocket number</code>").fadeOut(3000);
                         return false;
                    }
                }
            }
        
                
                if (validation() == true) {
                    var dataString = $('#information_add').serialize();
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url() ?>affiliate/create_information',
                        data: dataString,
                        success: function (result) {
                            if (result) {
                                $('#add_msg_information').show();
                                $('#add_msg_information').html(result);
                                return false;
                            } else {
                                return false;
                            }
                        }
                    });
                    return false;
                } else {
                    return false;
                }
            });
            function validation() {
                var payment_type = $('#payment_type').val();
                var phone_account_no = $('#phone_account_no').val();
                var account_name = $('#account_name').val();
                var bank_name = $('#bank_name').val();
                var branch_name = $('#branch_name').val();
                var account_number = $('#account_number').val();


                if ((payment_type == 1) || (payment_type == 2)) {
                    if (phone_account_no.length == "") {
                        $('#j1').html("<code class='err_msg'>* This Required *</code>");
                        $("#phone_account_no").focus();
                        return false;
                    } else {
                        return true;
                    }
                } else if (payment_type == 3) {
                    if (account_name.length == "") {
                        $('#j2').html("<code class='err_msg'>* This Required *</code>");
                        $("#account_name").focus();
                        return false;
                    } else if (bank_name.length == "") {
                        $('#j3').html("<code class='err_msg'>* This Required *</code>");
                        $("#bank_name").focus();
                        return false;
                    } else if (branch_name.length == "") {
                        $('#j4').html("<code class='err_msg'>* This Required *</code>");
                        $("#branch_name").focus();
                        return false;
                    } else if (account_number.length == "") {
                        $('#j5').html("<code class='err_msg'>* This Required *</code>");
                        $("#account_number").focus();
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    return true;
                }
            }
        });
    </script>
    <script>
        function get_generate_link($id) {
            var id = $id;
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/get_generate_link',
                data: {id: id},
                success: function (result) {
                    if (result) {
                        $('#show_generate_link').show();
                        $('#show_generate_link').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#search_report_result').submit(function () {
                var dataString = $('#search_report_result').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/search_report_result',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#hide_main_report').hide();
                            $('#show_result_report').html(result);
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
    function check_blank_data3() {
        var check = $('#report_from_date').val();
        var check1 = $('#report_to_date').val();
        if ((check == "") && (check1 == "")) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>affiliate/search_report_result3',
                success: function (result) {
                    if (result) {
                        $('#hide_main_report').hide();
                        $('#show_result_report').html(result);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        } else {
            return false;
        }
    }
</script>
    


    <script>
        $(document).ready(function () {
            $('#select_payment_request').submit(function () {
                var dataString = $('#select_payment_request').serialize();
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url() ?>affiliate/select_payment_request',
                    data: dataString,
                    success: function (result) {
                        if (result) {
                            $('#search_request').html(result);
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
    