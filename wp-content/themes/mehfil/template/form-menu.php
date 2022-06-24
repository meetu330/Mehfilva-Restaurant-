<?php /* Template Name: Form Menu page */ ?>
 
<?php get_header(); ?>

<section class="menu-tabs-section">
    
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php 
echo get_field('main_content');?>  

</div>
</div>        
</div>        
    
    
    
</section>
<section id="menu-section" class="menu-section">
	
	    <?php /* if(get_field( "catering_main_title" )){?>
							<h2><?php echo get_field('catering_main_title');?></h2>
						<?php } */ ?>
		
		<div class="menu-section-top">
		    <div class="container">
		        <div class="row">
		            <div class="col-sm-12 col-md-6">
		               <img src="<?php echo get_template_directory_uri()?>/images/message.png" alt="Private Parties"> 
		               <h2>Order on Message</h2>
		               <p>Now you can order through text messages. We Got You Back !! Just type <strong>"ORDER"</strong> and you will get online ordering link instantly.</p>
		            </div>
		            <div class="col-sm-12 col-md-6">
		               <img src="<?php echo get_template_directory_uri()?>/images/location-pin.png" alt="Contact Us"> 
		               <h2>Contact us</h2>
		               <p>Let us know in advance, we will take care of you. Contact us at <strong>(571) 292 9890</strong> to discuss your catering needs.</p>
		            </div>
		            <div class="col-sm-12">
		                <a class="btn download-btn" href="http://mehfilva.com/wp-content/themes/mehfil/images/Mehfil_Big_Page_Flyer.pdf" target="_blank">Download our menu</a> 	
		            </div>
		        </div>
		    </div>
		</div>
		<?php /*<div class="container">
		<div class="menu-list">
			<div class="menu-item row">
			
                <div class="col-sm-12">
                   <div class="row catering-menu-block">
                       <div class="col-md-6">
                           <img src="<?php echo get_template_directory_uri()?>/images/roastd-menu-banner.jpg" alt="">
                       </div>
					<div class="col-md-6">
                    <h3><img src="<?php echo get_template_directory_uri()?>/images/catering-icon.png" alt=""> Our Menu</h3>
					    <ul>
					        <li>On the other hand</li>
					        <li>At vero eos et accusamus</li>
					        <li>Lorem ipsum dolor sit amet</li>
					        <li>Contrary to popular belief</li>
					        <li>Lorem Ipsum has been the standard</li>
					    </ul>
					    
					     <a class="btn" href="https://justcodenow.com/layout/mehfil_wp/wp-content/themes/mehfil/images/Mehfil_Big_Page_Flyer.pdf" target="_blank">Download our menu</a> 				
					</div>
				 
                    
                </div>
                </div>
                
			</div>
		</div>
	</div> */ ?>
</section>



<?php get_footer(); ?>