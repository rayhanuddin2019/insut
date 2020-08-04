<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_service_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'quomodo-service',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
         
        array(
          'id'    => 'excerpt',
          'type'  => 'wp_editor',
          'title' => esc_html__('Excerp','insut'),
          'tinymce'       => true,
          'quicktags'     => true,
          'media_buttons' => false,
          'height'        => '100px',
          'desc'    => esc_html__( ' You can use { some line } for highlighted text', 'insut' ),
        ),

        array(
            'id'      => 'title_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Title Icon', 'insut' ),
            'desc'    => esc_html__( 'Set the thumb icon ', 'insut' ),
        ),

        array(
            'id'         => 'service_type',
            'type'       => 'text',
            'title'      => esc_html__( 'Service Type', 'insut' ),
            'desc'       => esc_html__( 'Set service Type ', 'insut' ),
        ),

        array(
            'id'         => 'service_type_slug',
            'type'       => 'text',
            'title'      => esc_html__( 'Service Type Slug', 'insut' ),
            'desc'       => esc_html__( 'Set service Type slug ', 'insut' ),
        ),

        array(
            'id'      => 'service_menu_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Type Icon', 'insut' ),
            'desc'    => esc_html__( 'Set the service type icon ', 'insut' ),
        ),
         
      )
    ) );
    //
   
  
  
  }
  