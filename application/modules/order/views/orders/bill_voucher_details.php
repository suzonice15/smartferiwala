<div class="col-md-offset-0 col-md-12">

    <div class="box-body">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <form action="#" id="voucher_post" method="post">
                <table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
                    <tr>
                        <td colspan="2" style="background-color: green; color: white;">
                            <b>Payment Voucher - <?php echo $vp_number; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>Affiliator Name</td>
                        <td style="text-align: left;"><?php echo $affiliate_id . " " . $affiliate_name; ?></td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td style="text-align: left;">
                            <?php
                            foreach ($account_details as $v_account) {
                                if ($v_account->payment_type == 1) {
                                    echo "bKash";
                                } else if ($v_account->payment_type == 2) {
                                    echo "Rocket";
                                } else if ($v_account->payment_type == 3) {
                                    echo "Bank Transfer";
                                } else {
                                    echo "Cash Collection From Ekusheyshop Office";
                                } ?>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Accounts Details</td>
                        <td style="text-align: left;">
                            <?php
                            foreach ($account_details as $v_account) {
                                if ($v_account->payment_type == 1) {
                                    echo $v_account->phone_account_no;
                                } else if ($v_account->payment_type == 2) {
                                    echo $v_account->phone_account_no;
                                } else if ($v_account->payment_type == 3) {
                                    echo 'Account name : '.$v_account->account_name . "</br>";
                                   echo 'Bank name : '.$v_account->bank_name. "</br>";
                                    echo 'Branch name : '. $v_account->branch_name."</br>";
                                    echo 'Account number : '. $v_account->account_number."</br>";
                                    echo 'Swift code : '. $v_account->swift_code;
                                } else {

                                }
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Paid For</td>
                        <td style="text-align: left;"><?php echo $paid_for; ?>
                            <input type="hidden" name="affiliate_id" value="<?php echo $affiliate_id ?>">
                            <input type="hidden" name="paid_for" value="<?php echo $paid_for; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Paid Amount</td>
                        <td style="text-align: left;"><?php echo $total_commission; ?></td>
                    </tr>
                    <tr>
                        <td>Transaction Number</td>
                        <td style="text-align: left;"><?php echo $transaction_number; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Transaction Details</td>
                        <td style="text-align: left;"><?php echo $details; ?></td>
                    </tr>
                </table>
                <div id="add_msg"
                     style="height: 30px; padding-top: 3px; text-align: center; display: none; background-color: green; color: white;">
                </div>
            </form>
        </div>
    </div>
</div>