<?php 
        
        // footer a top-tab
        CSF::createSection( quomodo_market_option_KEY, array(
            'id'    => 'footer_tab',                         // Set a unique slug-like ID
            'title' => esc_html__( 'Footer', 'quomodo-market' ),
            'icon'  => 'fa fa-cog',
        ) ); 
         // top  call to action
         CSF::createSection( quomodo_market_option_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'MailChimp', 'quomodo-market' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(

                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'MailChimp Subscribe', 'quomodo-market' ),
                ),

                array(

                    'id'      => 'footer_subscribe',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Enable MailChimp', 'quomodo-market' ),
                    'default' => false

                ),

                array(
                    'id'         => 'footer_subscribe_mailchimp_code',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Mailchimp Shortcode', 'quomodo-market' ),
                    'desc'       => esc_html__( 'Set Shortcode', 'quomodo-market' ),
                ),

                
                array(
                    'id'          => 'footer_subscribe_permited_pages',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Permitted Pages', 'quomodo-market' ),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select pages','quomodo-market'),
                    'options'     => array(
                        'all'     => esc_html__( 'All', 'quomodo-market' ),
                        'post'    => esc_html__( 'Post', 'quomodo-market' ),
                        'page'    => esc_html__( 'Page', 'quomodo-market' ),
                        //'service' => esc_html__( 'Service', 'quomodo-market' ),
                  
                        'blog'    => esc_html__( 'Blog List', 'quomodo-market' ),
                    ),
                    'default'     => 'all'
                  ),
           
                array(
                    'id'         => 'footer_subscribe_title',
                    'type'       => 'textarea',
                    'title'      => esc_html__( 'Title', 'quomodo-market' ),
                    'desc'       => esc_html__( 'Set title', 'quomodo-market' ),
                ),

                 // back button
                 array(
                    'id'      => 'footer_back_top_button',
                    'type'    => 'switcher',
                    'title'   => esc_html__( 'Enable Back to Button', 'quomodo-market' ),
                    'default' => true
                ), 
  

            ),
         ) ); 
        // Footer
        CSF::createSection( quomodo_market_option_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer layout & style', 'quomodo-market' ),
            'icon'   => 'fa fa-paint-brush',
            'fields' => array(
                array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Footer Settings', 'quomodo-market' ),
                ),
               
                array(
                    'id'      => 'footer_style',
                    'type'    => 'image_select',
                    'title'   => esc_html__( 'Footer Style', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Select the Footer style which you want to show on your website.', 'quomodo-market' ),
                    'options' => array(
                        
                        'style1'       => QUOMODO_MARKET_IMG. '/admin/footer/style1.png',
                       
                    ),

                    'default' => 'style1',
                ),
                
                
                array(
                    'id'      => 'footer_bg_color',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background Color ', 'quomodo-market' ),
                    'output' => '.footer-area',
                    'background_gradient'  => true,
             
                ), 
                
                array(
                    'id'      => 'footer_bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background ', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                    'output' => '.footer-area::before',
                    'background_color' => false
                  
             
                ),
                array(
                    'id'      => 'footer_bg2',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Footer Background 2', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                    'output' => '.footer-area::after',
                    'background_color' => false
                  
             
                ),
                       
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Footer Main Box', 'quomodo-market' ),
                ),
                array(
                    'id'       => 'footer_area_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Footer Padding', 'quomodo-market' ),
                    'output_mode' => 'padding',
                    'output'      => '.footer-area',
                    'bottom'  => false,
                   
                  ),

                array(
                'id'       => 'footer_area_padding_bottom',
                'type'     => 'spacing',
                'title'   => esc_html__( 'Footer Padding Bottom', 'quomodo-market' ),
                'output_mode' => 'padding',
                'output'      => '.footer-widget-box',
                'top'  => false,
                'left'  => false,
                'right'  => false,
                
                ),

 
                array(
                  'type'    => 'subheading',
                  'content' => esc_html__( 'Footer Text & Link Color', 'quomodo-market' ),
                ),

                array(
                    'id'      => 'footer_widget_title_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget Title Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer widget title color form here.', 'quomodo-market' ),
                    'output' => '.footer-area .widget-title'
                ),

                array(
                    'id'      => 'footer_widget_content_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Widget content Color', 'quomodo-market' ),
                    'output_important'=> true,
                    'desc'    => esc_html__( 'Set footer widget content color form here.', 'quomodo-market' ),
                    'output' => '
                        .footer-area .widget,
                         footer .widget ul li a ,
                        .footer-area div#calendar_wrap table > tbody > tr > td,
                        .footer-area div#calendar_wrap table > thead > tr > th, 
                        .footer-area div#calendar_wrap table > tbody > tr > th, 
                        .footer-area div#calendar_wrap table > tfoot > tr > th,
                        .footer-area div#calendar_wrap table > thead > tr > td, 
                        .footer-area div#calendar_wrap table > tbody > tr > td, 
                        .footer-area div#calendar_wrap table > tfoot > tr > td,
                        .footer-area div#calendar_wrap table > thead > tr > th,
                        .footer-area a,
                        .footer-area li,
                        .footer-area div#calendar_wrap caption,
                        .footer-area .content .title
                       

                    '
                ),
             
                array(
                    'id'       => 'footer_widget_title_margin',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Widget title margin', 'quomodo-market' ),
                    'output_mode' => 'margin',
                    'output'      => '.footer-area .widget-title'
                ),

                array(
                    'id'       => 'footer_widget_content_margin',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Widget margin', 'quomodo-market' ),
                    'output_mode' => 'margin',
                    'output'      => '.footer-area .widget'
                ),

            
                array(
                    'id'      => 'footer_link_color',
                    'type'    => 'link_color',
                    'title'   => esc_html__( 'Footer links color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set the footer area link color', 'quomodo-market' ),
                    'output_important'=> true,
                    'output' => '.footer-area .tagcloud a, .footer-area .widget a, .footer-area .widget ul li a.url,.footer-area .widget ul li a.rsswidget'
                ),

             
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Copyright & Back Button', 'quomodo-market' ),
                ),

                array(
                    'id'      => 'footer_copyright__bg',
                    'type'    => 'background',
                    'title'   => esc_html__( 'Copyright ', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'quomodo-market' ),
                    'output' => '.footer-copyright',
                    
                ),

                array(
                    'id'       => 'copyright_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Copyright Padding', 'quomodo-market' ),
                    'output_mode' => 'padding',
                    'output'      => '.footer-copyright'
                  ),

                  array(
                    'id'       => 'copyright_content_padding',
                    'type'     => 'spacing',
                    'title'   => esc_html__( 'Copyright content Padding', 'quomodo-market' ),
                    'output_mode' => 'padding',
                    'output'      => '.footer-copyright p'
                  ),
             

                array(
                    'id'      => 'footer_copyright_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Copyright Text Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer copyright text color form here.', 'quomodo-market' ),
                    'output'  => '.footer-copyright p'
                ),

                array(
                    'id'      => 'footer_copyright_link_color',
                    'type'    => 'link_color',
                    'title'   => esc_html__( 'Copyright link Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer copyright link color form here.', 'quomodo-market' ),
                    'output'  => '.footer-copyright p a'
                ),

                
                array(
                    'id'      => 'footer_copyright_credited_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Credited By Text Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer copyright text color form here.', 'quomodo-market' ),
                    'output'  => '.footer-copyright .copyright-item span'
                ),

                array(
                    'id'      => 'footer_credited_link_color',
                    'type'    => 'link_color',
                    'title'   => esc_html__( 'Credited By Highlight Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer copyright link color form here.', 'quomodo-market' ),
                    'output'  => '.footer-copyright .copyright-item span span'
                ),
  
    

                array(
                    'id'      => 'footer_copyright_icon_color',
                    'type'    => 'color',
                    'title'   => esc_html__( 'Back Button Icon Color', 'quomodo-market' ),
                    'desc'    => esc_html__( 'Set footer Back Button icon color form here.', 'quomodo-market' ),
                    'output' => '.back-to-top i'
                ),

                array(
                    'id'               => 'backbutton_button_color',
                    'type'             => 'background',
                    'output_important' => true,
                    'title'            => esc_html__( 'Button Background', 'quomodo-market' ),
                    'output'           => '.back-to-top',
                    'output_mode'      => 'background-color',
                    'background_gradient' => true,
                   
                ),

                array(
                    'id'               => 'button_one_bghover_color',
                    'type'             => 'background',
                    'output_important' => true,
                    'title'            => esc_html__( 'Button Background hover bgColor', 'quomodo-market' ),
                    'output'           => '.back-to-top:hover',
                    'output_mode'      => 'background-color',
                    'background_gradient' => true,
                   
                ),
                  
            ),

        ) );

        // copyright
        CSF::createSection( quomodo_market_option_KEY, array(
            'parent' => 'footer_tab', // The slug id of the parent section
            'title'  => esc_html__( 'Footer Copyright', 'quomodo-market' ),
            'icon'   => 'fa fa-copyright',
            'fields' => array(
                array(
                    'id'       => 'copyright_text',
                    'type'     => 'wp_editor',
                    'title'    => esc_html__( 'Footer Copyright', 'quomodo-market' ),
                    'desc'     => esc_html__( 'Set the footer copyright text','quomodo-market' ),
                    'settings' => array(
                        'textarea_rows' => 5,
                        'tinymce'       => false,
                        'media_buttons' => false,
                      ),
                      'default' => 'Copryright &copy; QuomodoTheme All Right Reserved.',
                ),

              
                array(
                    'id'       => 'copyright_credited_by',
                    'type'     => 'textarea',
                    'title'    => esc_html__( 'Footer Credited By', 'quomodo-market' ),
                    'desc'     => esc_html__( 'Set the footer Credited text with {  } for heighlight text','quomodo-market' ),
                    'settings' => array(
                        'textarea_rows' => 2,
                        'tinymce'       => true,
                        'media_buttons' => false,
                      ),
                      'default' => 'Copryright &copy; QuomodoTheme All Right Reserved.',
                ),
             
      
            ),

        ) ); 