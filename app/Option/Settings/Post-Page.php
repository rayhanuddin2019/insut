<?php 
 

 // Post Page
CSF::createSection( INSUT_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'insut' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'insut' ),
        ),

        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable post tags you can set ( YES / NO )', 'insut' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'insut' ),
            'default' => false
        ),

        array(
          'type'    => 'subheading',
          'content' => esc_html__( '404 Error Page Setting', 'insut' ),
        ),
       
      
        array(
            'id'         => 'error_text',
            'type'       => 'text',
            'title'      => esc_html__( '404 Error Page Text', 'insut' ),
            'desc'       => esc_html__( 'Set your 404 error title.', 'insut' ),
            'default'    => esc_html__( 'Oops! That page can&rsquo;t be found.', 'insut' )
        ),

        array(
            'id'      => 'enable_404_search_button',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable 404 Search Button', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page button you can set ( YES / NO )', 'insut' ),
            'default' => true,
        ),

        array(
            'id'      => 'enable_404_footer',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable 404 footer', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'insut' ),
            'default' => true,
        ),
        array(
            'id'      => 'error_enable_main_container',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Container', 'insut' ),
            'desc'    => esc_html__( 'If you want to enable or disable 404 page footer you can set ( YES / NO )', 'insut' ),
            'default' => false,
        ),
    ),
) );