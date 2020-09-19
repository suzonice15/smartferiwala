<div class="col-md-offset-0 col-md-12">
    <div class="box box-success ">
        <div class="box-header with-border">
            <h3 class="box-title"><?php if (isset($title)) echo $title ?></h3>
        </div>
        <div class="box-body">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $order_id = $order->order_id;
                        $service_cost = $order->order_id;
                        ?>
                        <form method="POST" id="order_update" action="<?= base_url() ?>order-update"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="box box-primary" style="border:2px solid #ddd">
                                        <div class="box-header" style="background-color: #ddd;">
                                            <h3 class="box-title">Customer Info</h3>
                                        </div>
                                        <div class="box-body">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p><b>Date:</b>
                                                            <?php
                                                            // $created_time = $order->created_time;
                                                            $created_time = date('H:i:s a d-M-Y', strtotime($order->created_time));


                                                            echo $created_time ?>


                                                        </p>
                                                        <h3>Order Id: <?= $order->order_id; ?></h3>

                                                        <p><b>Name:</b> <?= $order->customer_name; ?></p>
                                                        <p><b>Phone:</b> <?= $order->customer_phone; ?></p>
                                                        <p><b>Email:</b> <?= $order->customer_email; ?></p>
                                                        <p><b>Customer Address: </b><?= $order->customer_address; ?>
                                                        </p>
                                                        <p><b>Delevery Address: </b><?= $order->delevery_address; ?>
                                                        </p>
                                                        <p><b>City: </b><span id="city"><?= $order->city; ?></span></p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

											<span class="order_data">
										<hr class="break break10">

										<div class="form-group ">
                                            <label for="billing_name">Name </label>


                                            <input class="form-control" type="text" name="customer_name"
                                                   value="<?php echo $order->customer_name; ?>"/>
                                        </div>


										<div class="form-group ">
                                            <label for="billing_email">Email</label>


                                            <input type="text" class="form-control" name="customer_email"
                                                   value="<?php echo $order->customer_email; ?>"/>
                                        </div>


										<div class="form-group ">
                                            <label for="billing_email">Customer Phone</label>
                                            <input type="text" name="customer_phone" class="form-control"
                                                   value="<?php echo $order->customer_phone; ?>"/>
                                        </div>





                                                 <div class="form-group shipping-address-group ">
                                                     <label for="shipping_address1">Customer Address </label>
                                                <textarea class="form-control" rows="3" name="customer_address"
                                                          id="shipping_address1"><?= $order->customer_address ?></textarea>
                                                 </div>


                                                <div class="form-group ">
                                                    <label for="billing_address1">Delivery Address </label>
                                                    <textarea class="form-control" rows="3"
                                                              name="delevery"><?= $order->delevery_address ?></textarea>
                                                </div>



												<div class="form-group ">
                                                    <label for="billing_address1">City </label>
                                                    <input class="form-control" name="city" value="<?= $order->city ?>">


                                                </div>

									</span>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-5">
                                    <div class="box box-danger" style="border:2px solid #ddd">
                                        <div class="box-header" style="background-color:#ddd">
                                            <h3 class="box-title">Actions</h3>
                                        </div>
                                        <div class="box-body">
                                            <?php
                                            $order_area = $order->order_area;
                                            if (!$order_area) {
                                                $order_area = 'inside_dhaka';
                                            }
                                            ?>
                                            <div hidden class="form-group" id="order_area">
                                                <label>
                                                    <input type="radio" name="order_area" value="inside_dhaka"
                                                           id="inside_dhaka" <?= $order_area == 'inside_dhaka' ? 'checked' : NULL ?>>
                                                    Inside Dhaka
                                                </label>
                                                <br/>
                                                <label>
                                                    <input type="radio" id="outside_dhaka" name="order_area"
                                                           value="outside_dhaka" <?= $order_area == 'outside_dhaka' ? 'checked' : NULL ?>>
                                                    Outside Dhaka
                                                </label>
                                            </div>


                                            <div class="form-group">

                                                <div hidden class="form-group">
                                                    <label>Courier Service</label>
                                                    <select name="courier_service" id="courier_service"
                                                            class="form-control">
                                                        <?php if (isset($couriers)): foreach ($couriers as $courier) : ?>
                                                            <option
                                                                value="<?php echo $courier->courier_name ?>"><?php echo $courier->courier_name ?></option>
                                                        <?php endforeach;endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Shipping Date</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <?php
                                                    $shipment_time = date('d-m-Y', strtotime($order->shipment_time));

                                                    ?>
                                                    <input type="text" name="shipment_time"
                                                           class="form-control pull-right withoutFixedDate"
                                                           value="<?= $shipment_time ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Order Status</label>
                                                <?php

                                                $user_type_status = $this->session->userdata('user_type');


                                                ?>

                                                <select <?php if ($user_type_status == 'office-staff' && $order->order_status == 'completed') {
                                                    echo 'disabled';
                                                } ?> name="order_status" id="order_status" class="form-control">
                                                    <option value="new">New</option>
                                                    <option value="pending_payment">Pending for Payment</option>
                                                    <option value="processing">On Process</option>
                                                    <option value="on_courier">With Courier</option>
                                                    <option value="delivered">Delivered</option>
                                                    <option value="refund">Refunded</option>
                                                    <option value="cancled">Cancelled</option>
                                                    <option value="completed">Completed</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Order Note</label>


                                                <input name="order_note" value="<?php echo $order->order_note; ?>"
                                                       class="form-control">

                                            </div>


                                            <div class="form-group">
                                                <label for="billing_name">Payment type<span class="text-danger">*</span></label>
                                                <select name="payment_type" id="payment_type" class="form-control">
                                                    <option value="bKash">Bkash Payment</option>
                                                    <option value="online">Online Payment</option>
                                                    <option value="cash_on_delivery">Cash On Delivery</option>
                                                </select>
                                            </div>

                                            <div class="form-group">

                                                <p> <?php
                                                    $sslcommerz = unserialize($order->sslcommerz);

                                                    if (is_array($sslcommerz) && sizeof($sslcommerz) > 0) {
                                                        $card_type = $sslcommerz['card_type'];

                                                        ?> <label for="billing_name">Card Type<span
                                                                class="text-danger"></span></label>
                                                        <span class="bold card_type"><?= $card_type ?></span>
                                                        <?php
                                                    }

                                                    //echo '<pre>'; print_r($sslcommerz); echo '</pre>';
                                                    ?></p>
                                            </div>


                                            <div class="form-group">
                                                <label>Bkash transaction id</label>
                                                <input name="bkash_payment" value="<?php echo $order->bkash_payment; ?>"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <input type="hidden" name="row_id" value="<?= $order->order_id ?>">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box box-primary" style="border:2px solid #ddd">
                                        <div class="box-header" style="background-color:#ddd">
                                            <h3 class="box-title">Order Info</h3>
                                        </div>
                                        <div class="box-body">
									<span id="product_html">


									<table class="table table-striped table-bordered">
                                        <tr>
                                            <th class="name" width="30%">Product</th>
                                            <th class="name" width="5%">Code</th>
                                            <th class="image text-center" width="5%">Image</th>

                                            <th class="quantity text-center" width="10%">Qty</th>
                                            <th class="price text-center" width="10%">Unit Price</th>
                                            <th class="total text-right" width="10%">Total</th>
                                            <th class="total text-right" width="10%">Commision %</th>
                                            <th class="total text-right" width="10%">Commision Amount</th>
                                        </tr>
                                        <?php
                                        $product_ids = array();
                                        $proSizeList = 0;
                                        $subtotal_price = 0;
                                        $item_count = 0;
                                        $product_items = unserialize($order->products);
                                        $count_total_commission = 0;

                                        $html = null;
                                        if (is_array($product_items['items'])) {
                                            foreach ($product_items['items'] as $product_id => $item) {

                                                $featured_image = isset($item['featured_image']) ? $item['featured_image'] : null;
                                                $product_ids[] = $product_id;
                                                $result = $this->MainModel->select_product_commission_from_affilite_view($product_id,$order->order_id);
                                                $set_commission = $result->commission;

                                                $get_total_commission = $item['qty'] * $set_commission;
                                                $item_price = str_replace(",", "", $item['price']);
                                                $get_percent = (($set_commission * 100) / $item_price);
                                                $count_total_commission += $get_total_commission;
                                                $this->db->select('product_name');
                                                $this->db->where('product_id', $product_id);
                                                $productlink_data = $this->db->get('product')->row();
                                                $product_link = base_url() . 'product/' . $productlink_data->product_name;
                                                $this->db->select('sku');
                                                $this->db->where('product_id', $product_id);
                                                $productlink_data_sku = $this->db->get('product')->row();
                                                $productlink_data_sku = $productlink_data_sku->sku;
                                                //  $product_id=0;
                                                $_product_title = substr($item['name'], 0, 150);

                                                $totall = intval(preg_replace('/[^\d.]/', '', $item['subtotal']));

                                                $subtotal_price += $totall;
                                                //  $subtotal_price= $subtotal_price+ $item['subtotal'] ;
                                                $item_count = $item_count + $item['qty'];
                                                $html .= '<tr>
														<td><a  target="_blank" href="' . $product_link . '">' . $_product_title . '</a></td>	
														<td>' . $productlink_data_sku . '</td>	
													
														<td class="image text-center">
															<img src="' . $featured_image . '" height="30" width="30">
														</td>
														
														';

                                                $html .= '</select></td><td class="text-center">
															<input type="number" name="products[items][' . $product_id . '][qty]" class="form-control item_qty" value="' . (isset($item['qty']) ? $item['qty'] : null) . '" data-item-id="' . $product_id . '" style="width:60px;">
														</td>
														<td class="text-center">৳ ' . (isset($item['price']) ? $item['price'] : null) . '</td>
														<td class="text-right">৳ ' . (isset($item['subtotal']) ? $item['subtotal'] : null) . '</td>
														<td style="text-align: center;">' . $get_percent . '</td>
														<td style="text-align: right;">' . formatted_price($get_total_commission) . '</td>
													</tr>';
                                            }
                                        }
                                        echo $html;
                                        ?>
                                        <tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 20px;" colspan="7"><b>Total</b></td>
                                            <td style="text-align: right; font-size: 20px;">
                                                <b><?php echo formatted_price($count_total_commission); ?></b></td>
                                        </tr>
                                    </table>
                                       	</span>
                                        </div>
                                    </div>
                                    <input type="button"
                                           class="btn btn-primary pull-right"
                                           name="backButton"
                                           value="Close"
                                           style="background-color:#245f91; color:#fff;font-weight:bold;"
                                           onclick="window.close();">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <script>
            document.forms['order_update'].elements['order_status'].value = "<?php echo $order->order_status;?>";

            $(document).on('input change click', '#order_update #shipping_charge_suzon', function () {
                var charge = $(this).val();
                var subtotal_cost = $('#order_update #subtotal_cost').text();
                var total = parseFloat(charge) + parseFloat(subtotal_cost);
                $('#total_cost').text(total.toFixed(2));

            });


            $(document).ready(function () {
                $(document).on('change', '#product_ids', function () {
                    var product_ids = [];
                    var product_qtys = [];

                    $.each($("form#checkout #product_ids option:selected, form#order_update #product_ids option:selected"), function () {
                        product_ids.push($(this).val());
                        product_ids.push($(this).attr('data-item-id'));
                        product_qtys.push($(this).val());
                    });
                    product_ids = product_ids.join(",");
                    $.ajax({
                        type: "POST",
                        data: {product_id: product_ids, product_quantity: 1},
                        url: "<?php echo base_url();?>order/OrderController/productSelection",
                        success: function (result) {

                            var response = JSON.parse(result);
                            $('form#checkout #product_html, form#order_update #product_html').html(response.html);
                        },
                        errors: function (result) {
                        }
                    });
                });

                $(document).on('change', "form#checkout #outside_dhaka, form#order_update #outside_dhaka", function () {
                    var courier_id = 2;
                    var inside_dhaka = jQuery("input[name='shipping_charge']").val();
                    var outside_dhaka = jQuery("input[name='shipping_charge_Out']").val();
                    var total = jQuery('.bold #total_cost').text();

                    var total_price = parseFloat(total) + parseFloat(outside_dhaka) - parseFloat(inside_dhaka);
                    jQuery('.bold #delivery_cost').text(outside_dhaka);

                    jQuery("input[name='order_total']").val(total_price);
                    jQuery('.bold #total_cost').text(total_price);
                    $.ajax({
                        type: "POST",
                        data: {courier_id: courier_id},
                        url: "<?php echo base_url();?>order/OrderController/CourierSelection",
                        success: function (data) {
                            $('#courier_service').html(data);
                        }
                    });
                });
                $(document).on('change', "form#checkout #inside_dhaka, form#order_update #inside_dhaka", function () {
                    var courier_id = 1;
                    var inside_dhaka = jQuery("input[name='shipping_charge']").val();
                    var outside_dhaka = jQuery("input[name='shipping_charge_Out']").val();
                    var total = jQuery('.bold #total_cost').text();

                    var total_price = parseFloat(total) - parseFloat(outside_dhaka) + parseFloat(inside_dhaka);
                    jQuery('.bold #delivery_cost').text(inside_dhaka);

                    jQuery("input[name='order_total']").val(total_price);
                    jQuery('.bold #total_cost').text(total_price);
                    $.ajax({
                        type: "POST",
                        data: {courier_id: courier_id},
                        url: "<?php echo base_url();?>order/OrderController/CourierSelection",
                        success: function (data) {
                            $('#courier_service').html(data);
                        }
                    });
                });

                $("#ship_to_billing,#billing_address1").change(function () {
                    if ($(this).prop('checked')) {
                        var deleveryAdress = $("#shipping_address1").val();
                        $("#billing_address1").val(deleveryAdress);
                    } else {
                        $("#billing_address1").val("");
                    }
                });


                $('body').on('click', 'form#checkout .update_items, form#order_update .update_items', function () {
                    var product_ids = [];
                    var product_qtys = [];
                    var shipping_charge = $('#shipping_charge').val();
                    $.each($("form#checkout .item_qty, form#order_update .item_qty"), function () {
                        product_ids.push($(this).attr('data-item-id'));
                        product_qtys.push($(this).val());
                    });

                    product_ids = product_ids.join(",");
                    product_qtys = product_qtys.join(",");

                    $.ajax({
                        type: 'POST',
                        data: {
                            "product_ids": product_ids,
                            "product_qtys": product_qtys,
                            "shipping_charge": shipping_charge,

                        },
                        url: "<?php echo base_url();?>order/OrderController/productSelectionChange",
                        success: function (result) {
                            //alert('success');
                            var response = JSON.parse(result);
                            $('form#checkout #product_html, form#order_update #product_html').html(response.html);
                        }
                    });
                });


            });
        </script>

        <script>
            $('.order_data').hide();
            $('.change_order_data').click(function () {

                $('.order_data').show();
            });

        </script>

        <script>

            $('#city').click(function () {
                var city = $(this).text();
                var charge = 0;
                if (city == 'Dhaka') {
                    var charge = 0;
                    $('#product_html .shipping_charge_in_dhaka').each(function () {
                        charge += Number($(this).val());
                    });
                    var quantity_list = $('#quantity_list').val();

                    charge = charge * quantity_list;
                    if (quantity_list > 2) {
                        charge = 0
                    }
                    $('#delivery_cost').text(charge);
                    $('input[name=shipping_charge]').val(charge);


                } else {
                    $('#product_html .shipping_charge_out_of_dhaka').each(function () {
                        charge += Number($('.shipping_charge_out_of_dhaka').val());

                    });


                    var quantity_list = $('#quantity_list').val();
                    charge = charge * quantity_list;
                    if (quantity_list > 2) {
                        charge = 0
                    }
                    $('#delivery_cost').text(charge);
                    var subtotal_cost = $('#subtotal_cost').text();
                    $('input[name=shipping_charge]').val(charge);
                    var total = parseInt(charge) + parseInt(subtotal_cost);
                    $('#total_cost').text(total);
                    $('input[name=order_total]').val(total);


                }

            });
        </script>


        <script>

            document.forms['order_update'].elements['payment_type'].value = "<?php echo $order->payment_type;?>";


        </script>
