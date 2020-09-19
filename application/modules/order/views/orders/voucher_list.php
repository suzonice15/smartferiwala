<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-body">
            <div class="text-center" id="add_msg"></div>
            <br>
            <div class="panel-heading" style="height: 55px;">
                <div class="col-md-2">
                    <input onkeyup="return search_content();" type="text" class="form-control"
                           id="search_voucher_number"
                           placeholder="Voucher number">
                </div>
                <div class="col-md-2">
                    <input onkeyup="return search_content();" type="text" class="form-control"
                           id="search_affiliate_name"
                           placeholder="Affiliate name">
                </div>
                <div class="col-md-2">
                    <input onkeyup="return search_content();" type="text" class="form-control"
                           id="search_phone_number"
                           placeholder="Phone Number">
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
                            <th>Voucher Number</th>
                            <th>Payment Date</th>
                            <th>Paid to</th>
                            <th>Paid Amount</th>
                            <th>Paid Through</th>
                            <th>Transection Number</th>
                        </tr>
                        </thead>
                        <?php
                        foreach ($voucher_list as $v_request) {
                                    $single_affilite= $this->MainModel->select_single_affilator_account_information($v_request->user_id);

                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <a href="<?php echo base_url() ?>order/OrderController/bill_voucher_details/<?php echo $v_request->user_id; ?>"
                                   target="_blank"><?php echo $v_request->vp_number; ?></a></td>
                            <td>
                                <?php
                                echo date("d-m-Y", strtotime($v_request->date));
                                ?>
                            </td>
                            <td>
                                <a target="_blank"
                                   href="<?php echo base_url() ?>order/OrderController/affiliate_view_details/<?php echo $v_request->user_id; ?>">
                                    <?php echo $v_request->user_id; ?>&nbsp;<?php echo word_limiter($v_request->user_f_name , 2, ''); ?></a>
                            </td>
                            <td><?php echo $v_request->commission_amount; ?></td>
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
                            <td><?php echo $v_request->transaction_number; ?></td>
                        </tr>
                        <?php } ?>
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
        var voucher_number = $('#search_voucher_number').val();
        var affiliate_name = $('#search_affiliate_name').val();
        var from_date = $('#search_from_date').val();
        var to_date = $('#search_to_date').val();
        var phone_number = $('#search_phone_number').val();
        if ($.trim(voucher_number) != "" || (affiliate_name) != "" || (from_date) != "" || (to_date) != "" || (phone_number) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/all_voucher_list',
                data: {
                    voucher_number: voucher_number,
                    affiliate_name: affiliate_name,
                    from_date: from_date,
                    to_date: to_date,
                    phone_number: phone_number
                },
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "order/OrderController/all_voucher_list/", function (data) {
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