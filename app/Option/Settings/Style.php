<?php 

   // backup option
   CSF::createSection( INSUT_OPTION_KEY, array(
           
    'title'  => esc_html__( 'Style', 'insut' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'                    => 'body_bg_color',
            'type'                  => 'background',
            'title'                 => esc_html__( 'Body Background', 'insut' ),
            'desc'                  => esc_html__( 'Set the body background color', 'insut' ),
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
            'title'  => esc_html__( 'Body Text Color', 'insut' ),
            'desc'   => esc_html__( 'Set footer widgetbody content color form here.', 'insut' ),
            'output' => 'body,.qomodo-post-navigation span,.qomodo-post-navigation i'
        ),
        array(
            'id'     => 'main_text_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Main Color', 'insut' ),
            'desc'   => esc_html__( 'Set main color form here.', 'insut' ),
            'output' => 'a.readmore__btn ,.blog .qomodo-post-body .meta i,a, .post-meta span i, .qomodo-entry-header .qomodo-entry-title a:hover'
        ),

        array(
            'id'     => 'title_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Title Color', 'insut' ),
            'desc'   => esc_html__( 'Set blog title color form here.', 'insut' ),
            'output' => '.qomodo-post-navigation h3 , .blog .qomodo-entry-header .qomodo-entry-title a, .inner__title h1'
        ),

        array(
            'id'     => 'body_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Body Font', 'insut' ),
            'output' => 'body'
        ),

        array(
            'id'     => 'h1_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H1 Font', 'insut' ),
            'output' => 'h1'
        ),

        array(
            'id'     => 'h2_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H2 Font', 'insut' ),
            'output' => 'h2'
        ),

        array(
            'id'     => 'h3_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H3 Font', 'insut' ),
            'output' => 'h3'
        ),

        array(
            'id'     => 'h4_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H4 Font', 'insut' ),
            'output' => 'h4'
        ),
        array(
            'id'     => 'h5_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H5 Font', 'insut' ),
            'output' => 'h5'
        ),
        array(
            'id'     => 'h6_font_typho',
            'type'   => 'typography',
            'title'  => esc_html__( 'Heading H6 Font', 'insut' ),
            'output' => 'h6'
        ),
    ),
) );