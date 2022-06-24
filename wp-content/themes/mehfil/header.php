<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mehfil
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203684178-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-203684178-1');
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-191244683-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

 

<!--   gtag('config', 'UA-191244683-1');
</script> -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site"> 

	<header id="masthead" class="site-header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					    <?php if(get_field('time_section_text', 'option')){?>
						<div class="order-time">
							<i class="fa fa-clock-o" aria-hidden="true"></i> <span><?php echo get_field('time_section_text', 'option');?> </span>
						</div>
						<?php }?>
						<?php if(get_field('phone_number', 'option')){?>
						<div class="order-time">
							<i class="fa fa-phone" aria-hidden="true"></i> <span><?php echo get_field('phone_number', 'option');?></span>
						</div>
						<?php }?>
					</div>
					<div class="col-md-6">
						<div class="social-media">
							<ul>
							    <?php 
$link = get_field('location_link', 'option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
   <li> <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa fa-location-arrow" aria-hidden="true"></i></a></li>
<?php endif; ?>
							   
<?php 
$link = get_field('facebook_link', 'option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
   <li> <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<?php endif; ?>
<?php 
$link = get_field('instagram_link', 'option');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
   <li> <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<?php endif; ?>

<!--Start for whatsapp-->

   <li> <a class="button" href="https://wa.me/+15712929890" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

<!--End for whatsapp-->


							<!--	<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$mehfil_description = get_bloginfo( 'description', 'display' );
							if ( $mehfil_description || is_customize_preview() ) :
								?>
							
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="hambuger-menu">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<nav id="site-navigation" class="main-navigation"> 
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- .site-branding -->

		<!-- #site-navigation -->
	</header><!-- #masthead -->
