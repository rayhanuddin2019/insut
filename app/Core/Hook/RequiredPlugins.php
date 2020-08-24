<?php
namespace QuomodoMarket\Core\Hook;
require_once( QUOMODO_MARKET_THEME_DIR . '/app/Plugins/class-tgm-plugin-activation.php');
/**
 * Tags.
 */
class RequiredPlugins
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
	
        add_action( 'tgmpa_register', [$this,'register_required_plugins'] );

	}

	public function register_required_plugins() {
        //required plugins
       
        $plugins	 = array(
           
            array(
                'name'		 => esc_html__( 'Elementor', 'quomodo-market' ),
                'slug'		 => 'elementor',
                'required'	 => true,
            ),
            array(
                'name'		 => esc_html__( 'Contact form 7', 'quomodo-market' ),
                'slug'		 => 'contact-form-7',
                'required'	 => true,
            ),
            array(
                'name'		 => esc_html__( 'Mailchimp', 'quomodo-market' ),
                'slug'		 => 'mailchimp-for-wp',
                'required'	 => true,
            ),
            array(
                'name'		 => esc_html__( 'Unyson', 'quomodo-market' ),
                'slug'		 => 'unyson',
                'required'	 => true,
            ),
            array(
                'name'		 => esc_html__( 'Classic editor', 'quomodo-market' ),
                'slug'		 => 'classic-editor',
                'required'	 => true,
                
            ),

            array(
                'name'		 => esc_html__( 'WooCommerce', 'quomodo-market' ),
                'slug'		 => 'woocommerce',
                'required'	 => true,
                
            ), 
            
            array(
                'name'		 => esc_html__( 'Dokan Lite', 'quomodo-market' ),
                'slug'		 => 'dokan-lite',
                'required'	 => true,
                
            ),
            
            // array(
            //     'name'		 => esc_html__( 'Dokan Pro', 'quomodo-market' ),
            //     'slug'		 => 'dokan-pro',
            //     'required'	 => true,
                
            // ),
           
            array(
                'name'		 => esc_html__( 'Quomodo Marketplace Essential ', 'quomodo-market' ),
                'slug'		 => 'quomodo-market-essential',
                'required'	 => true,
                'source'     => get_template_directory() . '/app/Plugins/archive/quomodo-market-essential.zip', // The plugin source.
            ),	
        );
    
    
        $config = array(
            'id'			 => 'quomodo-market', // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path'	 => '', // Default absolute path to bundled plugins.
            'menu'			 => 'insut-install-plugins', // Menu slug.
            'parent_slug'	 => 'themes.php', // Parent menu slug.
            'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'	 => true, // Show admin notices or not.
            'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
            'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic'	 => true, // Automatically activate plugins after installation or not.
            'message'		 => '', // Message to output right before the plugins table.
        );
    
        tgmpa( $plugins, $config );
    }

}

