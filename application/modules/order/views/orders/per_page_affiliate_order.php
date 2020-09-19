<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Order#</th>
            <th>Order Date</th>
            <th>Affiliator</th>
            <th>Sale Amount</th>
            <th>Comm %(Average)</th>
            <th>Comm. Amount</th>
            <th>Order Status</th>
            <th>Comm. Status</th>
        </tr>
        </thead>
        <?php
        $total = count($affiliate_order);
        foreach ($affiliate_order as $v_request) {
       
        ?>
       <tbody>
                        <tr>
                            <td><?php echo $total; ?></td>
                            <td>
                                <a target="_blank"
                                   href="<?php echo base_url(); ?>affilator-order-view/<?php echo $v_request->order_id; ?>">
                                    <?php echo $v_request->order_id; ?></a>
                            </td>
                            <td>
                                <?php
                                $date = date_create($v_request->created_time);
                                echo date_format($date, "d-m-Y");
                                ?>
                            </td>
                            <td>
                                <a target="_blank"
                                   href="<?php echo base_url(); ?>order/OrderController/affiliate_view_details/<?php echo $v_request->affiliate_user_id; ?>">
                                    <?php echo $v_request->affiliate_user_id; ?>
                                    &nbsp;<?php 
                                    $nn = $v_request->user_f_name . " " . $v_request->user_l_name; 
                                    echo $limited_string = word_limiter($nn , 2, '');
                                    ?>
                                </td>
                            </a>
                            <?php
                            $result = $this->MainModel->select_order_data($v_request->order_id);
                            foreach ($result as $v_data) {

                                $product_items = unserialize($v_data->products);
                                if (is_array($product_items['items'])) {
                                    $total_sale_price = 0;
                                    $get_percent = 0;
                                    $total_qut = 0;
                                    $get_total_commission = 0;
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        $item_price = str_replace(",", "", $item['price']);
                                        $total_sale_price += $item['qty'] * $item_price;
                                        $total_qut += $item['qty'];
                                        $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_request->order_id);
                                       
                                        $set_commission = $result->commission;
                                        $item_price = str_replace(",", "", $item['price']);
                                        $get_percent += (($set_commission * 100) / $item_price);
                                        $get_total_commission += $item['qty'] * $set_commission;
                                    }
                                }
                                ?>
                                <td><?php echo $total_sale_price; ?></td>
                                <td><?php echo round($get_percent / $total_qut,2); ?></td>
                                <td><?php echo round($get_total_commission,2); ?></td>
                            <?php } ?>
                            <td><?php echo $v_request->order_status; ?></td>
                            <td>
                                <?php if ($v_request->payment_status == 1) {
                                    echo "Paid";
                                } else {
                                    echo "Unpaid";
                                } ?>
                            </td>
                        </tr>
                        <?php $total--;
                        } ?>
                        </tbody>
    </table>
    <?php echo $links; ?>
</div>
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>
