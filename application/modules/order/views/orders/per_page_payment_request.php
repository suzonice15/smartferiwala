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
                                    $date = date_create($v_request->date);
                                    echo date_format($date, "d-m-Y");
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
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>