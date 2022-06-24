<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mehfil
 */

?>

	<footer id="colophon">
		<div class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-info">
					<div class="footer-logo">
						<a href="<?php echo site_url();?>">
						    
							<img src="<?php echo get_field('footer_logo', 'option')['url'];?>" alt="">
						</a>
					</div>
					<p><?php echo get_field('footer_content', 'option');?></p>
					<div class="social-media">
						<ul>
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
						</ul>
					</div> 
				</div>
				<div class="col-lg-5 footer-working-hour">
					<h4><?php echo get_field('working_hours_title', 'option');?></h4>
					<?php echo get_field('working_hours_description', 'option');?>
					
				</div>
				<div class="col-lg-3 footer-find-us">
					<h4><?php echo get_field('where_to_find_us', 'option');?></h4>
					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>  <?php echo get_field('where_to_find_us_address', 'option');?> <span>(Inside the best western)</span> </li>
						<li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:571-292-9890"><?php echo get_field('where_to_find_us_phone_number', 'option');?></a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo get_field('where_to_find_us_email', 'option');?>"><?php echo get_field('where_to_find_us_email', 'option');?></a> </li>
					</ul>  
				</div>
				<!-- <div class="col-lg-3 footer-contact">
					<h4>Contact Us</h4>
					<?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]'); ?>
				</div> -->
			</div>
		</div>
	</div>
	<div class="bottom-footer">
		<div class="container">
			Copyright © <?php echo date("Y"); ?> <a href="<?php echo site_url();?>">Mehfil Restaurant and Banquet</a>. All Rights Reserved.
		</div>
	</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
