<table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
    <tr>
        <th>Payment Date</th>
        <th>Voucher Number</th>
        <th>Paid Amount</th>
        <th>Paid Through</th>
        <th>Transection Number</th>
    </tr>
    <?php
    $total_paid1 = 0;
    foreach ($all_paid_request1 as $v_paid) {
        $total_paid1++;
        ?>
        <tr>
            <td><?php echo date("d-m-Y", strtotime($v_paid->date)); ?></td>
            <td><?php echo $v_paid->vp_number; ?></td>
            <td><?php echo $v_paid->commission_amount; ?></td>
            <td>
                <?php
                if ($v_paid->type == 1) {
                    echo "bKash";
                } else if ($v_paid->type == 2) {
                    echo "Rocket";
                } else if ($v_paid->type == 3) {
                    echo "Bank Transfer";
                } else {
                    echo "Cash Collection From Ekusheyshop Office";
                }
                ?>
            </td>
            <td><?php echo $v_paid->transaction_number; ?></td>
        </tr>
    <?php } ?>
</table>
<?php echo $total_paid1; ?> item(s)