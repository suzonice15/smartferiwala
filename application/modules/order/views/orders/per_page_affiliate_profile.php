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
        $i = 0;
        foreach ($affiliate_profile as $v_request) {
        $i++;
           $single_affilite = $this->MainModel->select_single_affilator_email($v_request->user_id);
                                   
        ?>
        <tbody>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $v_request->user_id; ?></td>
            <td><?php echo word_limiter($v_request->user_f_name,2,''); ?></td>
            <td><?php echo $v_request->user_mobile; ?></td>
            <td><?php echo $single_affilite->email;?></td>
            <td>
                <a href="<?php echo base_url() ?>order/OrderController/affiliate_view_details/<?php echo $v_request->user_id; ?>"
                   target="_blank"><input type="button" class="btn btn-success" value="Details"></a>
            </td>
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