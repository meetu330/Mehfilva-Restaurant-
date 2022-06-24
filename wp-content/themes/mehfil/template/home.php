<?php /* Template Name: Home page */ ?>
 
<?php get_header(); ?>

<section class="banner-section">
	<div class="banner-img">
	    	<?php if(get_field( "slides" )){?>
		<img src="<?php echo get_field("slides")['url'];?>" alt="">
		<?php } ?>
	</div>
	<div class="banner-content">
		<div class="container">
			<div class="group-button">
			    <?php 
$link = get_field('banner_button1');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link = get_field('banner_button_2');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link = get_field('banner_button_3');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
	  			<!--<a href="#" class="btn white-outline-btn">Sunday Brunch</a>
	  			<a href="#" class="btn white-outline-btn">Happy Hour</a> -->
	  		</div>
		</div>
	</div>
</section>
<?php
// Check rows exists.
if( have_rows('gallery_images') ):?>
<section class="gallery-section">
    <?php // Loop through rows.
    while( have_rows('gallery_images') ) : the_row();?>
<div class="gallery-img">
    <?php if(get_sub_field( "gallery_image" )){?>
		<img src="<?php echo get_sub_field('gallery_image')['url'];?>" alt="">
		<?php } ?>
	</div>
        
        
<?php 
    // End loop.
    endwhile;?>
</section>
    <?php // Do something...
endif;?>

  <section id="banquet-hall" class="private-dining">
      <?php if(get_field("left_section_about_us_image")){?>
      <div class="private-dining-img">
  		<img src="<?php echo get_field("left_section_about_us_image")['url'];?>">
  	</div>
  	<?php }?>
  	<div class="private-dining-content banquet-hall">
	  		<div class="private-dining-desc">
	  		<?php if(get_field( "right_section_about_title" )){?>
	  		<h2>
	  		    
	  		    <?php if(get_field( "right_section_about_image" )){?>
	  		    <img src="<?php echo get_field( "right_section_about_image" )['url'];?>" alt="">
	  		    <?php }?><?php echo get_field( "right_section_about_title" );?></h2>
	  		    <?php }?>
  		 <?php if(get_field( "right_section_about_description" )){?>
	  		<?php echo get_field( "right_section_about_description" );?>
	  		 <?php }?> 
	  		<div class="group-button">
	  		    <?php 
