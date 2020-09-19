<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>SL NO</th>
        <th style="width: 300px;">Campaign Name</th>
        <th style="width: 120px;">Campaign Date</th>
        <th style="width: 120px;">Hits</th>
        <th style="width: 120px;">Orders</th>
        <th style="width: 120px;">On Process</th>
        <th style="width: 120px;">Cancelled/Refund</th>
        <th style="width: 120px;">Finalized</th>
    </tr>
    <?php
    $total = 0;
    $i = 0;
    foreach ($my_create_link as $v_link) {
        $i++;
        $total++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="#"
                   onclick="get_generate_link(<?php echo $v_link->id ?>);"><?php echo $v_link->traffic_source; ?></a>
            </td>
            <td><?php echo date('h:i:s a d-M-Y', strtotime($v_link->create_date)); ?></td>
            <td>
                <?php
                $count_hit = $this->MainModel->count_hit_by_user_id($user_id, $v_link->product_id);
                echo $count_hit->total_count;
                ?>
            </td>
            <td>
                <?php
                $count_order = $this->MainModel->count_order($user_id, $v_link->id);
                echo count($count_order);
                ?>
            </td>
            <td>
                <?php
                $count_buy_on_process = $this->MainModel->on_process_product($user_id, $v_link->id);
                echo count($count_buy_on_process);
                ?>
            </td>
            <td>
                <?php
                $count_buy_refund = $this->MainModel->cancel_or_refund_product($user_id, $v_link->id);
                echo count($count_buy_refund);
                ?>
            </td>
            <td>
                <?php
                $count_finalized = $this->MainModel->finalized_product($user_id, $v_link->id);
                echo count($count_finalized);
                ?>
            </td>
        </tr>
    <?php } ?>
</table>
<?php echo $total; ?> item(s)