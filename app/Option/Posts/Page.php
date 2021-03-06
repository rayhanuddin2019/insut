<?php 


   $header_footer_url = admin_url( 'edit.php?post_type=qheader-footer' );
  // Control core classes for avoid errors
  if( class_exists( 'CSF' ) ) {

      //
      // Set a unique slug-like ID
      $post_prefix = 'quomodo_market_page_options';
    
      //
      // Create a metabox for post
      CSF::createMetabox( $post_prefix, array(
        'title'     => 'Settings',
        'post_type' => 'page',
      ) );
    
      // Banner section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Banner',
        'fields' => array(

          array(
              'id'      => 'banner_page_title',
              'type'    => 'text',
              'title'   => esc_html__( 'Page Banner', 'quomodo-market' ),
              
          ), 

        
          array(

            'id'      => 'banner_page_image',
            'type'    => 'background',
            'title'   => esc_html__( 'Upload Background', 'quomodo-market' ),
            'desc'    => esc_html__( 'Upload main Image width 1200px and height 400px.', 'quomodo-market' ),
            'output' => '.page .page-title'
          ),


            array(
                'id'    => 'banner_page_image_overlay',
                'type'  => 'color',
                'title' => esc_html__( 'Overlay Color', 'quomodo-market' ),
            ),

            array(
                'id'      => 'banner_page_image_opacity',
                'type'    => 'text',
                'title'   => esc_html__( 'Overlay Opacity', 'quomodo-market' ),
                'desc'    => esc_html__( 'Enter Fraction Value', 'quomodo-market' ),
            ),

            array(
              'id'     => 'banner_page_title_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Page Title Color', 'quomodo-market' ),
              'output' => '.page .page-title-content .title'
            ),

            array(
                'id'     => 'banner_page_breadcrumb_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Page Breadcrumb Color', 'quomodo-market' ),
                'output' => '.page .page-title-content nav ol li, .page-title-content .breadcrumb li a',
                'output_important' => true
            ),

          array(
              'id'     => 'banner_page_breadcrumb_icon_color',
              'type'   => 'color',
              'title'  => esc_html__( 'Breadcrumb Icon Color', 'quomodo-market' ),
              'output' => '.page .page-title-content .breadcrumb li i',
              'output_important' => true
          ),

    
        )
      ) );
    
      //
      // Header section
      CSF::createSection( $post_prefix, array(
        'title'  => 'Header',
        'fields' => array(

             array(
                'id'      => 'header_style_override',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Override Header', 'quomodo-market' ),
                'desc'    => esc_html__( 'If you want to override header style you can set ( YES / NO )', 'quomodo-market' ),
                'default' => false,
            ),
       
            array(
              'id'      => 'header_style',
              'type'    => 'image_select',
              'title'   => esc_html__( 'Header Style', 'quomodo-market' ),
              'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'quomodo-market' ),
              'options' => array(
                  'style1' => QUOMODO_MARKET_IMG. '/admin/header/header-1.png',
                  'style2' => QUOMODO_MARKET_IMG. '/admin/header/header-2.png',
                  'style3' => QUOMODO_MARKET_IMG. '/admin/header/header-3.png',
              ),
              'default' => 'style1',
              'dependency' => array( 'header_style_override', '==', 'true' ),
            ),

        

        )
      ) );

   

       // Elementor Header section
       CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Elementor Header Footer','quomodo-market'),
        'fields' => array(
    
           // elementor header footer
          array(
            'id'      => 'builder_header_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Header','quomodo-market'),
            'options' => quomodo_market_header_footer_templates('header'),
            'desc'    => esc_html__('Create Footer from','quomodo-market'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','quomodo-market').'</a>',
          ),

          array(
            'id'      => 'builder_footer_layout_style',
            'type'    => 'Select',
            'title'   => esc_html__('Footer','quomodo-market'),
            'options' => quomodo_market_header_footer_templates('footer'),
            'desc'    => esc_html__('Create Footer from','quomodo-market'). '<a href='. $header_footer_url. '>'. esc_html__(' Here','quomodo-market').'</a>',
          ),
    
        )
      ) );
      // newslatter
      CSF::createSection( $post_prefix, array(
        'title'  => esc_html__('Footer','quomodo-market'),
        'fields' => array(

                array(
                  'id'      => 'newslatter_enable',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Enable Newslatter', 'quomodo-market' ),
                  'desc'    => esc_html__( 'If you want to override Newslatter Settings  you can set ( YES / NO )', 'quomodo-market' ),
                  'default' => true,
                ),
                 
                array(
                  'id'      => 'override_footer',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Override Footer style', 'quomodo-market' ),
                  'desc'    => esc_html__( 'If you want to override Footer  Settings  you can set ( YES / NO )', 'quomodo-market' ),
                  'default' => false,
                ),

                array(
                  'id'      => 'footer_style',
                  'type'    => 'image_select',
                  'title'   => esc_html__( 'Footer Style', 'quomodo-market' ),
                  'desc'    => esc_html__( 'Select the Footer style which you want to show on your website.', 'quomodo-market' ),
                  'options' => array(
                           
                    'style1'       => QUOMODO_MARKET_IMG. '/admin/footer/style1.png',
                    'style2'       => QUOMODO_MARKET_IMG. '/admin/footer/style2.png',
                    
                  ),
                  'default' => 'style1',
              ),
              array(
                'id'    => 'footer__three_style_bg',
                'type'  => 'color',
                'title'   => esc_html__( 'Footer Background ', 'quomodo-market' ),
                'output' => '.page .footer-area.footer-7-area .video-bg',
                'output_mode' => 'background-color',
                'dependency' => array( 'footer_style', '==', 'style3' ),
              ),
     
               array(
                'id'      => 'footer_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Footer Background ', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                    'color'      => '#182044',
                ),
                'output' => '.page .footer-area',
                'dependency' => array( 'footer_style', '==', 'style1' ),
              ),

              array(
                'id'      => 'footer_copyright__bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Footer Background ', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                    'color'      => '#182044',
                ),
                'output' => '.page .footer-area',
                'dependency' => array( 'footer_style', '==', 'copyright' ),
              ),
            
              array(
                'id'    => 'topbar_2_shape_background_image',
                'type'  => 'background',
                'title' => esc_html__( 'Footer Background', 'quomodo-market' ),
                'dependency' => array( 'footer_style', '==', 'style2'  ),
                'output' => '.page .footer-area.footer-2-area.footer-4-area .footer-bg'
              ),
         
        )
      ) );
    
  }
  