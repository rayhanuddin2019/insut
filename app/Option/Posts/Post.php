<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'quomodo_market_post_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'post',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'quomodo-market'),
      'fields' => array(
            
        array(
          'id'      => 'image_icon',
          'type'    => 'icon',
          'title'   => esc_html__( 'Icon', 'quomodo-market' ),
          'desc'    => esc_html__( 'Set the Thumb icon ', 'quomodo-market' ),
        ),
 
         
      )
    ) );
    //
    // Header section
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Video', 'quomodo-market'),
      'fields' => array(
  
        array(
          'id'    => 'feature_video_id',
          'type'  => 'text',
          'title'  =>  esc_html__( 'Video Url', 'quomodo-market'),
          'desc'  =>  esc_html__( 'Provide Url here From Youtube', 'quomodo-market'),
        ),
  
      )
    ) );

    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Audio', 'quomodo-market'),
      'fields' => array(
  
            array(
              'id'    => 'feature_audio',
              'type'  => 'text',
              'title'  =>  esc_html__( 'Audio URL', 'quomodo-market'),
              'desc'  =>  esc_html__( 'Provide SoundCloud audio url', 'quomodo-market'),
            ),
  
      )
    ) );

  
  
  }
  