<?php
namespace QuomodoMarket\Setup;

/**
 * Enqueue.
 */
class Enqueue 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_enqueue_scripts',  array( $this, 'admin_enqueue_scripts' )  );
	    
	}
   
    public function admin_enqueue_scripts(){
		
		wp_enqueue_script('quomodo-market-admin', QUOMODO_MARKET_JS . '/admin.js', array('jquery'), QUOMODO_MARKET_VERSION, true);
		$quomodo_market_data = [
			
			'widget_update' => esc_html__( 'Already updated', 'quomodo-market' )
	    ];
	   
	   wp_localize_script( 'quomodo-market-admin', 'quomodo_market_obj', $quomodo_market_data);
	}
	public function enqueue_scripts() 
	{
		

    	// stylesheets
		// ::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			// wp_enqueue_style() $handle, $src, $deps, $version

			// 3rd party css
			wp_enqueue_style( 'quomodo-market-fonts', quomodo_market_google_fonts_url(['DM Sans:400,400i;500,500i,700,700i']), null, QUOMODO_MARKET_VERSION );		
			wp_enqueue_style( 'fontawesome', QUOMODO_MARKET_CSS . '/font-awesome.min.css', null, QUOMODO_MARKET_VERSION );
		    wp_enqueue_style( 'bootstrap', QUOMODO_MARKET_CSS . '/bootstrap.min.css', null, QUOMODO_MARKET_VERSION );
			wp_enqueue_style( 'animate', QUOMODO_MARKET_CSS . '/animate.min.css', null, QUOMODO_MARKET_VERSION );
			wp_enqueue_style( 'magnific-popup', QUOMODO_MARKET_CSS . '/magnific-popup.css', null, QUOMODO_MARKET_VERSION );
		
			wp_enqueue_style( 'slick', QUOMODO_MARKET_CSS . '/slick.css', null, QUOMODO_MARKET_VERSION );
		
			// theme css
			wp_enqueue_style( 'quomodo-market-default', QUOMODO_MARKET_CSS . '/default.css', null, QUOMODO_MARKET_VERSION );
			wp_enqueue_style( 'quomodo-market-woocommerce', QUOMODO_MARKET_CSS . '/woocommerce.css', null, QUOMODO_MARKET_VERSION );
			wp_enqueue_style( 'quomodo-market-blog', QUOMODO_MARKET_CSS . '/blog.css', null, QUOMODO_MARKET_VERSION );
			wp_enqueue_style( 'quomodo-market-theme', QUOMODO_MARKET_CSS . '/style.css', null, QUOMODO_MARKET_VERSION );
			
			

		}

		// javascripts
		// :::::::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			
			// 3rd party scripts
	
			
			wp_enqueue_script( 'bootstrap', QUOMODO_MARKET_JS . '/bootstrap.min.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'popper', QUOMODO_MARKET_JS . '/popper.min.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'modernizr', QUOMODO_MARKET_JS . '/vendor/modernizr-3.6.0.min.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'wow', QUOMODO_MARKET_JS . '/wow.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'slick', QUOMODO_MARKET_JS . '/slick.min.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'goodshare', QUOMODO_MARKET_JS . '/goodshare.min.js', array( 'jquery' ), QUOMODO_MARKET_VERSION, true );
			
			// theme scripts
			wp_enqueue_script( 'quomodo-market-skip-link-focus-fix', QUOMODO_MARKET_JS . '/skip-link-focus-fix.js', array( ), QUOMODO_MARKET_VERSION, true );
			wp_enqueue_script( 'quomodo-market-main', QUOMODO_MARKET_JS . '/main.js', array( 'jquery','bootstrap','slick','wow','goodshare','modernizr','quomodo-market-skip-link-focus-fix' ), QUOMODO_MARKET_VERSION, true );
		
			$quomodo_market_data = [
				 'ajax_url' => admin_url( 'admin-ajax.php' ),
				 'loadmore_text' => esc_html__( 'Loading More Posts...', 'quomodo-market' )
			];
			
			wp_localize_script( 'quomodo-market-main', 'quomodo_market_obj', $quomodo_market_data);
			// Load WordPress Comment js
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    	wp_enqueue_script( 'comment-reply' );
			}

		}
    }
}
