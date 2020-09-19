<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-body">
            <div class="text-center" id="add_msg">
            </div>
            <br>
            <div class="panel-heading" style="height: 55px;">
                <div class="col-md-2">
                    <input onkeyup="return search_content();" type="text" class="form-control"
                           id="search_affiliate_id"
                           placeholder="Search by affiliate ID">
                </div>
                <div class="col-md-2">
                    <input onkeyup="return search_content();" type="text" class="form-control"
                           id="search_affiliate_name"
                           placeholder="Search by affiliate name">
                </div>
                <div class="col-md-2">
                    <select id="search_type" class="form-control">
                        <option value="">Select Type</option>
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
                <div class="col-md-2">
                    <input type="text" class="form-control withoutFixedDate"
                           id="search_from_date"
                           placeholder="From Date">
                </div>
                <div class="col-md-2">
                    <input onchange="return search_content();" type="text" class="form-control withoutFixedDate"
                           id="search_to_date"
                           placeholder="To Date">
                </div>
            </div>
            <div class="table-responsive" id="bill_closing">
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
            </div>
        </div>
    </div>
</div>
<script>
    function search_content() {
        var base_url = "<?php echo base_url(); ?>";
        var affiliate_id = $('#search_affiliate_id').val();
        var affiliate_name = $('#search_affiliate_name').val();
        var from_date = $('#search_from_date').val();
        var to_date = $('#search_to_date').val();
        var type = $('#search_type').val();
        if ($.trim(affiliate_id) != "" || (affiliate_name) != "" || (from_date) != "" || (to_date) != "" || (type) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/all_affiliate_order_list',
                data: {
                    affiliate_id: affiliate_id,
                    affiliate_name: affiliate_name,
                    from_date: from_date,
                    to_date: to_date,
                    type: type
                },
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "order/OrderController/all_affiliate_order_list/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
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
        var emp_id = $('#search_emp_id').val();
        var exam_name_id = $('#search_exam_name_id').val();
        var board_id = $('#search_board_id').val();
        var study_group_id = $('#search_study_group_id').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {emp_id: emp_id, exam_name_id: exam_name_id, board_id: board_id, study_group_id: study_group_id},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>