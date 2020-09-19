<?php
/*
  page.php 
*/
?>
<?php get_header();?>
  <?php while(have_posts()):the_post(); ?>
  <div class="zigzag-posts_2 py-5">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container" >
      <div class="row page">
        <div class="col-md-9 text-center m-auto" >
        <?php //if (has_post_thumbnail($post)):?>
          <img src="<?php //echo esc_url(get_the_post_thumbnail_url( $post )); ?>" class="w-100">
            <?php //else: ?>
              <img src="<?php //echo esc_url(get_template_directory_uri()); ?>/img/banner4.jpg" class="w-100">
            <?php //endif;?>
          <div class="author-time-date  my-3 pb-1 ae-2 clearfix ae-1">
          <?php 
           // echo '<p class="text-gray-dark"> '.esc_html(the_category(', ','')).'</p>';
                // Get Tags for posts.
           // echo '<p class="text-gray-dark"> '.esc_html(the_tags(', ','')).'</p>';
          ?>
            <ul class="field_meta">
              <li><a href="<?php //esc_url( get_permalink() );?>"><?php // echo esc_html(get_comments_number());?> <?php //esc_html_e('Comments','zigzagblog');?></a></li>
              <li><a href=<?php // esc_url( get_permalink() );?>><?php // echo get_the_date(get_option('date_format'));?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 m-auto post_section_" >
          <?php 
            the_title('<h2 class="my-3 text-uppercase">','</h2>');
            echo esc_html(the_content(  __( ' <p ></p>', 'zigzagblog' )))  ;
          ?>
          <ul class="social_commands mb-5">
            <li><a href="" class="fa fa-comment"> <?php esc_html_e('comments','zigzagblog')?></a></li>
            <li><a href=""><?php esc_html_e('Share','zigzagblog');?></a>
              <a href="#/" class="fa fa-twitter"></a>
              <a href="#/" class="fa fa-facebook"></a>  
              <a href="#/" class="fa fa-instagram"></a>
            </li>
          </ul>
        </div>
        <!-- comment -->
        <?php
        // if ( comments_open(  )  ) :
        //   comments_template();
        // endif;
        //  paginate_comments_links();
        ?>
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <!-- end of comment -->
      </div>
      <?php wp_link_pages();?>
    </div>
  </div>
  <?php endwhile;?>
  <!-- footer -->
  <?php get_footer();?>
