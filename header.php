<?php
/**************************
header index and footer index.php
***************************/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
 <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>	
  </head>

  <body class="animated " <?php body_classes(); ?> >
    <?php wp_body_open(); ?> 
    <header class="wpb_header header-3 " id="myHeader">
      
      <nav class="main-nav">
        <span class="menu_btn fa fa-align-justify"></span>
        <form method="get" class="search_form" action="<?php echo esc_url(get_home_url('/')) ?>">
          <div class="closebtn fa fa-times"></div>
          <input name="s" id="s" type="search" placeholder="type keyword.." value="<?php  echo get_search_query() ?>">
          <input type="submit" hidden="hidden">
        </form>
        <div class="container">
          <div class="row justify-content-md-center align-items-center">
            <div class="col-md-6 col-lg-3">
              <div class="col-md-12  wpb_logo text-center py-2">
              <?php
                if (!display_header_text()) {
                   if (has_custom_logo()) {
                      the_custom_logo();
                    }else{
                      echo '<a href="'.esc_url( home_url( '/' ) ).'"> <img src="'. esc_url(get_stylesheet_directory_uri()) . '/img/logo.png' .'"></a>';
                    }
                }else{
              ?>
                <div class="site-title"> 
                  <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <?php echo esc_html(get_bloginfo( 'name' )); ?>
                   
                  </a>
                </div>
                <p class="logo-detail"> 
                  <div class="site-description">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'description' ); ?>
                    </a>
                  </div>
                </p>
              <?php }  ?>
              </div>
            </div>
            <ul class="wpb_menu col-md-8">
            	<?php wp_nav_menu(
					array(
						'theme_location'=>'top-menu',
						'fallback_cb'=>false,
						)
				);?>
              
            </ul> <!--  .menu -->
            <!-- search -->
            <!-- end search  -->

              <div  class="wpb_search_btn col-md-1"><i class="fa fa-search"> </i>
              </div> <!--  .search-btn -->
              
          </div>
        </div>
      </nav>
    </header>

    	<main class="wpb_main">
      <?php //if(is_front_page()): ?>
      <div class="main_banner_slider " >

        <?php if (get_theme_mod('zigzagblog_slideshow_img1')!=''): ?>
        <div class="slide">
          <img src="<?php echo esc_url(get_theme_mod('zigzagblog_slideshow_img1')); ?>" alt="" class="img-fluid">
        </div>
        <?php endif;?>
        <?php if (get_theme_mod('zigzagblog_slideshow_img2')!=''): ?>
        <div class="slide">
          <img src="<?php  echo esc_url(get_theme_mod('zigzagblog_slideshow_img2')); ?>" alt="" class="img-fluid">
        </div>
        <?php endif;?>
        <?php if (get_theme_mod('zigzagblog_slideshow_img3')!=''): ?>
        <div class="slide">
          <img src="<?php  echo esc_url(get_theme_mod('zigzagblog_slideshow_img3')); ?>" alt="" class="img-fluid">
        </div>
        <?php endif;?>
      </div>
      <?php //endif;?>