<?php
// Social Fas

?>
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