$link = get_field('right_section_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn black-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
	  			<!--<a href="http://layout.justcodenow.com/mehfil_wp/banquet-hall/#inquire-section" class="btn black-btn">Book Now</a> -->
	  		</div> 
  		</div> 
  	</div>
  	
  </section>

<section class="reviews-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="img">
				    <?php if(get_field( "reviews_left_section_image" )){?>
					<img src="<?php echo get_field( "reviews_left_section_image" )['url'];?>" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="reviews-content">
					<div class="title">
					     <?php if(get_field( "review_right_section_small_image" )){?>
						<img src="<?php echo get_field( "review_right_section_small_image" )['url'];?>" alt="">
						<?php } ?>
						<?php if(get_field( "review_right_section_title" )){?>
						<h3><?php echo get_field( "review_right_section_title" );?></h3>
						<?php } ?>
					</div>
					<?php
// Check rows exists.
if( have_rows('review_right_review_items') ):?>
					<div class="reviews-slider">
					     <?php // Loop through rows.
    while( have_rows('review_right_review_items') ) : the_row();?>
						<div class="reviews-item">
						    <?php if(get_sub_field( "review_description" )){?>
							<?php echo get_sub_field('review_description');?>
							<?php } ?>
							<?php if(get_sub_field( "review_person_name" )){?>
							<h4><?php echo get_sub_field('review_person_name');?></h4>
							<?php } ?>
							<?php if(get_sub_field( "review_start" )){?>
							<div class="review-star">
								<span class="star_in" data-starnum="<?php echo get_sub_field('review_start');?>"><i></i></span>
							</div>
							<?php } ?>
						</div>
						<?php 
    // End loop.
    endwhile;?>
					
					</div>
					<?php // Do something...
endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
  
  <section class="delivery-catering">
  	<div class="delivery-block" style="background-image: url(<?php echo get_field( "after_review_background_image" )['url'];?>);">
  	<?php if(get_field( "left_section_title" )){?>
	  		<h2>
	  		    
	  		    	<?php if(get_field( "left_section_image" )){?>
	  		    <img src="<?php echo get_field( "left_section_image" )['url'];?>" alt="">
	  		    <?php }?><?php echo get_field( "left_section_title" );?></h2>
	  		    <?php }?>
  		 <?php if(get_field( "left_section_description" )){?>
	  		<?php echo get_field( "left_section_description" );?>
	  		 <?php }?>
  		 <div class="group-button">
  		     <?php 
$link = get_field('left_section_button1');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_html( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
 <?php 
$link = get_field('left_section_button_2');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_html( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
 <?php 
$link = get_field('left_section_button_3');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn white-outline-btn" href="<?php echo esc_html( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
  		<!--	<a href="#" class="btn white-outline-btn">Door Dash</a>
  			<a href="#" class="btn white-outline-btn">Uber eats</a>
  			<a href="#" class="btn white-outline-btn">Grubhub</a>-->
  		</div>
  	</div>
  	<div class="catering-block">
  	<?php if(get_field( "right_section_title" )){?>
	  		<h2>
	  		    
	  		    	<?php if(get_field( "right_section_image" )){?>
	  		    <img src="<?php echo get_field( "right_section_image" )['url'];?>" alt="">
	  		    <?php }?><?php echo get_field( "right_section_title" );?></h2>
	  		    <?php }?>
  		 <?php if(get_field( "right_section_description" )){?>
	  		<?php echo get_field( "right_section_description" );?>
	  		 <?php }?>
  		 <div class="group-button">
  		     
  		      <?php 
$link = get_field('right_section_button_1');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
  			<!--<a href="#" class="btn">Explore Catering Options</a>--> 
  		</div>
  	</div>

  </section>
  <section id="private-dining" class="private-dining">
  	<div class="private-dining-content">
	  		<div class="private-dining-desc">
	  		    
	  		    	<?php if(get_field("private_dining_left_title" )){?>
	  		<h2>
	  		    
	  		    	<?php if(get_field("private_dining_left_image")){?>
	  		    <img src="<?php echo get_field("private_dining_left_image")['url'];?>" alt="">
	  		    <?php }?><?php echo get_field("private_dining_left_title");?></h2>
	  		    <?php }?>
	  		    <?php if(get_field( "private_dining_description" )){?>
	  		<?php echo get_field( "private_dining_description" );?>
	  		 <?php }?> 

	  		 <!-- // three button commented on 2/12/2020 -->
<div>
 <?php 
// $link = get_field('private_dining_button_1');


// if( $link ): 
//     $link_url = $link['url'];
//     $link_title = $link['title'];
//     $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <!-- <a class="btn black-btn" href="<?php 
    // echo esc_url
    ( $link_url ); ?>" target="<?php 
    // echo esc_attr
    ( $link_target ); ?>"><?php 
    // echo esc_html
    ( $link_title ); ?></a> -->
<?php 
// endif; 
?>
<?php 
// $link = get_field('private_dining_button_2');
// if( $link ): 
    // $link_url = $link['url'];
    // $link_title = $link['title'];
    // $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <!-- <a class="btn black-btn" href="<?php 
    // echo esc_url
    ( $link_url ); ?>" target="<?php
     // echo esc_attr
     ( $link_target ); ?>"><?php 
     // echo esc_html( $link_title ); ?></a> -->
<?php 
// endif;
 ?>
<?php 
// $link = get_field('private_dining_button_3');
// if( $link ): 
    // $link_url = $link['url'];
    // $link_title = $link['title'];
    // $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <!-- <a class="btn black-btn" href="<?php 
    // echo esc_url
    ( $link_url ); ?>" target="<?php 
    // echo esc_attr
    ( $link_target ); ?>"><?php 
    // echo esc_html
    ( $link_title ); ?></a> -->
<!-- <?php
 // endif; 
 ?> -->
	  			<!--<a href="#" class="btn black-btn">Book a Table</a>
	  			<a href="#" class="btn black-btn">View Menu</a>
	  			<a href="#" class="btn black-btn">Get IT Delivered</a>-->
	  		<div class="row inquire-form d-flex justify-content-center">
			    <div class="col-sm-12">
			        <?php echo do_shortcode('[contact-form-7 id="214" title="Book a Table"]')?>
			    </div>
			</div>
</div> 

	<!-- // three button commented on 2/12/2020 END -->
  		</div> 
  	</div>
  	<?php if(get_field("private_dining_right_image")){?>
  	<div class="private-dining-img">
  		<img src="<?php echo get_field("private_dining_right_image")['url'];?>">
  	</div>
  	<?php }?>
  </section>				
  
<?php get_footer(); ?>