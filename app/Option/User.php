<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $quomodo_market_profile_options = 'quomodo_market_profile_options';

    //
    // Create profile options
    CSF::createProfileOptions( $quomodo_market_profile_options, array(
      'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
    ) );

    //
    
  

}
