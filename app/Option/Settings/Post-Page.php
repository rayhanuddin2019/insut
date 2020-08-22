<?php 
 

 // Post Page
CSF::createSection( quomodo_market_option_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'quomodo-market' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'quomodo-market' ),
        ),

        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'quomodo-market' ),
            'desc'    => esc_html__( 'If you want to enable or disable post tags you can set ( YES / NO )', 'quomodo-market' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'quomodo-market' ),
            'default' => false
        ),

        
       
        array(
            'id'      => 'error_enable_main_container',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Container', 'quomodo-market' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'quomodo-market' ),
            'default' => false,
        ),

        array(
            'id'     => 'header_contact_info',
            'type'   => 'repeater',
            'title'   => esc_html__( 'Header Contact Info', 'quomodo-market' ),
            'fields' => array(
          
              array(
                'id'    => 'label',
                'type'  => 'text',
                'title'   => esc_html__( 'Label', 'quomodo-market' ),
              ),

              array(
                'id'    => 'content',
                'type'  => 'text',
                'title'   => esc_html__( 'Content', 'quomodo-market' ),
              ),

              array(
                'id'      => 'icon',
                'type'    => 'icon',
                'title'   => esc_html__( 'Icon', 'quomodo-market' ),
                'default' => 'fa fa-volume-control-phone'
              ),
          
            ),
            'default'   => array(
                array(
                  'label' => 'Head Office:',
                  'content' => '+00 823 468 739',
                ),
                array(
                  'label' => 'USA:',
                  'content' => '+00 823 468 739',
                ),
                array(
                    'label' => 'UK:',
                    'content' => '+00 823 468 739',
                  )
              )
          ),
          
    ),
) );