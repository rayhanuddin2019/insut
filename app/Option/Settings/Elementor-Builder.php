<?php 
$header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
// Elementor Header section
CSF::createSection( quomodo_market_option_KEY , array(
    'title'  => esc_html__('Elementor Header Footer','quomodo-market'),
    'icon'   => 'far fa-building',
    'fields' => array(

       // elementor header footer
        array(
          'id'    => 'builder_header_layout',
          'type'  => 'switcher',
          'title'      => esc_html__('Header Enable','quomodo-market'),
        ),  

        array(
          'id'         => 'builder_header_layout_style',
          'type'       => 'Select',
          'dependency' => array( 'builder_header_layout', '==', 'true' ),
          'title'      => esc_html__('Header','quomodo-market'),
          'options'    => quomodo_market_header_footer_templates('header'),
          'desc'       => esc_html__('Create Footer from','quomodo-market'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','quomodo-market').'</a>',
        ),

        array(
          'id'    => 'builder_footer_layout',
          'type'  => 'switcher',
          'title' => 'Footer Enable',
        ), 
        
        array(
          'id'         => 'builder_footer_layout_style',
          'type'       => 'Select',
          'title'      => esc_html__('Footer','quomodo-market'),
          'options'    => quomodo_market_header_footer_templates('footer'),
          'dependency' => array( 'builder_footer_layout', '==', 'true' ),
          'desc'       => esc_html__('Create Footer from','quomodo-market'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','quomodo-market').'</a>',
        ),

    )
    
  ) );