<?php
/*
  page.php 
*/
?>
<?php get_header();?>
  <?php while(have_posts()):the_post(); ?>
  <div class="zigzag-posts_2 py-5">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container" >
      <div class="row " style="padding:20px" >
        <?php if(is_active_sidebar('sidebar')) : ?>
        <div class="col-md-8 m-auto post_section_ text-justify" >
          <?php 
            the_title('<h2 class="my-3 text-uppercase ">','</h2>');
            echo esc_html(the_content(  __( ' <p ></p>', 'zigzagblog' )))  ;
          ?>
        </div>
        <div class="col-md-4" >
              <?php dynamic_sidebar('sidebar'); ?>
        </div>
        <?php else: ?>
          <div class="col-md-9 m-auto post_section_ text-justify" >
          <?php 
            the_title('<h2 class="my-3 text-uppercase ">','</h2>');
            echo esc_html(the_content(  __( ' <p ></p>', 'zigzagblog' )))  ;
          ?>
        </div>
      <?php endif;?>
      </div>
      <?php wp_link_pages();?>
    </div>
  </div>
  <?php endwhile;?>
  <!-- footer -->
  <?php get_footer();?>
