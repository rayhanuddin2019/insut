<?php 

  // scroll
  CSF::createSection( quomodo_market_option_KEY, array(
    'title'  => esc_html__( 'Scroll Top Button', 'quomodo-market' ),
    'icon'   => 'fa fa-arrow-up',
    'fields' => array(
        array(
            'id'      => 'enable_scroll_top',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Scroll Top', 'quomodo-market' ),
            'desc'    => esc_html__( 'If you want to enable or disable scroll to top button you can set ( YES / NO )', 'quomodo-market' ),
            'default' => true,
        ),
      
    ),
    
) ); 