<?php 

   // backup option
   CSF::createSection( quomodo_market_option_KEY, array(
           
    'title'  => esc_html__( 'Style', 'quomodo-market' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'                    => 'body_bg_color',
            'type'                  => 'background',
            'title'                 => esc_html__( 'Body Background', 'quomodo-market' ),
            'desc'                  => esc_html__( 'Set the body background color', 'quomodo-market' ),
            'default'               => '',
            'background_image'      => true,
            'background_position'   => true,
            'background_repeat'     => true,
            'background_attachment' => true,
            'background_size'       => true,
            'output'                => 'body',
            
        ),
        
        array(
            'id'     => 'body_text_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Body Text Color', 'quomodo-market' ),
            'desc'   => esc_html__( 'Set footer widgetbody content color form here.', 'quomodo-market' ),
            'output' => ' body , .blog p , .blog-single p, .comment-content p, .qomodo-post-navigation span'
        ),
      

        array(
            'id'     => 'title_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Title Color', 'quomodo-market' ),
            'desc'   => esc_html__( 'Set blog title color form here.', 'quomodo-market' ),
            'output' => '.qomodo-post-navigation h3 , .blog .title, .content-area .title, .comment-title'
        ),

        array(
            'id'     => 'body_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Body Font', 'quomodo-market' ),
            'output' => 'body'
        ),

        array(
            'id'     => 'h1_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H1 Font', 'quomodo-market' ),
            'output' => 'h1'
        ),

        array(
            'id'     => 'h2_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H2 Font', 'quomodo-market' ),
            'output' => 'h2'
        ),

        array(
            'id'     => 'h3_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H3 Font', 'quomodo-market' ),
            'output' => 'h3'
        ),

        array(
            'id'     => 'h4_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H4 Font', 'quomodo-market' ),
            'output' => 'h4'
        ),
        array(
            'id'     => 'h5_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H5 Font', 'quomodo-market' ),
            'output' => 'h5'
        ),
        array(
            'id'     => 'h6_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H6 Font', 'quomodo-market' ),
            'output' => 'h6'
        ),
    ),
) );