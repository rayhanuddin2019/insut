<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

 
    CSF::createOptions( quomodo_market_option_KEY , array(

        // framework title
        'framework_title'         => esc_html__('QuomodoMarket Theme','quomodo-market'),
        'framework_class'         => 'quomodo-market',
    
        // menu settings
        'menu_title'              => esc_html__( 'QuomodoMarket Theme','quomodo-market'),
        'menu_slug'               => 'insut-theme',
        'menu_type'               => 'menu',
        'menu_capability'         => 'manage_options',
        'menu_icon'               => null,
        'menu_position'           => 30,
        'menu_hidden'             => false,
       
        // menu extras
        'show_bar_menu'           => true,
        'show_sub_menu'           => true,
        'show_in_network'         => true,
        'show_in_customizer'      => false,
    
        'show_search'             => true,
        'show_reset_all'          => true,
        'show_reset_section'      => true,
        'show_footer'             => true,
        'show_all_options'        => true,
        'show_form_warning'       => true,
        'sticky_header'           => true,
        'save_defaults'           => true,
        'ajax_save'               => true,

      
        // footer
        'footer_credit'           => esc_html__('Credited by Quomodosoft','quomodo-market'),
        'transient_time'          => 0,
    
        // typography options
        'enqueue_webfont'         => true,
        'async_webfont'           => true,
    
        // others
        'output_css'              => true,
    
  
    
      ) );
    
  
    

 }  