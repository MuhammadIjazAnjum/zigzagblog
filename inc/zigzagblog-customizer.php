<?php
//zigzagblog Customizer
 function zigzagblog_customizer($wp_customize){
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.site-title a',
        'render_callback' => get_bloginfo( 'name' ),
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description a',
        'render_callback' => get_bloginfo( 'description' ),
    ) );

    // Slides 
    $wp_customize->add_section('zigzagblog_slideshow',array(
        'title'         => __('Slides','zigzagblog'),
        'description'   => sprintf(__('Recommended size 1024 X 439 for slides','zigzagblog')),
        'priority'      => 20,
    ));

    // Showcase Image1
    $wp_customize->add_setting('zigzagblog_slideshow_img1',
        array(
        'default'           =>   esc_url( get_template_directory_uri() ) .'/img/banner4.jpg',
        'sanitize_callback' => 'absint',
    ));
    // image control
    $wp_customize->add_control( new  WP_Customize_Image_Control( $wp_customize,'zigzagblog_slideshow_img1' ,array(
        'label'         => __('Slide Show Image 1','zigzagblog'),
        'section'       => 'zigzagblog_slideshow',
        // 'settings'      => 'zigzagblog_slideshow_img1',
        'priority'      =>1,

    )));
    // Showcase Image 2
    $wp_customize->add_setting('zigzagblog_slideshow_img2',array(
        'default'       =>    esc_url( get_template_directory_uri() ) .'/img/banner2.jpg',
        'sanitize_callback' => 'absint',
    ));
    //image control
    $wp_customize->add_control( new Wp_Customize_Image_Control( $wp_customize,'zigzagblog_slideshow_img2' ,array(
        'label'         => __('Slide Show Image 2','zigzagblog'),
        'section'       => 'zigzagblog_slideshow',
        'settings'      => 'zigzagblog_slideshow_img2',
        'priority'      =>1,
    )));
    // Showcase Image 3
    $wp_customize->add_setting('zigzagblog_slideshow_img3',array(
        'default'       =>    esc_url( get_template_directory_uri() ) .'/img/banner3.jpg',
        'sanitize_callback' => 'absint',
    ));
    //image control
    $wp_customize->add_control( new Wp_Customize_Image_Control( $wp_customize,'zigzagblog_slideshow_img3' ,array(
        'label'         => __('Slide Show Image 3','zigzagblog'),
        'section'       => 'zigzagblog_slideshow',
        'settings'      => 'zigzagblog_slideshow_img3',
        'priority'      =>1,
    )));
    
    // Social Sections
    $wp_customize->add_section('zigzagblog_social',array(
        'title'         => __('Social','zigzagblog'),
        'description'   => sprintf('Socail Media','zigzagblog'),
         'priority'      =>30,
    ));
    
    // Twitter 
    $wp_customize->add_setting('zigzagblog_twitter_url',array(
        'default'               => __('https://www.twitter.com','zigzagblog'),
        'sanitize_callback'     =>'esc_url_raw',
    ));
    // Twitter  control
    $wp_customize->add_control('zigzagblog_twitter_url',array(
        'label'         => __('Twitter (https://www.twitter.com)','zigzagblog'),
        'section'       => 'zigzagblog_social',
        'priority'      =>1,
    ));
    
    // Facebook 
    $wp_customize->add_setting('zigzagblog_facebook_url',array(
        'default'       => __('https://www.facebook.com','zigzagblog'),
        'sanitize_callback'     =>'esc_url_raw',
    ));
    // Facebook control
    $wp_customize->add_control('zigzagblog_facebook_url',array(
        'label'         => __('Facebook (https://www.facebook.com)','zigzagblog'),
        'section'       => 'zigzagblog_social',
        'priority'      =>2,
    ));

    // LinkedIn 
    $wp_customize->add_setting('zigzagblog_linkedin_url',array(
        'default'       => __('https://www.linkedin.com','zigzagblog'),
        'sanitize_callback'     =>'esc_url_raw',
    ));
    // LinnkedIn control
    $wp_customize->add_control('zigzagblog_linkedin_url',array(
        'label'         => __('LinkedIn (https://www.linkedin.com)','zigzagblog'),
        'section'       => 'zigzagblog_social',
        'priority'      =>3,
    ));

    // Google+ 
    $wp_customize->add_setting('zigzagblog_googleplus_url',array(
        'default'       => __('https://aboutme.google.com/','zigzagblog'),
        'sanitize_callback'     =>'esc_url_raw',
    ));
    // Google+  control
    $wp_customize->add_control('zigzagblog_googleplus_url',array(
        'label'         => __('Google+ (https://www.aboutme.google.com)','zigzagblog'),
        'section'       => 'zigzagblog_social',
        'priority'      =>4,
    ));

    // Author Customization 
    $wp_customize->add_section('zigzagblog_author',array(
        'title'         => __('Author','zigzagblog'),
        'sanitize_callback'=>'sanitize_text_field',
        'priority'      => 40,
    ));
    // Author Heading setting
    $wp_customize->add_setting('zigzagblog_author_heading',array(
        'default'       => __('About Author','zigzagblog'),
        'sanitize_callback'=>'sanitize_text_field',
    ));
    //Author Heading Control
    $wp_customize->add_control('zigzagblog_author_heading',array(
        'label'         => __('Author Heading','zigzagblog'),
        'section'       => 'zigzagblog_author',
        'settings'      => 'zigzagblog_author_heading',
        'priority'      =>110,
    ));

    // Author Image
    $wp_customize->add_setting('zigzagblog_author_img',array(
        'default'       => esc_url(get_template_directory_uri()).'/img/author.jpg',
        'sanitize_callback'=>'absint',
    ));
    //Author Image control
    
    $wp_customize->add_control( new Wp_Customize_Image_Control( $wp_customize,'zigzagblog_author_img' ,array(
        'label'         => __('Author Image','zigzagblog'),
        'section'       => 'zigzagblog_author',
        'settings'      => 'zigzagblog_author_img',
        'priority'      =>130,
    )));

    // Author Text setting
    $wp_customize->add_setting('author_text_setting',array(
        'default'       =>__('zigzagblog Text','zigzagblog'),
        'sanitize_callback'=>'sanitize_text_field',
    ));
    // Author Text Control
    $wp_customize->add_control('author_text_setting',array(
        'label'         => __('Text','zigzagblog'),
        'section'       => 'zigzagblog_author',
        'type'          => 'text',
        'priority'      =>160,
    ));
    
    // Author Descripton setting
    $wp_customize->add_setting('author_desc_setting',array(
        'default'       =>__('zigzagblog Text','zigzagblog'),
        'sanitize_callback'=>'sanitize_text_field',
    ));
    // Author Text Control
    $wp_customize->add_control('author_desc_setting',array(
        'label'         => __('Description','zigzagblog'),
        'section'       => 'zigzagblog_author',
        'type'          => 'text',
        'priority'      =>190,
    ));
}//end of zigzagblog_customizer

add_action('customize_register','zigzagblog_customizer');

function zigzagblog_customize_preview_js() {
    
    wp_enqueue_script( 'zigzagblog-customize-preview', get_theme_file_uri( '/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
 add_action( 'customize_preview_init', 'zigzagblog_customize_preview_js' );
 
// /**************************************
// End of customizer
// ***************************************/
    
                
