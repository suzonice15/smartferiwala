<br>
<div class="text-center" style="color: green;" id="add_msg"></div>
<br>
<p id="show_main_div"></p>
<div class="col-md-offset-0 col-md-12" id="hide_main_div">
    <div class="box-body">
        <div class="text-center" id="add_msg">
        </div>
        <br>
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
        <div class="table-responsive" id="bill_closing">
            <div id="ajaxdata">
                <?php echo $links; ?>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>SL NO</th>
                        <th>Affiliator</th>
                        <th>Amount</th>
                        <th>Req. Date</th>
                        <th>PV Number</th>
                        <th>Payment Date</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($payment_request as $v_request) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <a target="_blank"
                                   href="<?php echo base_url() ?>order/OrderController/affiliate_view_details/<?php echo $v_request->user_id; ?>">
                                    <?php echo word_limiter($v_request->user_id . "&nbsp;" . $v_request->user_f_name . "" . $v_request->user_l_name,2,''); ?>
                                </a>
                            </td>
                            <td>
                                <input type="hidden" value="<?php echo $v_request->id ?>" id="id<?php echo $i; ?>">
                                <?php echo $v_request->commission_amount; ?>
                            </td>
                            <td>
                                <?php
                                echo date("d-m-Y", strtotime($v_request->date));
                                ?>
                            </td>

                            <?php
                            if ($v_request->status == 1) { ?>
                                <td><input type="text" pattern="[0-9]+" id="vp_number2<?php echo $i ?>"
                                           name="vp_number2"></td>
                            <?php } else { ?>
                                <td>
                                    <input type="text" readonly="readonly"
                                           value="<?php echo $v_request->vp_number; ?>">
                                </td>
                            <?php } ?>

                            <?php
                            if ($v_request->status == 1) { ?>
                                <td><input type="text" class="payment_date4" id="payment_date2<?php echo $i ?>"></td>
                            <?php } else { ?>
                                <td>
                                    <input type="text" readonly="readonly"
                                           value="<?php echo $v_request->payment_date; ?>">
                                </td>
                            <?php } ?>
                            <td>
                                <?php
                                if ($v_request->status == 1) { ?>
                                    <a href="#"
                                       onclick="approved_payment33(<?php echo $i; ?>)"
                                       class="btn btn-warning" title="Inactive">
                                        Approved
                                    </a>
                                <?php } else {
                                    ?>
                                    <a href="#"
                                       onclick="edit_data(<?php echo $v_request->id; ?>)" class="btn btn-warning"
                                       title="Inactive">
                                        Edit
                                    </a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function approved_payment33($id) {
        var set_id = $id;
        var id = $("#id" + set_id + "").val();
        var vp_number = $("#vp_number2" + set_id + "").val();
        var payment_date = $("#payment_date2" + set_id + "").val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/approved_payment',
            data: {id: id, vp_number: vp_number, payment_date: payment_date},
            success: function (result) {
                if (result) {
                    $('#add_msg').html(result);
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>order/OrderController/all_payment_request";
                    }, 2000);
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
    function edit_data($id) {
        $('#hide_main_div').hide();
        var id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/approved_payment_edit_from',
            data: {id: id},
            success: function (result) {
                if (result) {
                    $('#show_main_div').html(result);
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
    $('body').on('focus', ".payment_date4", function () {
        $(this).datepicker({dateFormat: 'yy-mm-dd', changeYear: true, changeMonth: true, yearRange: "1970:2100"});
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
                url: '<?php echo base_url(); ?>order/OrderController/all_payment_request',
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
            $.post(base_url + "order/OrderController/all_payment_request/", function (data) {
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