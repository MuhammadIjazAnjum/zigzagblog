<?php
/**************************
footer.php
***************************/
?>
<?php if (is_home()):  ?>
<div class="home-post-section pt-sm-5 pb-5">
      <p class="more-btn text-uppercase" style="width:280px;"><?php posts_nav_link('&#8734;', __( 'Show latest', 'zigzagblog' ),__( 'Show More', 'zigzagblog' )); ?></p>
      
</div>
<?php endif; ?>
<div class=" d-flex social_btn animateIt ">
  <div class="col-md-12  text-center py-5 ">
    <?php if(get_theme_mod('zigzagblog_twitter_url','https://www.twitter.com') != ''):?>
    <a href="<?php echo esc_attr(get_theme_mod('zigzagblog_twitter_url')) ;?>"><i class="fa fa-twitter" aria-hidden="true"></i> <?php  esc_html_e('Twitter','zigzagblog'); ?></a>
    <?php endif;?>
    <?php if(get_theme_mod('zigzagblog_facebook_url','https://www.facebook.com') != ''):?>
    <a href="<?php echo esc_attr(get_theme_mod('zigzagblog_facebook_url') );?>"><i class="fa fa-facebook" aria-hidden="true"></i> <?php esc_html_e('Facebook','zigzagblog');?></a>
    <?php endif;?>
    <?php if(get_theme_mod('zigzagblog_linkedin_url','https://www.linkedin.com') != ''):?>
    <a href="<?php echo esc_attr(get_theme_mod('zigzagblog_linkedin_url') );?>"><i class="fa fa-linkedin" aria-hidden="true"></i> <?php esc_html_e('linkedinnn','zigzagblog');?></a>
    <?php endif;?>
    <?php if(get_theme_mod('zigzagblog_googleplus_url','https://www.aboutme.google.com') != ''):?>
    <a href="<?php echo esc_attr(get_theme_mod('zigzagblog_googleplus_url')) ;?>"><i class="fa fa-google-plus" aria-hidden="true"></i> <?php esc_html_e('google+','zigzagblog');?></a>
    <?php endif;?>
  </div>
</div>


<div class="d-flex footer_top">
  <div class="container">

    <div class="d-lg-flex justify-content-between">

      <!-- Author -->
      <div class="col-md-12 col-lg-4 author_">
        <h3 class="text-uppercase text-center"><?php echo esc_html(get_theme_mod('zigzagblog_author_heading')); ?></h3>
          <div class="col-md-12 text-center">
            <img src="<?php echo esc_attr(get_theme_mod('zigzagblog_author_img')); ?>" class="rounded-circle">
            <h2><a href="#"><?php echo esc_html(get_theme_mod('author_text_setting')); ?></a></h2>
            <p><?php echo esc_html(get_theme_mod('author_desc_setting')); ?></p>
            <ul class="footer_social mb-0 text-md-center">
                              <?php if(get_theme_mod('zigzagblog_twitter_url','https://www.twitter.com') != ''):?>
              <li><a href="<?php echo esc_url(get_theme_mod('zigzagblog_twitter_url')) ;?>" class="fa fa-twitter"></a></li>
              <?php endif;?>
              <?php if(get_theme_mod('zigzagblog_facebook_url','https://www.facebook.com') != ''):?>
              <li><a href="<?php echo esc_url(get_theme_mod('zigzagblog_facebook_input')) ;?>" class="fa fa-facebook"></a></li>
              <?php endif;?>
              <?php if(get_theme_mod('zigzagblog_linkedin_url','https://www.linkedin.com') != ''):?>
              <li><a href="<?php echo esc_attr(get_theme_mod('zigzagblog_linkedin_url') );?>" class="fa fa-linkedin"></a></li>
              <?php endif;?>
              <?php if(get_theme_mod('zigzagblog_googleplus_url','https://www.aboutme.google.com') != ''):?>
              <li><a href="<?php echo esc_attr(get_theme_mod('zigzagblog_googleplus_url')) ;?>"class="fa fa-google-plus"></a></li>
          <?php endif;?>
            </ul>
          </div>
      </div>
      <!-- end of author div -->
      <!-- instagram -->
      <div class="col-md-8 col-lg-4 insta_ ">
        <?php get_sidebar('footer'); ?>
      </div>
      <!-- end of instagram div -->

    </div>

  </div>
