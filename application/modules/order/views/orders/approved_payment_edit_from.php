<?php foreach ($payment_request as $v_data) { ?>
    <form action="#" method="post" id="update_data_frm">
        <table class="table table-bordered table-striped table-hover" id="show_filed">
            <tr>
                <td>PV Number</td>
                <input type="hidden" name="id" value="<?php echo $v_data->id; ?>">
                <td><input type="text" name="vp_number" value="<?php echo $v_data->vp_number ?>"></td>
            </tr>
            <tr>
                <td>Payment Date</td>
                <td><input type="text" name="payment_date" value="<?php echo $v_data->payment_date ?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
<?php } ?>

<script>
    $(document).ready(function () {
        $('#update_data_frm').submit(function () {
            var dataString = $('#update_data_frm').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>order/OrderController/approved_payment',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>order/OrderController/all_payment_request";
                        }, 2000);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        });
    });
</script>