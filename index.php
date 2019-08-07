<?php
/**************************
 INDEX
***************************/
?>
<?php get_header();?>



<div class="zigzag-posts_2 py-5 ">
  <div class="container" >
  <?php 
    $i=0;
    if(have_posts()):
      while (have_posts()): the_post();
        $i++;
        if($i % 2 !=0){
          $class_left_right='grid_post_full caption_left  d-lg-flex ';
        }else{
          $class_left_right='grid_post_full caption_left flex-md-row-reverse d-lg-flex';
        }
  
  
  if(has_post_format('aside')):
    require get_template_directory().'/template-parts/content-aside.php';
  elseif(has_post_format('gallery')):
    require get_template_directory().'/template-parts/content-gallery.php';
  else:
    require get_template_directory().'/template-parts/content.php';
  endif;
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