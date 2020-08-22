<?php
/*----------------------------------------------------
LOAD COMPOSER PSR - 4
-----------------------------------------------------*/
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ):
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME VERSION
-----------------------------------------------------*/
if ( site_url() === 'http://localhost/production' ) {
    define( 'QUOMODO_MARKET_VERSION', time() );
} else {
    define( 'QUOMODO_MARKET_VERSION', time() );
    //define('QUOMODO_MARKET_VERSION', wp_get_theme()->version); /* If it make it slow for loading please use manually like: 1.0.0 */
}



/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS URL
-----------------------------------------------------*/
define( 'QUOMODO_MARKET_THEME_URI', get_template_directory_uri() );
define( 'QUOMODO_MARKET_IMG', QUOMODO_MARKET_THEME_URI . '/assets/images' );
define( 'QUOMODO_MARKET_CSS', QUOMODO_MARKET_THEME_URI . '/assets/css' );
define( 'QUOMODO_MARKET_JS', QUOMODO_MARKET_THEME_URI . '/assets/js' );

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/
define( 'QUOMODO_MARKET_THEME_DIR', get_template_directory() );
define( 'QUOMODO_MARKET_IMG_DIR', QUOMODO_MARKET_THEME_DIR . '/assets/images' );
define( 'QUOMODO_MARKET_CSS_DIR', QUOMODO_MARKET_THEME_DIR . '/assets/css' );
define( 'QUOMODO_MARKET_JS_DIR', QUOMODO_MARKET_THEME_DIR . '/assets/js' );

// option prefix
define( 'quomodo_market_option_KEY', 'quomodo_market_settings' );
/*----------------------------------------------------
SET UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN
-----------------------------------------------------*/
if ( !isset( $content_width ) ) {
    $content_width = 800;
}
if ( class_exists( 'QuomodoMarket\\Init' ) ):
    QuomodoMarket\Init::register_services();
endif;

/*----------------------------------------------------
UTILITY
-----------------------------------------------------*/
require_once QUOMODO_MARKET_THEME_DIR . '/app/Utility/global.php';
require_once QUOMODO_MARKET_THEME_DIR . '/app/Utility/Helpers.php';
require_once QUOMODO_MARKET_THEME_DIR . '/app/Utility/template-tags.php';

/*----------------------------------------------------
option init
-----------------------------------------------------*/

require_once QUOMODO_MARKET_THEME_DIR . '/app/Option/Init.php';


/*----------------------------------------------------
AJAX LOAD MORE OPTIONS
-----------------------------------------------------*/
require_once QUOMODO_MARKET_THEME_DIR . '/app/Core/Hook/Ajax.php';


  

  

 
