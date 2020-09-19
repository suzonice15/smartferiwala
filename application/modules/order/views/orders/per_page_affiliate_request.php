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
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>