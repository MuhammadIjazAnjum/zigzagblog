<?php
// Comments Display Fuctions
function zigzagblog_comments_callback( $comment, $args, $depth)
     {
       // $GLOBALS['comment'] = $comment;
      
     	
   ?>
	<div class="row comment_1 " >
    <div class="user_pic col-md-2 mt-4 ">
       <?php echo get_avatar( $comment->comment_author_email ); ?>
    </div>
    <div class="col-md-10 mt-md-5 comment_class()">
      <p class="user_name mb-0"><?php echo esc_html($comment->comment_author);?></p>
        <p class="mb-3"><a class="" href="<?php esc_url( get_permalink() );?>"><?php echo esc_html(get_comment_date(get_option('date_format')));?> </a>
      </p>
      <p class="comment-content"><?php comment_text(); ?>  </p>
      <!-- <a href="#" class="reply_btn">REPLY</a> -->
    </div>
  </div>
    <?php
     }

     /*Comment Form Filter*/
    function zigzagblog_comment_form_callback($commenter){
      // $commenter      = wp_get_current_commenter();
      $req            = get_option( 'require_name_email' );
      $aria_req       = ( $req ? " aria-required='true'" : '' );
      $required_text  ='Required fields are marked*';
    
      $fields =  array(
        'author' => '<p class="comment-form-author col-md-12"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . 'maxlength="245" required="required" placeholder="Stanislav"/></p>',
        'email'  => '<p class="comment-form-email col-md-12"> <input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="E-mail * "/></p>',
        'url' =>
          '<p class="comment-form-url col-md-12"> <input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
          '" size="30" maxlength="200" placeholder="Web Site" /></p>',
        'comment_field' =>  '<p class="comment-form-comment"><label for="comment"> </label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Comment *" ></textarea></p>',
        'comment_notes_before'=> '<p class="comment-notes">' . __( 'Your email address will not be published.','zigzagblog' ) . ( $req ? $required_text : '' ) . '</p>',
      );
      $comment_args=array(
        'fields'                =>  $fields,
         'comment_field'         =>'',
        'comment_notes_before'  =>'',
        );
      comment_form($comment_args);
    }

add_filter('zigzagblog_comment_form','zigzagblog_comment_form_callback',10,1);