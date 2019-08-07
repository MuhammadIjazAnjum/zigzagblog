<?php
/**************************
 Template Name: Search Page
***************************/
?>
<?php get_header();?>



<div class="zigzag-posts_2 py-5 ">
  <div class="container" >
  <?php 
    if(have_posts()):
      global $left;$left=-1;
        while (have_posts()): the_post();
          get_template_part( 'template-parts/content', get_post_format() );
        endwhile;
        $left=-1;
    else:
      get_template_part( 'template-parts/content', 'none' );
  endif;
  ?>
  </div>
  <!-- end of container div -->
</div>
<!-- end of zigzag-posts_2 div -->
<?php get_footer();?>