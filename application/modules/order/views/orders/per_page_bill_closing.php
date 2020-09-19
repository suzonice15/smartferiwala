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
            <td><?php echo $v_request->order_id; ?></td>
            <td>
                                <?php
                                    $date = date_create($v_request->modified_time);
                                    echo date_format($date, "d-m-Y");
                                    ?>
            </td>
            <td>
                <?php echo $v_request->affiliate_user_id; ?> <?php echo word_limiter($v_request->user_f_name . "" . $v_request->user_l_name,2,''); ?>
                <input type="hidden" id="affiliate_user_id<?php echo $v_request->order_id ?>"
                       value="<?php echo $v_request->affiliate_user_id; ?>">
                <input type="hidden" id="affiliate_user_name<?php echo $v_request->order_id ?>"
                       value="<?php echo $v_request->user_f_name . "" . $v_request->user_l_name; ?>">
            </td>
            <td><?php echo $v_request->order_total; ?></td>
            <td>
                <input type="hidden" id="commission<?php echo $v_request->order_id; ?>"
                       value="<?php echo $v_request->commission; ?>">
                <?php echo $v_request->commission; ?>
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
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>