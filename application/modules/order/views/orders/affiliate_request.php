<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-body">
            <div class="table-responsive">
                <div class="panel-heading" style="height: 55px;">
                    <div class="col-md-2">
                        <input onkeyup="return search_content();" type="text" class="form-control"
                               id="search_affiliate_id"
                               placeholder="Affiliate ID">
                    </div>
                    <div class="col-md-2">
                        <input onkeyup="return search_content();" type="text" class="form-control"
                               id="search_affiliate_name"
                               placeholder="Affiliate name">
                    </div>
                    <div class="col-md-2">
                        <select id="search_type" class="form-control">
                            <option value="0">Select Type</option>
                            <option value="2">Approved</option>
                            <option value="1">New Request</option>
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
                    <div class="col-md-2">
                        <input onkeyup="return search_content();" type="text" class="form-control"
                               id="search_phone_number"
                               placeholder="Phone number">
                    </div>
                </div>
                <div id="ajaxdata">
                    <?php echo $links; ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Affiliate Name</th>
                            <th>Approved Date</th>
                            <th>Mobile Number</th>
                            <th>Request Date</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <?php
                        $total = sizeof($request);
                        foreach ($request as $v_request) {
                            ?>
                            <tr>
                                <td><?php echo $total; ?></td>
                                <td><?php echo word_limiter($v_request->user_id . "&nbsp;" . $v_request->user_f_name . "" . $v_request->user_l_name,2,''); ?></td>
                                <td><?php echo $v_request->approved_date; ?></td>
                                <td><?php echo $v_request->user_mobile; ?></td>
                                <td>
                                    <?php
                                    $date = date_create($v_request->created_date);
                                    echo date_format($date, "d-m-Y");
                                    ?>
                                </td>
                                <td>
                                    <?php if ($v_request->affiliate_request_status == 1) {
                                        echo "New Request";
                                    } else if ($v_request->affiliate_request_status == 2) {
                                        echo "Approved";
                                    } else if ($v_request->affiliate_request_status == 4) {
                                        echo "Block";
                                    } else {
                                        echo "Rejected";
                                    } ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() ?>order/OrderController/approved_affiliate_request_details/<?php echo $v_request->user_id; ?>"
                                       class="btn btn-success" title="Inactive" target="_blank">
                                        Details
                                    </a>
                                </td>
                            </tr>
                            <?php $total--;
                        } ?>
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
        var type = $('#search_type').val();
        var from_date = $('#search_from_date').val();
        var to_date = $('#search_to_date').val();
        var phone_number = $('#search_phone_number').val();
        if ($.trim(affiliate_id) != "" || (affiliate_name) != "" || (from_date) != "" || (to_date) != "" || (type) != "" || (phone_number) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/all_affiliate_request',
                data: {
                    affiliate_id: affiliate_id,
                    affiliate_name: affiliate_name,
                    from_date: from_date,
                    to_date: to_date,
                    phone_number: phone_number,
                    type: type
                },
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "order/OrderController/all_affiliate_request/", function (data) {
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