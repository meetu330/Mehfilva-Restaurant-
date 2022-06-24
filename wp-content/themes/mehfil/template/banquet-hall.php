<?php /* Template Name: Banquet Hall page */ ?>
 
<?php get_header(); ?>

<section class="banner-section inner-page-banner cover-bg" style="background-image:url(<?php echo get_field("slides")['url'];?>)">
   <div class="container">
          <div class="row">
          <div class="col-sm-12">
		    <div class="banner-caption">
		        	<?php if(get_field( "slides_main_title" )){?>
						<h2><?php echo get_field( "slides_main_title" );?></h2>
						<?php } ?>
		        
		    </div>
		    </div>
		    </div>
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
                              
            </div>
        </div>
    </div>
</section>

<section class="banquet-hall-content">
<div class="private-dining">
     <div class="private-dining-img cover-bg" style="background-image:url(<?php echo get_field("banquet_hall_left_image")['url'];?>)">
  		<img src="<?php echo get_template_directory_uri()?>/images/placeholder-10x6.jpg" alt="">
 	</div>
  	<div class="private-dining-content banquet-hall">
	  		<div class="private-dining-desc">
	  		    <?php if(get_field( "banquet_hall_main_title" )){?>
						<h2><?php echo get_field( "banquet_hall_main_title" );?></h2>
						<?php } ?>
						<?php if(get_field( "banquet_hall_content" )){?>
						<?php echo get_field( "banquet_hall_content" );?>
						<?php } ?>
	  	
	  		<div class="group-button">
                   <?php /* <a class="btn btn-primary facebook-link" href="#"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.png" alt=""></a> */?>
                   <?php 
