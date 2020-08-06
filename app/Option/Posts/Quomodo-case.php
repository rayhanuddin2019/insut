<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $post_prefix = 'insut_case_options';
  
    //
    // Create a metabox for post
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'quomodo-case',
    ) );
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'General', 'insut'),
      'fields' => array(
         
        array(
            'id'         => 'case_client_name',
            'type'       => 'text',
            'title'      => esc_html__( 'Client Name', 'insut' ),
            'desc'       => esc_html__( 'Set Client Name', 'insut' ),
        ),

        array(
          'id'         => 'case_duration',
          'type'       => 'text',
          'title'      => esc_html__( 'Case Duration', 'insut' ),
          'desc'       => esc_html__( 'Set Case Duration', 'insut' ),
      ),
         
      )
    ) );
    //
   
  
  
  }
  