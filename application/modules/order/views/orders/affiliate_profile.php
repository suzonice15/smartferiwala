<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-body">
            <div class="text-center" id="add_msg"></div>
            <br>
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
                           placeholder="Phone Number">
                </div>
            </div>
            <div class="table-responsive" id="bill_closing">
                <div id="ajaxdata">
                    <?php echo $links; ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $total = count($affiliate_profile);
                        foreach ($affiliate_profile as $v_request) {
                            
                                   $single_affilite = $this->MainModel->select_single_affilator_email($v_request->user_id);
                                   
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $v_request->user_id; ?></td>
                            <td><?php echo word_limiter($v_request->user_f_name,2,''); ?></td>
                            <td><?php echo $v_request->user_mobile; ?></td>
                            <td><?php echo $single_affilite->email; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>order/OrderController/affiliate_view_details/<?php echo $v_request->user_id; ?>"
                                   target="_blank"><input type="button" class="btn btn-success" value="Details"></a>
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
        var phone_number = $('#search_phone_number').val();
        if ($.trim(affiliate_id) != "" || (affiliate_name) != "" || (from_date) != "" || (to_date) != "" || (phone_number) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>order/OrderController/all_affiliate_profile',
                data: {
                    affiliate_id: affiliate_id,
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
            $.post(base_url + "order/OrderController/all_affiliate_profile/", function (data) {
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



