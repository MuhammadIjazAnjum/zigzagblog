<?php
/**************************
 Template Name: Search Page
***************************/
?>
<?php get_header();?>

<div class="zigzag-posts_2 py-5 ">
  <div class="container" >
    <div class="row">
      <div class="col-md-8">
        <h1>
          <?php esc_html_e( 'Search results for: ', 'zigzagblog' ); ?>
          <span ><?php echo get_search_query(); ?></span>
          
        </h1>
      </div>
      <div class="col-md-4">
            <?php get_search_form(); ?>
        </div>
      
    </div>
  <?php 
    $i=0;
    if(have_posts()):
      while (have_posts()): the_post();
        $i++;
        if($i % 2 !=0){
          $post_orientation='grid_post_full caption_left  d-lg-flex ';
        }else{
          $post_orientation='grid_post_full caption_left flex-md-row-reverse d-lg-flex';
        }
        set_query_var( 'post_orientation',  $post_orientation );
        include get_template_directory().'/template-parts/content.php';
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