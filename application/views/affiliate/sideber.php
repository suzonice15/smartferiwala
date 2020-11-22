<div class="col-lg-3 col-md-3 col-sm-12 col-12">
    <?php
    $user_id=$this->session->userdata('user_id');

    if(isset($user_id)){
    ?>
    <div class="list-group">
          <a style="z-index: 100;background-color:#C3232A;color:white;font-size:15px" href="<?php echo base_url() ?>affiliate/edit"
           class="list-group-item list-group-item-action">Update Profile
        </a>
          <a style="z-index: 100;background-color:#C3232A;color:white;font-size:15px"  href="<?php echo base_url() ?>affiliate/order_list"
           class="list-group-item list-group-item-action">Order History</a>
              <a style="z-index: 100;background-color:#C3232A;color:white;font-size:15px" href="<?php echo base_url() ?>affiliate" class="list-group-item list-group-item-action">Make Money with us</a>
      
         
        <a  style="z-index: 100;background-color:#C3232A;color:white;font-size:15px" href="<?php echo base_url() ?>affiliate/change_password" class="list-group-item list-group-item-action">Changed Password</a>
      
     
        <a   style="z-index: 100;background-color:#C3232A;color:white;font-size:15px"  href="<?php echo base_url() ?>Affiliate/logOut"
           class="list-group-item list-group-item-action mobile_sign_out">Sign
            Out</a>
    </div>

    <?php } ?>

</div>