$link = get_field('banquet_hall_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn black-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                  <!-- <a class="btn black-btn" href="#inquire-section">Inquire Now</a>-->
	  		</div> 
  		</div> 
  	</div>
</div>
<div class="private-dining">
     <div class="private-dining-img cover-bg" style="background-image:url(<?php echo get_field("banquet_hall_section_2_right_image")['url'];?>)">
  		<img src="<?php echo get_template_directory_uri()?>/images/placeholder-10x6.jpg" alt="">
 	</div>
  	 
  	<div class="private-dining-content banquet-hall">
	  		<div class="private-dining-desc">
	  	<?php if(get_field( "banquet_hall_section_2_main_title" )){?>
						<h2><?php echo get_field( "banquet_hall_section_2_main_title" );?></h2>
						<?php } ?>
						<?php if(get_field( "banquet_hall_section_2_main_content" )){?>
						<?php echo get_field( "banquet_hall_section_2_main_content" );?>
						<?php } ?>
	  		<div class="group-button">
                   <?php /* <a class="btn btn-primary facebook-link" href="#"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.png" alt=""></a> */ ?>
                   <?php 
$link = get_field('banquet_hall_section_2_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn black-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
	  		</div> 
  		</div> 
  	</div>
</div>
<div class="private-dining">
     <div class="private-dining-img cover-bg" style="background-image:url(<?php echo get_field("banquet_hall_section_3_left_image")['url'];?>)">
  		<img src="<?php echo get_template_directory_uri()?>/images/placeholder-10x6.jpg" alt="">
 	</div>
  	 
  	<div class="private-dining-content banquet-hall">
	  		<div class="private-dining-desc">
	  	<?php if(get_field( "banquet_hall_section_3_main_title" )){?>
						<h2><?php echo get_field( "banquet_hall_section_3_main_title" );?></h2>
						<?php } ?>
						<?php if(get_field( "banquet_hall_section_3_content" )){?>
						<?php echo get_field( "banquet_hall_section_3_content" );?>
						<?php } ?>
	  		<div class="group-button">
                  <?php /* <a class="btn btn-primary facebook-link" href="#"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.png" alt=""></a> */ ?>
                   <?php 
$link = get_field('banquet_hall_section_3_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn black-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                   
	  		</div> 
  		</div> 
  	</div>
</div>
</section>  
<section class="reviews-section without-img">
	<div class="container">
		<div class="row">
			  
			<div class="col-lg-12">
				<div class="reviews-content">
					<div class="title">
					   <h3>Reviews</h3>
					</div>
 
					<div class="reviews-slider"> 
						<div class="reviews-item">
                         <p>I am writing a review after multiple visits to this restaurant. I got food to go for four people per visit. We each ordered a different dish every time, so I can comment on majority of the menu. I will explain to you what keeps me driving a 26 mile round trip to this new restaurant that opened during the pandemic--THE FOOD. Don't feel like cooking at home today? Go Here.</p>
                         <p>My entire family loves the food here! My father is very old school and does not ever eat out (courtesy of Grandma's cooking); even he gave this food thumbs up. The food is very flavorful! It is fresh! The spices are balanced! And the best of all-- the portions are generous! Whoever is in the kitchen definitely knows what they're doing.</p>
                         <p>I am definitely going to be a repeat customer here.</p>
                         <h4>Vikas Goyal</h4>
							<div class="review-star">
								<span class="star_in" data-starnum="<?php echo get_sub_field('review_start');?>"><i></i></span>
							</div>
							 
						</div>
						<div class="reviews-item">
                         <p>Fantastic food. The quality and taste of the food is some of the best I have tried. The reshmi chicken kabob and goat curry is excellent. The staff is friendly and the service was timely and great. I dined with my family and everyone enjoyed it. Everything we ordered was great, the reshmi chicken kabob and goat curry was especially fantastic.</p>
                          <h4>Raju Parikh</h4>
							<div class="review-star">
								<span class="star_in" data-starnum="<?php echo get_sub_field('review_start');?>"><i></i></span>
							</div>
							 
						</div>
						 
					
					</div>
					 
				</div>
			</div>
		</div>
	</div>
</section>
<section class="gallery-section">
    <div class="container">
       <div class="row">
           <div class="col-sm-12 section-title">
               <h2 class="title">Gallery</h2>
           </div>
       </div>
        <div class="row">
           
           <?php if( get_field('banquet_hall_gallery') ): ?>
    <?php while( the_repeater_field('banquet_hall_gallery') ): ?>
       <div class="col-md-4 col-sm-6">
                <a data-fancybox="gallery" href="<?php the_sub_field('gallery_image'); ?>" class="cover-bg" style="background-image:url(<?php the_sub_field('gallery_image'); ?>)"><img src="<?php echo get_template_directory_uri()?>/images/placeholder-10x8.jpg" alt=""></a>
            </div>
         
    <?php endwhile; ?>
 <?php endif; ?>
            
             
        </div>
    </div>
</section>
<section id="inquire-section" class="inquire-section" style="background-image: url(<?php echo get_field("inquire_section_background_image")['url'];?>);"> 
	<div class="container">
		<div class="title">
			<img src="<?php echo get_template_directory_uri(); ?>/images/review-icon.png" alt="">
				<?php if(get_field( "inquire_section_main_title" )){?>
						<h2><?php echo get_field( "inquire_section_main_title" );?></h2>
						<?php } ?>
						<?php if(get_field( "inquire_section_sub_title" )){?>
						<?php echo get_field( "inquire_section_sub_title" );?>
						<?php } ?>
		
		</div>
		<div class="inquire-info">
			<div class="row">
				<div class="col-md-6">
					<p>Phone: <a href="tel:<?php echo get_field('where_to_find_us_phone_number', 'option');?>"><?php echo get_field('where_to_find_us_phone_number', 'option');?></a></p>
				</div>
				<div class="col-md-6">
					<p>Email <a href="mailto:<?php echo get_field('where_to_find_us_email', 'option');?>"><?php echo get_field('where_to_find_us_email', 'option');?></a></p>
				</div>
			</div>
			<div class="row inquire-form d-flex justify-content-center">
			    <div class="col-md-8 col-lg-6">
			        <?php echo do_shortcode('[contact-form-7 id="204" title="Inquire About Banquet Hall"]')?>
			    </div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
