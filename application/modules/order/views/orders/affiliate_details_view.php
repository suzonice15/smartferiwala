<div class="form-group">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-1">
                    <?php foreach ($affiliate_details as $v_details) { ?>
                    <img
                        src="<?php echo base_url() ?>uploads/affiliate_profile/<?php echo $v_details->profile_picture; ?>"
                        height="75" width="65" style="border: 1px solid black;">
                </div>
                <div class="col-md-3">
                    <p>&nbsp; <b>Name:</b> <?php echo $v_details->name; ?></p>
                    <p>&nbsp; <b>Affiliate ID:</b> <?php echo $v_details->user_id; ?></p>
                    <p>&nbsp; <b>Joining Date:</b> <?php echo $v_details->approved_date; ?></p>
                </div>
                <?php } ?>
            </div>
            <p style="padding-top: 20px;"><b>Personal Info</b></p>
            <table class="table table-striped table-bordered table-hover">
                <?php
                $set_user_id = "";
                foreach ($affiliate_details as $v_details) {
                    $set_user_id = $v_details->user_id;
                    ?>
                    <tr>
                        <td style="width: 300px;">Phone Number</td>
                        <td><?php echo $v_details->phone_number ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $v_details->email; ?></td>
                    </tr>
                    <tr>
                        <td>Permanent Address</td>
                        <td><?php echo nl2br($v_details->permanent_address); ?></td>
                    </tr>
                    <tr>
                        <td>Present Address</td>
                        <td><?php echo nl2br($v_details->present_address); ?></td>
                    </tr>
                    <tr>
                        <td>Website URL</td>
                        <td><a target="_blank"
                               href="<?php echo $v_details->website_url; ?>"><?php echo $v_details->facebook_page_url; ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Facebook page URL</td>
                        <td><a target="_blank"
                               href="<?php echo $v_details->facebook_page_url; ?>"><?php echo $v_details->facebook_page_url; ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Facebook profile URL</td>
                        <td><a href="<?php echo $v_details->facebook_profile_url; ?>"
                               target="_blank"><?php echo $v_details->facebook_profile_url; ?></a></td>
                    </tr>
                    <tr>
                        <td>YouTube channel URL</td>
                        <td><a target="_blank"
                               href="<?php echo $v_details->youtube_channel_url; ?>"><?php echo $v_details->youtube_channel_url; ?></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Promotional Strategy</td>
                        <td><?php echo $v_details->promotional_strategy; ?></td>
                    </tr>
                <?php } ?>
            </table>
            
            <p>Payment Info</p>

            <table class="table table-striped table-bordered table-hover">
                <?php
                foreach ($account_details as $v_account) {
                    if (($v_account->payment_type == 1) or ($v_account->payment_type == 2) or ($v_account->payment_type == 4)) {
                        ?>
                        <tr>
                            <td style="width: 300px;">Payment Type</td>
                            <td>
                                <?php if ($v_account->payment_type == 1) {
                                    echo "bKash";
                                } else if ($v_account->payment_type == 2) {
                                    echo "Rocket";
                                } else if ($v_account->payment_type == 3) {
                                    echo "Bank Transfer";
                                } else {
                                    echo "Cash Collection From Ekusheyshop Office";
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 300px;">
                                <?php if ($v_account->payment_type == 1) {
                                    echo "bKash";
                                } else if ($v_account->payment_type == 2) {
                                    echo "Rocket";
                                } else{echo "Cash Collection From Ekusheyshop Office";
                                } ?>
                            </td>
                            <td>
                                <?php if ($v_account->payment_type == 1) {
                                    echo $v_account->phone_account_no;
                                    } else if ($v_account->payment_type == 2) {
                                    echo $v_account->phone_account_no;
                                    } else {
                                    echo "Cash Collection From Ekusheyshop Office";
                                } ?>
                            </td>
                        </tr>
                    <?php } else { ?>
                        <tr>
                            <td style="width: 300px;">Payment Type</td>
                            <td>Bank</td>
                        </tr>
                        <tr>
                            <td>Account Name</td>
                            <td><?php echo $v_account->account_name; ?></td>
                        </tr>
                        <tr>
                            <td>Bank Name</td>
                            <td><?php echo $v_account->bank_name; ?></td>
                        </tr>
                        <tr>
                            <td>branch_name</td>
                            <td><?php echo $v_account->branch_name; ?></td>
                        </tr>
                        <tr>
                            <td>account_number</td>
                            <td><?php echo $v_account->account_number; ?></td>
                        </tr>
                        <tr>
                            <td>swift_code</td>
                            <td><?php echo $v_account->swift_code; ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>


            <p style="font-size: 18px; color: black; padding-top: 20px;">Payment History</p>
            <table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
                <tr>
                    <th>Payment Date</th>
                    <th>Voucher Number</th>
                    <th>Paid Amount</th>
                    <th>Paid Through</th>
                    <th>Transection Number</th>
                </tr>
                <?php
                $total_paid = 0;
                foreach ($paid_request as $v_paid) {
                    $total_paid++;
                    ?>
                    <tr>
                        <td>
                            <?php
                            echo date("d-m-Y", strtotime($v_paid->date));
                             ?>
                        </td>
                        <td>
                            <a target="_blank"
                               href="<?php echo base_url() ?>order/OrderController/bill_voucher_details/<?php echo $v_paid->user_id; ?>/<?php echo $v_paid->vp_number; ?>"><?php echo $v_paid->vp_number; ?></a>
                        </td>
                        <td><?php echo $v_paid->commission_amount; ?></td>
                        <td>
                            <?php if ($single_affilite->payment_type == 1) {
                                echo "bKash";
                            } else if ($single_affilite->payment_type == 2) {
                                echo "Rocket";
                            } else if ($single_affilite->payment_type == 3) {
                                echo "Bank Transfer";
                            } else {
                                echo "Cash Collection From Ekusheyshop Office";
                            } ?>
                        </td>
                        <td><?php echo $v_paid->transaction_number; ?></td>
                    </tr>
                <?php } ?>
            </table>
            <?php echo $total_paid; ?> item(s)
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script>
    function show_field() {
        $('#show_field').show();
    }
</script>

<script>
    function approved_affiliate_request($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/approved_affiliate_request/' + $id,
            success: function (result) {
                if (result) {
                    $('#add_msg').html(result);
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>affiliate-request";
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
    function cancel_affiliate_request($id) {
        var id = $id;
        var cancel_data = $('#show_field').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/cancel_affiliate_request',
            data: {id: id, cancel_data: cancel_data},
            success: function (result) {
                if (result) {
                    $('#add_msg').html(result);
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>affiliate-request";
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