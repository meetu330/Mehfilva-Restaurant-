<?php /* Template Name: Catering page */ ?>
 
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
	  			<!--<a href="#" class="btn white-outline-btn">Sunday Brunch</a>
	  			<a href="#" class="btn white-outline-btn">Happy Hour</a> -->
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
					<div class="reviews-content-desc">
						<?php if(get_field( "review_description" )){?>
							<?php echo get_field('review_description');?>
						<?php } ?>
						<?php 
							$link = get_field('reviews_button');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					</div> 
				</div>
			</div>
		</div>
	</div>
</section>

<section id="inquire-section" class="inquire-section" style="background-image: url(<?php echo get_field('inquire_about_catering_background_image')['url'];?>);"> 
	<div class="container">
		<div class="title">
			<img src="<?php echo get_field('inquire_about_catering_icon_image')['url'];?>" alt="">
			 <?php if(get_field( "inquire_about_catering_title" )){?>
							<h2><?php echo get_field('inquire_about_catering_title');?></h2>
						<?php } ?>
						<?php if(get_field( "inquire_about_catering_sub_title" )){?>
							<p><?php echo get_field('inquire_about_catering_sub_title');?></p>
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
			        <?php echo do_shortcode('[contact-form-7 id="189" title="Inquire About Catering"]')?>
			    </div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>