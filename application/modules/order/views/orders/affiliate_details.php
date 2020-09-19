

<div class="form-group">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row" id="hide_small_img">
                <div class="col-md-1">
                    <?php
                    foreach ($affiliate_details as $v_details) { ?>
                    <a href="#" onclick="big_img(1)"><img
                            src="<?php echo base_url() ?>uploads/affiliate_profile/<?php echo $v_details->profile_picture; ?>"
                            height="75" width="65" style="border: 1px solid black;"></a>
                </div>
                <div class="col-md-3">
                    <p>&nbsp; <b>Name:</b> <?php echo $v_details->name; ?></p>
                    <p>&nbsp; <b>Affiliate ID:</b> <?php echo $v_details->user_id; ?></p>
                    <p>&nbsp; <b>Joining Date:</b> <?php echo $v_details->approved_date; ?></p>
                </div>
                <?php } ?>
            </div>

            <div class="row" style="display: none;" id="show_big_img">
                <div class="col-md-3">
                    <img
                        src="<?php echo base_url() ?>uploads/affiliate_profile/<?php echo $v_details->profile_picture; ?>"
                        height="150" width="150" style="border: 1px solid black;">
                </div>
                <p>&nbsp; <b>Name:</b> <?php echo $v_details->name; ?></p>
                <p>&nbsp; <b>Affiliate ID:</b> <?php echo $v_details->user_id; ?></p
                <p>&nbsp; <b>Joining Date:</b> <?php echo $v_details->approved_date; ?></p>
            </div>

            <p style="padding-top: 20px;"><b>Personal Info</b></p>
            <table class="table table-striped table-bordered table-hover">
                <?php
                $get_status = "";
                $set_user_id = "";
                foreach ($affiliate_details as $v_details) {
                    $get_status = $v_details->affiliate_request_status;
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
                        <td><?php echo nl2br($v_details->present_address);?></td>
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
                <tr>
                    <td colspan="2">
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
                                                $payment_type = "bKash";
                                            } else if ($v_account->payment_type == 2) {
                                                echo "Rocket";
                                                $payment_type = "Rocket";
                                            } else if ($v_account->payment_type == 3) {
                                                echo "Bank Transfer";
                                                $payment_type = "Bank Transfer";
                                            } else {
                                                echo "Cash Collection From Ekusheyshop Office";
                                                $payment_type = "Cash Collection From Ekusheyshop Office";
                                            } ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 300px;"><?php echo $payment_type; ?></td>
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
                                        <td>Branch Name</td>
                                        <td><?php echo $v_account->branch_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Account Number</td>
                                        <td><?php echo $v_account->account_number; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Swift Code</td>
                                        <td><?php echo $v_account->swift_code; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">If you want to update payment information click "Payment
                                            Information" link
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    </td>
                </tr>


                <?php
                if ($get_status == 1) { ?>
                    <tr>
                        <td>
                            <input type="button" onclick="approved_affiliate_request(<?php echo $set_user_id; ?>)"
                                   class="btn btn-success" value="Approved">
                            <input type="button" onmouseover="show_field()"
                                   onclick="cancel_affiliate_request(<?php echo $set_user_id; ?>)"
                                   class="btn btn-danger"
                                   value="Reject">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="display: none;" id="show_field">
                            <textarea name="reject_note" id="reject_note" class="form-control ckeditor"
                                      rows="3"></textarea>
                            </div>
                        </td>
                    </tr>
                <?php } else if ($get_status == 2) { ?>
                    <tr>
                        <td colspan="2">
                            <input type="button" onclick="reject_affiliate_request(<?php echo $set_user_id; ?>)"
                                   class="btn btn-danger" value="Block">
                        </td>
                    </tr>
                <?php } ?>


                <tr>
                    <td colspan="2">
                        <div class="text-center" style="color: green;" id="add_msg"></div>
                    </td>
                </tr>
            </table>
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
    function reject_affiliate_request($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/reject_affiliate_request/' + $id,
            success: function (result) {
                if (result) {
                    $('#show_field').hide();
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
    function approved_affiliate_request($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>order/OrderController/approved_affiliate_request/' + $id,
            success: function (result) {
                if (result) {
                    $('#show_field').hide();
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
        var cancel_data = CKEDITOR.instances.reject_note.getData();
        if (validation() == true) {
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
        } else {
            return false;
        }
        function validation() {
            if (cancel_data.length == "") {
                $('#add_msg').html("<code class='err_msg'>* This Required *</code>");
                return false;
            } else {
                return true;
            }
        }
    }
</script>

<script>
    function big_img($id) {
        var id = $id;
        if (id == 1) {
            $('#show_big_img').show();
            $('#hide_small_img').hide();
        } else {
            $('#show_big_img').hide();
            $('#hide_small_img').show();
        }
    }
</script>