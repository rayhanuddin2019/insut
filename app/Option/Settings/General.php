<?php 

CSF::createSection( quomodo_market_option_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General','quomodo-market'),
        'fields' => array(

            array(
                'id'      => 'general_text_logo',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Text Logo', 'quomodo-market' ),
                'default' => false
            ), 

            array(
                'id'         => 'general_blog_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Blog Title', 'quomodo-market' ),
                'desc'       => esc_html__( 'Set global blog title', 'quomodo-market' ),
                'default'    => esc_html__( 'Blog', 'quomodo-market' ),
                'dependency' => array( 'general_text_logo', '==', 'true' )
            ),

          

            array(
                'id'         => 'general_breadcrumb_limit',
                'type'       => 'number',
                'title'      => esc_html__( 'Breadcrumb limit', 'quomodo-market' ),
                'desc'       => esc_html__( 'Set the breadcrumb text limit', 'quomodo-market' ),
                'default'    => '',
               
                
            ),


        )
    ) ); 