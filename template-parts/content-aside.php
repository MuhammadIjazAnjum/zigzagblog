<?php
// conternt gallery 

?>
<div   class="<?php echo $class_left_right ;?>"  >
    <?php if (has_post_thumbnail($post)):?>
      <div class="col-md-12 col-lg-6 no_pad_">
        <a href="<?php echo esc_url( get_permalink() );?>" class="animateIt thumb_grid_post animateIt ae-1 imIn " style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url( $post )); ?>)">
        </a>
      </div>
    <?php else: ?>
      <div class="col-md-12 col-lg-6 no_pad_"><a href="<?php echo esc_url( get_permalink() );?>" class="animateIt thumb_grid_post animateIt ae-1 imIn " style="background-image: url(<?php echo esc_url(get_template_directory_uri()) ; ?>/img/banner4.jpg)"></a></div>
    <?php endif;?>
      <div class="post_caption animateIt col-md-12 col-lg-6 ae-2 imIn ">
        <div class="author-time-date mb-3 pb-1 ae-2 clearfix ae-1">
          <?php 
            echo '<p class="text-gray-dark"> '.esc_html(the_category(', ','')).'</p>';
          ?>
          <ul class="field_meta">
            <li><a href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_comments_number());?> <?php esc_html_e('Comments','zigzagblog');?></a></li>
            <li><a href="<?php echo esc_url( get_permalink() );?>"><?php echo the_date(get_option('date_format'));?></a></li>
          </ul>
        </div>
          <?php
            the_title( '<h4 class="text-uppercase font-weight-bold mb-4 ae-3 ae-2"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
          ?>
            <p class="post_desc ae-4 ae-3">
              <?php
                /* translators: %s: Name of current post */
                $content=sprintf( __( ' <a href="%s" class="post-more-btn ae-5 ae-4"> read more</a>', 'zigzagblog' ), esc_url( get_permalink() )  );
                the_content($content  );
              ?>
            </p>
            <!-- <a href="" class="post-more-btn ae-5 ae-4">read more</a> -->
      </div>  <!-- end of col-md-12  -->
  </div> <!-- end of grid_post_full caption_left --> 