</div>
</main>
<footer class="wpb_footer wpb_footer3">
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
        <div class="footer_logo">
          <p style="color:#f2f2f2;">
            <?php 
              echo sprintf( __( 'Copyright %1$s %2$s %3$s All Rights Reserved : ', 'zigzagblog' ), '&#169;', date("Y"), '&#183;' ). '<a href="'. esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) )  . '</a> Theme by Bitwali';
            ?>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
        <ul class="footer_social mb-0 text-md-center">
          <?php if(get_theme_mod('zigzagblog_twitter_url','https://www.twitter.com') != ''):?>
          <li><a href="<?php echo esc_url(get_theme_mod('zigzagblog_twitter_url')) ;?>" class="fa fa-twitter"></a></li>
          <?php endif;?>
          <?php if(get_theme_mod('zigzagblog_facebook_url','https://www.facebook.com') != ''):?>
          <li><a href="<?php echo esc_url(get_theme_mod('zigzagblog_facebook_input')) ;?>" class="fa fa-facebook"></a></li>
          <?php endif;?>
          <?php if(get_theme_mod('zigzagblog_linkedin_url','https://www.linkedin.com') != ''):?>
          <li><a href="<?php echo esc_attr(get_theme_mod('zigzagblog_linkedin_url') );?>" class="fa fa-linkedin"></a></li>
          <?php endif;?>
          <?php if(get_theme_mod('zigzagblog_googleplus_url','https://www.aboutme.google.com') != ''):?>
          <li><a href="<?php echo esc_attr(get_theme_mod('zigzagblog_googleplus_url')) ;?>"class="fa fa-google-plus"></a></li>
          <?php endif;?>

          
          
        </ul>
      </div>
      <div class="col-lg-4 col-md-6  mt-md-0 subscribe_footer">
        <a href="#" class="back_to_top"><?php esc_html_e('BACK TO TOP','zigzagblog');?></a>
      </div>
    </div>
  </div>
</footer>
<div class="overlay_menu"></div> <!--  .overlay_menu -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<div class="svg-shapes">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="115" height="36" viewBox="0 0 115 36">
    <defs>
      <style>
      .cls-1 {
        fill: #fff;
        filter: url(#color-overlay-1);
        fill-rule: evenodd;
      }
      </style>

      <filter id="color-overlay-1" filterUnits="userSpaceOnUse">
        <feFlood/>
        <feComposite operator="in" in2="SourceGraphic"/>
        <feBlend in2="SourceGraphic" result="solidFill"/>
      </filter>
    </defs>
    <clipPath id="clipping">
      <path d="M10.000,-0.001 L105.000,-0.001 L115.000,18.678 L105.000,35.999 L10.000,35.999 L-0.000,18.537 L10.000,-0.001 Z" class="cls-1"/>
    </clipPath>
    <clipPath id="clipping-right">
      <path d="M-0.000,-0.000 L115.000,-0.000 L125.000,18.678 L115.000,35.999 L-0.000,35.999 L-0.000,18.537 L-0.000,-0.000 Z" class="cls-1"/>
    </clipPath>
    <clipPath id="clipping-left">
      <path d="M125.000,-0.000 L10.000,-0.000 L0.000,18.678 L10.000,35.999 L125.000,35.999 L125.000,18.537 L125.000,-0.000 Z" class="cls-1"/>
    </clipPath>
  </svg>
</div> <!--  .svg-shapes -->
<?php wp_footer(); ?>
</body>
</html>
