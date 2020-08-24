<?php 
    // Blog
     // footer a top-tab
     CSF::createSection( quomodo_market_option_KEY, array(
        'id'    => 'banner_tab', // Set a unique slug-like ID
        'title'  => esc_html__( 'Banner', 'quomodo-market' ),
        'icon'     => 'fa fa-cog',
    ) );
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content Settings', 'quomodo-market' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'quomodo-market' ),
            ),
         
            array(
                'id'      => 'blog_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Banner', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'blog_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Breadcrumb', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'banner_blog_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog title', 'quomodo-market' ),
                
            ), 
            array(

                'id'      => 'banner_blog_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'quomodo-market' ),
                'output' => '.blog-banner .page-banner'
            ),

         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'quomodo-market' ),
            ),
            
            array(

                'id'      => 'page_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Banner Show ', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'page_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Page Breadcrumb', 'quomodo-market' ),
                'default' => true
            ),
            
            array(

                'id'      => 'banner_page_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Page Title', 'quomodo-market' ),
                'default' => ''
            ), 

            array(

                'id'      => 'banner_page_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'quomodo-market' ),
                'output' => '.page .page-banner'
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Shop Banner', 'quomodo-market' ),
            ),

            array(
                'id'      => 'shop_banner_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Shop Banner', 'quomodo-market' ),
                'default' => true
            ),
            
            array(
                'id'      => 'banner_shop_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Shop Title', 'quomodo-market' ),
                'default' => esc_html__( 'Shop', 'quomodo-market' )
            ),
            
            array(
                'id'      => 'banner_product_title',
                'type'    => 'text',
                'title'   => esc_html__( 'Product Title', 'quomodo-market' ),
                'default' => esc_html__( 'Products', 'quomodo-market' )
            ),
            array(
                'id'      => 'shop_show_breadcrumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Shop Breadcrumb', 'quomodo-market' ),
                'default' => true
            ),
            array(

                'id'      => 'banner_shop_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'quomodo-market' ),
                'output' => '.page .page-banner.shop'
            ),

       
        )
    ) ); 
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'banner_tab', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'quomodo-market' ),
        'fields' => array(
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog Banner', 'quomodo-market' ),
            ),

            array(
                'id'    => 'banner_blog_title_color',
                'type'  => 'color',
                'title' => esc_html__( 'Title Color', 'quomodo-market' ),
                'output' => '.blog-banner .banner-title'
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'quomodo-market' ),
                'output' => '.blog-banner .banner-content .bread-crumbs,.blog-banner .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_blog_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'quomodo-market' ),
                'output' => '.blog-banner .bread-crumbs i',
                'output_important' => true
            ),

         
            array(
                'id'    => 'banner_blog_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'quomodo-market' ),
            ),

            array(
                'id'    => 'banner_blog_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'quomodo-market' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Page Banner', 'quomodo-market' ),
            ),
       
            array(
                'id'     => 'banner_page_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Title Color', 'quomodo-market' ),
                'output' => '.banner-title'
            ),
            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'quomodo-market' ),
                'output' => ' .banner-content .bread-crumbs, .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_page_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'quomodo-market' ),
                'output' => '.page .banner-content .bread-crumbs i',
                'output_important' => true
            ),


            array(
                'id'    => 'banner_page_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'quomodo-market' ),
            ),

            array(
                'id'    => 'banner_page_image_opacity',
                'type'  => 'slider',
                'title' => esc_html__( 'Overlay Opacity', 'quomodo-market' ),
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1
            ),
            // service
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Service Banner', 'quomodo-market' ),
            ),
       
            array(
                'id'     => 'banner_service_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Service Title Color', 'quomodo-market' ),
                'output' => '.single-quomodo-service .banner-title'
            ),
            array(
                'id'     => 'banner_service_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Service Breadcrumb Color', 'quomodo-market' ),
                'output' => '.single-quomodo-service .banner-content .bread-crumbs, .single-quomodo-service .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_service_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'quomodo-market' ),
                'output' => '.single-quomodo-service .banner-content .bread-crumbs i',
                'output_important' => true
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Case Banner', 'quomodo-market' ),
            ),
       
            array(
                'id'     => 'banner_casee_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Case Title Color', 'quomodo-market' ),
                'output' => '.single-quomodo-case .banner-title'
            ),
            array(
                'id'     => 'banner_case_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Case Breadcrumb Color', 'quomodo-market' ),
                'output' => '.single-quomodo-case .banner-content .bread-crumbs, .single-quomodo-case .banner-content .bread-crumbs a',
                'output_important' => true
            ),

            array(
                'id'     => 'banner_case_breadcrumb_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Breadcrumb Icon Color', 'quomodo-market' ),
                'output' => '.single-quomodo-case .banner-content .bread-crumbs i',
                'output_important' => true
            ),

            
       
        )
    ) ); 