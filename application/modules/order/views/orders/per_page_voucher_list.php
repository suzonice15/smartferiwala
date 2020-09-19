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
            <td><?php  echo date("d-m-Y", strtotime($v_request->date)); ?></td>
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
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>