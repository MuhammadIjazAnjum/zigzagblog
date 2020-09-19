<?php
//Socail Links
?>

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