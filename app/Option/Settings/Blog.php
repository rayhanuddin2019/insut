<?php 

    // Blog a top-tab
    CSF::createSection( quomodo_market_option_KEY, array(
        'id'    => 'blog_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Blog', 'quomodo-market' ),
        'icon'     => 'fa fa-book',
    ) ); 
    // Blog
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General', 'quomodo-market' ),
        'fields' => array(
          
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Blog Sidebar', 'quomodo-market'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    '1' => esc_html__('No sidebar', 'quomodo-market'),
                    '2' => esc_html__('Left Sidebar', 'quomodo-market'),
                    '3' => esc_html__('Right Sidebar', 'quomodo-market'),
                ),
                'default'     => '3'
              ),

           
            array(
                'id'      => 'blog_grid',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Glog Grid Layout', 'quomodo-market' ),
                'default' => false
            ), 
            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'quomodo-market' ),
                'default' => false
            ), 
            
            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'quomodo-market' ),
                'default' => false
            ), 

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'quomodo-market' ),
                'default' => true
            ), 
            
            array(
                'id'      => 'blog_views',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Views', 'quomodo-market' ),
                'default' => false
            ),
            
            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_category_single',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category Single', 'quomodo-market' ),
                'default' => false
            ),
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'quomodo-market' ),
                'default' => true
            ), 
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'quomodo-market' ),
                'default' => esc_html__( 'Read More', 'quomodo-market' ),
            ),
          
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'quomodo-market' ),
                'default' => true
            ),

            array(
            'id'          => 'blog_post_nav_alignment',
            'type'        => 'select',
            'title'   => esc_html__( 'Navigation Alignment', 'quomodo-market' ),
            'placeholder' => 'Select an option',
            'options'     => array(
                'text-left'   => esc_html__( 'Left', 'quomodo-market' ),
                'text-center' => esc_html__( 'Center', 'quomodo-market' ),
                'text-right'  => esc_html__( 'Right', 'quomodo-market' ),
            ),
            'default'     => 'text-center'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'quomodo-market' ),
            ),
            
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'quomodo-market' ),
                'default' => '30',
            ),
       

        )
    ) ); 
     // fav icon
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'blog_tab', // The slug id of the parent section  
        'title'  => esc_html__('Sidebar Style','quomodo-market'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'id'      => 'blog-sidebar_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Sidebar Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.blog-sidebar .widget'
            ),
           
            array(
                    'id'      => 'blog-sidebar_padding_top',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Sidebar Padding Top', 'quomodo-market' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
            ),
            array(
                    'id'      => 'blog-sidebar_padding_bottom',
                    'type'    => 'slider',
                    'title'   => esc_html__( 'Sidebar Padding Bottom', 'quomodo-market' ),
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                    'unit'    => 'px',
                    
            ),
        

         
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Text & Link Color', 'quomodo-market' ),
            ),
            array(
                'id'      => 'blog-sidebar_widget_title_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget Title Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set Sideabr widget title color form here.', 'quomodo-market' ),
                'output' => '.blog-sidebar .widget .widget-title'
            ),
            array(
                'id'      => 'blog-sidebar_widget_content_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Widget content Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set footer widget content color form here.', 'quomodo-market' ),
                'output' => '.blog-sidebar select , .blog-sidebar .tagcloud a,.blog-sidebar ul li a.rsswidget,.blog-sidebar .widget,.blog-sidebar ul li a,.blog-sidebar .widget ul li a.url'
            ),
            array(
                'id'     => 'sidebar_border_color',
                'type'   => 'border',
                'title'  => esc_html__( 'Border Color', 'quomodo-market' ),
                'output' => '.blog-sidebar ul li'
            ),
            array(
                'id'      => 'sidebar_widget_title_margin_top',
                'type'    => 'slider',
                'title'   => esc_html__( 'Widget Title Margin Top', 'quomodo-market' ),
                'min'     => 0,
                'max'     => 200,
                'step'    => 1,
                'unit'    => 'px',
                
          ),
            array(
                'id'      => 'sidebar_widget_title_margin_bottom',
                'type'    => 'slider',
                'title'   => esc_html__( 'Widget Title Margin bottom', 'quomodo-market' ),
                'min'     => 0,
                'max'     => 200,
                'step'    => 1,
                'unit'    => 'px',
                
          ),
       
            array(
                'id'      => 'sidebars_link_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Sideber links color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the Sidebar area link color', 'quomodo-market' ),
                'output' => '.blog-sidebar .single-blog-post a .blog-sidebar .tagcloud a, .blog-sidebar .widget a, .blog-sidebar .widget ul li a.url,.blog-sidebar .widget ul li a.rsswidget'
            ),

            array(
                'id'      => 'sidebar_link_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Sidebar links Hover color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the footer area link hover color', 'quomodo-market' ),
                'output' => '.blog-sidebar .single-blog-post a:hover, .blog-sidebar .tagcloud a:hover,.blog-sidebar .widget a:hover, .blog-sidebar .widget ul li a.url:hover,.blog-sidebar .widget ul li a.rsswidget:hover'
            ),

        )
    ) );