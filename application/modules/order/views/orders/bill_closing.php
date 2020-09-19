<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-body">
            <div class="text-center" id="add_msg"></div>
            <br>
            <div class="table-responsive" id="bill_closing">
                <div class="panel-heading" style="height: 55px;">
                    <div class="col-md-3">
                        <input onkeyup="return search_content();" type="text" class="form-control"
                               id="search_affiliate_id"
                               placeholder="Search by affiliate ID">
                    </div>
                    <div class="col-md-3">
                        <input onkeyup="return search_content();" type="text" class="form-control"
                               id="search_affiliate_name"
                               placeholder="Search by affiliate name">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control withoutFixedDate"
                               id="search_from_date"
                               placeholder="From Date">
                    </div>
                    <div class="col-md-3">
                        <input onchange="return search_content();" type="text" class="form-control withoutFixedDate"
                               id="search_to_date"
                               placeholder="To Date">
                    </div>
                </div>
                <input type="button" value="Make Payment" onclick="select_check_box_value()" class="btn btn-danger"
                       style="float: right;">
                <div id="ajaxdata">
                    <?php echo $links; ?>
                    <table class="table table-bordered table-striped" style="margin-top: 10px;">
                        <thead>
                        <tr style="background-color: yellowgreen;">
                            <th style="color: white;"><input type="checkbox" id="checkAll"></th>
                            <th style="color: white;">Order#</th>
                            <th style="color: white;">Completed Date</th>
                            <th style="color: white;">Affiliator</th>
                            <th style="color: white;">Sales Price</th>
                            <th style="color: white;">Comm. Amount</th>
                        </tr>
                        </thead>
                        <?php
                        $i = 0;
                        $count_total_commission = 0;
                        foreach ($bill_closing as $v_request) {
                        $i++;
                        $count_total_commission += $i;
                        ?>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" id="checked_bok"
                                       name="order_id"
                                       value="<?php echo $v_request->order_id; ?>"></td>
                            <td>
                                <a href="<?php echo base_url()?>affilator-order-view/<?php echo $v_request->order_id; ?>" target="_blank"><?php echo $v_request->order_id; ?></a>
                            </td>
                            <td>
                                <?php
                                $date=date_create($v_request->created_time);
                                echo date_format($date,"d-m-Y");
                                ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url()?>order/OrderController/affiliate_view_details/<?php echo $v_request->affiliate_user_id?>" target="_blank">
                                <?php echo $v_request->affiliate_user_id; ?> <?php echo word_limiter($v_request->user_f_name . "" . $v_request->user_l_name,2,''); ?>
                                </a>
                                <input type="hidden" id="affiliate_user_id<?php echo $v_request->order_id ?>"
                                       value="<?php echo $v_request->affiliate_user_id; ?>">
                                <input type="hidden" id="affiliate_user_name<?php echo $v_request->order_id ?>"
                                       value="<?php echo $v_request->user_f_name . "" . $v_request->user_l_name; ?>">
                            </td>
                            <td><?php echo ($v_request->order_total) - ($v_request->shipping_charge); ?></td>
                            <td>
                                <?php
                                $set_commission = 0;
                                $product_items = unserialize($v_request->products);
                                if (is_array($product_items['items'])) {
                                    foreach ($product_items['items'] as $product_id => $item) {
                                        //$result = $this->MainModel->select_product_commission($product_id);
                                        $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$v_request->order_id);
                                        $set_commission += $result->commission * $item['qty'];
                                    }
                                }
                                echo $set_commission;
                                ?>
                                <input type="hidden" id="commission<?php echo $v_request->order_id; ?>"
                                       value="<?php echo $set_commission; ?>">
                            </td>
                        </tr>
                        <?php } ?>
                        <input type="hidden" id="total_commission" value="0">
                        <input type="hidden" id="affiliate_id">
                        <input type="hidden" id="affiliate_name">
                        </tbody>
                    </table>
                    <?php echo $links; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function select_check_box_value() {
        var val = [];
        var total_commission = $('#total_commission').val();
        var affiliate_id = $('#affiliate_id').val();
        var affiliate_name = $('#affiliate_name').val();
        $('input[name="order_id"]:checked').each(function (i) {
            val[i] = $(this).val();
        });
        $.ajax({
            type: 'post',
            url: '<?php echo base_url()?>order/OrderController/bill_closing_confirm',
            data: {
                val: val,
                total_commission: total_commission,
                affiliate_id: affiliate_id,
                affiliate_name: affiliate_name
            },
            success: function (result) {
                if (result) {
                    $('#bill_closing').hide();
                    $('#add_msg').html(result);
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
        $('input[type="checkbox"]').click(function () {
            if ($(this).is(":checked")) {
                var tt = $(this).val();
                var total_commission = $('#total_commission').val();
                var set_id = tt;
                var get_affiliate_user_id = $('#affiliate_user_id' + set_id + "").val();
                var get_affiliate_user_name = $('#affiliate_user_name' + set_id + "").val();
                var get_commission = $('#commission' + set_id + "").val();
                var total_commission = parseInt(total_commission, 10) + parseInt(get_commission, 10);
                $('#total_commission').val(total_commission);
                $('#affiliate_id').val(get_affiliate_user_id);
                $('#affiliate_name').val(get_affiliate_user_name);
            }
            else if ($(this).is(":not(:checked)")) {
                var tt2 = $(this).val();
                var total_commission = $('#total_commission').val();
                var set_id = tt2;
                var get_commission = $('#commission' + set_id + "").val();
                var total_commission = total_commission - get_commission;
                $('#total_commission').val(total_commission);
            }
        });
    });
</script>
<script>
    $('#checkAll').click(function () {
        $('input:checkbox').prop('checked', this.checked);
    });
</script>


<script>
    function search_content() {
        var base_url = "<?php echo base_url(); ?>";
        var affiliate_id = $('#search_affiliate_id').val();
        var affiliate_name = $('#search_affiliate_name').val();
        var from_date = $('#search_from_date').val();
        var to_date = $('#search_to_date').val();
        if ($.trim(affiliate_id) != "" || (affiliate_name) != "" || (from_date) != "" || (to_date) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/all_bill_closing',
                data: {
                    affiliate_id: affiliate_id,
                    affiliate_name: affiliate_name,
                    from_date: from_date,
                    to_date: to_date
                },
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "order/OrderController/all_bill_closing/", function (data) {
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

