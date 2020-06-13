<?php
/**************************
 Archive Template
***************************/
?>
<?php get_header();?>
<div class="zigzag-posts_2 py-5 ">
  <div class="container" >
    <h1 class="page-title"><?php if(is_category()){
          single_cat_title();
        }else if(is_author()){
          the_post();
          echo "Archived by ".get_the_author();
          rewind_posts();
        }else if (is_tag()) {
          single_tag_title();
        }else if (is_day()) {
          echo "Archived By Day ". get_the_date();
        }else if (is_month()) {
          echo "Archived By Month ". get_the_date('F Y');
        }else if (is_Year()) {
          echo "Archived By Year ". get_the_date('Y');
        }else{
          echo "Archives";
        } ?></h1>
  <?php 
    $i=0;
    while (have_posts()): the_post();
      $i++;
      if($i % 2 !=0){
        $class_left_right='grid_post_full caption_left  d-lg-flex ';
      }else{
        $class_left_right='grid_post_full caption_left flex-md-row-reverse d-lg-flex';
      }
        include get_template_directory().'/template-parts/content.php';
      endwhile;
  ?>
  </div>
  <!-- end of container div -->
</div>
<!-- end of zigzag-posts_2 div -->
<?php get_footer();?>