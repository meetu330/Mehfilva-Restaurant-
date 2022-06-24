<?php /* Template Name: Menu page */ ?>
 
<?php get_header(); ?>

<section class="banner-section inner-page-banner">
	 <?php if(get_field( "slider_image" )){?>
		<?php /*<img src="<?php echo get_field("slider_image")['url'];?>" alt=""> */ ?>
		<div class="banner-img cover-bg" style="background-image:url(<?php echo get_field("slider_image")['url'];?>)">
          <div class="container">
          <div class="row">
          <div class="col-sm-12">
		    <div class="banner-caption">
		        <!--<h2><?php //the_title(); ?></h2>-->
		         
		    </div>
		    </div>
		    </div>
		  </div>  
		</div>
		<?php } ?>
	 
	<div class="banner-content">
		<div class="container">
			<div class="group-button">
			    <?php 
$link = get_field('slider_buttons1');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link = get_field('slider_buttons2');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link = get_field('slider_buttons3');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
	  			<!--<a href="#" class="btn white-outline-btn">Sunday Brunch</a>
	  			<a href="#" class="btn white-outline-btn">Happy Hour</a> -->
	  		</div>
		</div>
	</div>
</section>

<section class="menu-tabs-section">
    
<div class="container">
<div class="row">
<div class="col-sm-12">
    <?php if( have_rows('tabs_section_repeater') ):?>
<ul class="tabs">
     <?php $i=1;
     while( have_rows('tabs_section_repeater') ) : the_row();?>
  <li class="<?php if($i==1){?>active<?php }?>" rel="tab<?php echo $i;?>"><?php echo get_sub_field('tabs_section_title');?></li>
  <?php $i++; endwhile;?>
</ul>
<?php endif;?>
 <?php if( have_rows('tabs_section_repeater') ):?>
<div class="tab_container">
     <?php $j=1;
     while( have_rows('tabs_section_repeater') ) : the_row();?>
  <!-- #tab1 -->
  <h3 class="d_active tab_drawer_heading" rel="tab<?php echo $j;?>"><?php echo get_sub_field('tabs_section_title');?></h3>
  <div id="tab<?php echo $j;?>" class="tab_content">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="item-img cover-bg" style="background-image:url( <?php echo get_sub_field('tabs_section_image')['url'];?>)">
                <img src="<?php echo get_template_directory_uri()?>/images/placeholder.jpg" alt="">
            </div> 
        </div>
        <div class="col-sm-12 col-lg-6">
             <div class="item-list">
                <h2><?php echo get_sub_field('tabs_section_title');?></h2>
                <?php echo get_sub_field('tabs_section_description');?>
            </div>
        </div>
    </div>
  </div>
   <?php $j++; endwhile;?>
</div>
<?php endif;?>
<!-- .tab_container -->
</div>
</div>        
</div>        
    
    
    
</section>



<?php get_footer(); ?>