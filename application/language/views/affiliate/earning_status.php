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


<div class="aw-aff-balance-info1">
    <ul>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label" style="color: white;">Approx. Earning</span>
                        <span class="balance-value" data-bind="text: balance.value" style="color: white;">
                             <?php
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
                             ?>
                        </span>
        </li>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label" style="color: white;">(-)Order Cancelled</span>
                        <span class="balance-value"
                              data-bind="text: balance.value" style="color: white;">৳
                            <?php
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
                            ?>
                        </span>
        </li>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label" style="color: white;">(-)Orders On Process</span>
                        <span class="balance-value"
                              data-bind="text: balance.value" style="color: white;">৳
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
                            ?>
                        </span>
        </li>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label">Order Finalized</span>
                        <span class="balance-value" data-bind="text: balance.value">
                                ৳
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
                            ?>
                        </span>
        </li>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label">(-)Total Paid</span>
                        <span class="balance-value" data-bind="text: balance.value">
                                ৳
                            <?php echo round($total_paid_commission->total_commission_request, 2); ?>
                        </span>
        </li>
        <li class="balance-element">
            <span class="balance-label" data-bind="text: balance.label">Available Commission</span>
                        <span class="balance-value" data-bind="text: balance.value">
                                ৳
                            <?php echo round($count_total_finalized_commission - $total_paid_commission->total_commission_request, 2); ?>
                        </span>
        </li>
    </ul>
</div>