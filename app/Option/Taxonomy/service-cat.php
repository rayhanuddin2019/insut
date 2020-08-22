<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $cat_prefix = 'quomodo_market_service_cat_options';
  
    //
    // Create taxonomy options
    CSF::createTaxonomyOptions( $cat_prefix, array(
      'taxonomy'  => 'service-cat',
      'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
    ) );
  
    //
    // Create a section
    CSF::createSection( $cat_prefix, array(
      'fields' => array(
  
        array(
          'id'      => 'image_icon',
          'type'    => 'icon',
          'title'   => esc_html__( 'Icon', 'quomodo-market' ),
          'desc'    => esc_html__( 'Set the Thumb icon ', 'quomodo-market' ),
          
        ),
  
      )
    ) );
  
  }
  