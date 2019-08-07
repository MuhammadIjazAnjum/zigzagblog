(function($) {

  function zigzagblog_display_control(setting) {
    // Update in real time...
    wp.customize(setting, function(value) {
      value.bind(function( zigzagblogVal ) {

        console.log( zigzagblogVal );
        // Control on footer text.
        if ( 'zigzagblog_settings_social_area' == setting && false == zigzagblogVal ) {

          $('#customize-control-zigzagblog_settings_twitter_checkbox').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_settings_twitter_text').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_facebook_checkbox').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_facebook_text').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_linkedin_checkbox').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_linkedin_text').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_googleplus_checkbox').fadeOut().css( 'display', 'none' );
          $('#customize-control-zigzagblog_googleplus_text').fadeOut().css( 'display', 'none' );

        } else if ('zigzagblog_settings_social_area' == setting && true == zigzagblogVal ) {

          $('#customize-control-zigzagblog_settings_twitter_checkbox').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_settings_twitter_text').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_facebook_checkbox').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_facebook_text').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_linkedin_checkbox').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_linkedin_text').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_googleplus_checkbox').fadeIn().css( 'display', 'list-item' );
          $('#customize-control-zigzagblog_googleplus_text').fadeIn().css( 'display', 'list-item' );

        }

        if ( 'zigzagblog_settings_twitter' == setting && false == zigzagblogVal ) {
          $('#customize-control-zigzagblog_settings_twitter_text').fadeOut().css( 'display', 'none' );
        } else if ('zigzagblog_settings_twitter' == setting && true == zigzagblogVal ) {
          $('#customize-control-zigzagblog_settings_twitter_text').fadeIn().css( 'display', 'list-item' );
        }

        if ( 'zigzagblog_settings_facebook' == setting && false == zigzagblogVal ) {
          $('#customize-control-zigzagblog_facebook_text').fadeOut().css( 'display', 'none' );
        } else if ('zigzagblog_settings_facebook' == setting && true == zigzagblogVal ) {
          $('#customize-control-zigzagblog_facebook_text').fadeIn().css( 'display', 'list-item' );
        }

        if ( 'zigzagblog_settings_linkedin' == setting && false == zigzagblogVal ) {
          $('#customize-control-zigzagblog_linkedin_text').fadeOut().css( 'display', 'none' );
        } else if ('zigzagblog_settings_linkedin' == setting && true == zigzagblogVal ) {
          $('#customize-control-zigzagblog_linkedin_text').fadeIn().css( 'display', 'list-item' );
        }

        if ( 'zigzagblog_settings_googleplus' == setting && false == zigzagblogVal ) {
          $('#customize-control-zigzagblog_googleplus_text').fadeOut().css( 'display', 'none' );
        } else if ('zigzagblog_settings_googleplus' == setting && true == zigzagblogVal ) {
          $('#customize-control-zigzagblog_googleplus_text').fadeIn().css( 'display', 'list-item' );
        }


      });
    });
  }

  zigzagblog_display_control( 'zigzagblog_settings_social_area' );
  zigzagblog_display_control( 'zigzagblog_settings_twitter' );
  zigzagblog_display_control( 'zigzagblog_settings_facebook' );
  zigzagblog_display_control( 'zigzagblog_settings_linkedin' );
  zigzagblog_display_control( 'zigzagblog_settings_googleplus' );

} )(jQuery);
