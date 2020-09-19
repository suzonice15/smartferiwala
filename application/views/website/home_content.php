 <div class="xs-banner banner-fullwidth-version-2 suzon_slider_class"
>
    <div class="container container-fullwidth">
        <div class="row">
            <div class="xs-banner-slider-6 owl-carousel col-lg-12 col-md-12 col-sm-12">
                <?php

               
                if ($sliders):
                    foreach ($sliders as $slider):
                        ?>
                        <a href="<?php echo $slider->target_url; ?>">
                            <div class="xs-banner-item row">

                                <img   
                                     src="<?php echo base_url();
                                     echo $slider->homeslider_banner; ?>">

                            </div>
                        </a>

                    <?php endforeach; endif; ?>


            </div>

        </div>
    </div>
</div>

<!-- offer banner section -->
<div class="xs-section-padding-bottom suzon_add_class col-md-12 col-lg-12">
    <div class="container container-fullwidth">
        <div class="row">
            <?php
            

            if (isset($adds)) {
                foreach ($adds as $add) {
                    $picture = base_url() . $add->media_path;
                    ?>

                    <div class="col-md-4 col-12" style="margin-bottom: -24px;">
                        <div class="xs-banner-campaign">
                            <a  style="z-index:10000" href="<?= $add->adds_link ?>">
                                <img src="<?= $picture ?>
" alt="Add Section">
                            </a>
                        </div><!-- .xs-banner-campaign END -->
                    </div>

                <?php }
            } ?>


        </div><!-- .row END -->
    </div><!-- .container .container-fullwidth END -->
</div><!-- End offer banner section -->

 
 
  
  


 

<span id="dynamic_content"></span>

<span class="top_product"></span>


<span class="home_cat_content"></span>

<script type="text/javascript">
    
    
    $.ajax({
        url:"<?php echo base_url()?>home/top_category",
        type:"get",
        catch:true,
        success:function(data){
            $('#dynamic_content').empty();
            $('.top_product').html(data);
        }
    });
    
       $.ajax({
        url:"<?php echo base_url()?>ajax/home_cat_content",
        type:"get",
        catch:true,
        success:function(data){
             $('.home_cat_content').html(data);
        }
    });
</script>


<script>
  //$(document).ready(function(){

    jQuery('#dynamic_content').html(make_skeleton());
 
    function make_skeleton()
    {
         var width = $(window).width();

         
         var count=2;
if(width <500){
     count=6;
}  else if(width > 500 && width <990){
    count =3;
}   else {
    
    count=2;
}
        
      var output = '<div class="ph-item">';
      for(var i = 0; i < 18; i++)
      {
       
   output  +='<div class="ph-col-'+count+'">';
    output  +=' <div class="ph-picture"></div>';
    output  +=' <div class="ph-row">';
      output  +=' <div class="ph-col-12"></div>';
      output  +=' <div class="ph-col-12"></div>';
      output  +=' <div class="ph-col-4"></div>';
      output  +=' <div class="ph-col-4 empty"></div>';
       output  +='<div class="ph-col-4"></div>';
    output  +=' </div>';
   output  +='</div>';
   
      }
       output  +=' </div>';
      return output;
    }
 // });
 
 </script>


