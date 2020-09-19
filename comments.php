<?php
/**
 * Template for displaying comments.
 *
 */
if ( post_password_required() ) {
  return;
}
?>
<?php if (have_comments()): ?>
<div class=" col-md-9 m-auto ">
  <?php  
      
  wp_list_comments(array(
    'callback'=> 'zigzagblog_comments_callback',
    'reverse_top_level' => true,
    )) ;
  ?>

</div>
<?php endif;?>
  <div class="container post_page_form my-5">
    <div class="pp_form_inner">
      <div class=" col-md-12">
        <div id="comments" class="comments-area">
          <div id="respond" class="comment-respond">
            <div class="row">
            <?php 
              $commenter      = wp_get_current_commenter();
              apply_filters('zigzagblog_comment_form',$commenter);
              ?>
            </div>
          </div><!-- #respond -->
        </div>
      </div>
    </div>
  </div>


