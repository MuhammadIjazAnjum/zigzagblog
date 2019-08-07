<?php
/**************************
 Template Front Page
***************************/
?>
<?php get_header();?>



<div class="zigzag-posts_2 py-5 ">
  <div class="container" >
  <?php 
    $i=0;

        $i=0;
        $post_qry=New WP_Query(array(
            'posts_per_page'=> 3,
            'tax_query'     =>array(
                array(
                    'taxonomy'  =>'post_format',
                    'fields'    =>'slug',
                    'operator'  =>'NOT IN',
                    'terms'     =>array( 'post-format-aside','post-format-gallery'),

                ),
            ),
        ));
    
    if($post_qry->have_posts()):
      while ($post_qry->have_posts()): $post_qry->the_post();
        $i++;
        if($i % 2 !=0){
          $class_left_right='grid_post_full caption_left  d-lg-flex ';
        }else{
          $class_left_right='grid_post_full caption_left flex-md-row-reverse d-lg-flex';
        }
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
  <?php
    endwhile;
    else:
      get_template_part( 'template-parts/content', 'none' );
    endif;
  ?>
  </div>
  <!-- end of container div -->
</div>
<!-- end of zigzag-posts_2 div -->
<?php get_footer();?>