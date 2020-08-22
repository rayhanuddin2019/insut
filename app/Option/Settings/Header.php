<?php 

   // header a top-tab
    CSF::createSection( quomodo_market_option_KEY, array(
        'id'    => 'header_tab', // Set a unique slug-like ID
        'title'   => esc_html__( 'Header', 'quomodo-market' ),
        'icon'     => 'fa fa-home',
    ) ); 


    // Header
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'   => esc_html__( 'Header', 'quomodo-market' ),
        'icon'   => 'fa fa-credit-card',
        'fields' => array(
 
            
            array(
                'id'      => 'header_style',
                'type'    => 'image_select',
                'title'   => esc_html__( 'Header Style', 'quomodo-market' ),
                'desc'    => esc_html__( 'Select the header style which you want to show on your website.', 'quomodo-market' ),
                'options' => array(
                    'style1' => QUOMODO_MARKET_IMG. '/admin/header/header-1.png',
               
                
                ),
                'default' => 'style1',
            ),
   
            array(
                'id'      => 'transparent_header',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Disable Transparent Header', 'quomodo-market' ),
                'default' => true,
            ),
            array(
                'id'      => 'header_main_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Header Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the header background form here.', 'quomodo-market' ),
                'background_gradient'=> true,
                'output' =>'.header-01'
            ),
         
            // Button
            array(
                'id'      => 'button_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Cta Button', 'quomodo-market' ),
                'desc'    => esc_html__( 'If you want to enable or disable button you can set ( YES / NO )', 'quomodo-market' ),
                'default' => false,
            ),
    
            array(
                'id'         => 'button_text',
                'type'       => 'text',
                'title'      => esc_html__( 'Button lebel', 'quomodo-market' ),
                'desc'       => esc_html__( 'Set the Button text.', 'quomodo-market' ),
                'default'    => esc_html__( 'Contact Us', 'quomodo-market' ),
                'dependency' => array( 'button_enable', '==', 'true' ),
            ),
    
            array(
                'id'         => 'button_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Button url', 'quomodo-market' ),
                'desc'       => esc_html__( 'Set the Button url.', 'quomodo-market' ),
                'default'    => '#',
                'dependency' => array( 'button_enable', '==', 'true' ),
            ),
             
             //flag
            array(
                'id'      => 'enable_cart',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Cart', 'quomodo-market' ),
                'desc'    => esc_html__( 'If you want to enable or disable flag you can set ( YES / NO )', 'quomodo-market' ),
                'default' => false,
            ),

           

            array(
                'id'         => 'cart_image',
                'type'       => 'media',
                'title'      => esc_html__( 'Cart Icon Upload', 'quomodo-market' ),
                'desc'       => esc_html__( 'Set Cart Icon image svg', 'quomodo-market' ),
            ),
           
          

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Button Styling', 'quomodo-market' ),
            ),
        
            array(
                'id'     => 'button_one_text_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Button Color', 'quomodo-market' ),
                'output' => 'header .contact-btn,header .get-a-quote',
                'output_important' => true,
            ),  

            array(
                'id'     => 'button_one_texthover_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Button Hover Color', 'quomodo-market' ),
                'output' => 'header .contact-btn:hover,header .get-a-quote:hover',
                'output_important' => true,
               
            ), 

            array(

                'id'               => 'button_one_bg_color',
                'type'             => 'background',
                'output_important' => true,
                'title'            => esc_html__( 'Button Background Color', 'quomodo-market' ),
                'output'           => 'header .contact-btn ,header .get-a-quote',
                'output_mode'      => 'background-color',
                'background_gradient' => true,
                
            ), 
            
            array(
                'id'               => 'button_one_bghover_color',
                'type'             => 'background',
                'output_important' => true,
                'title'            => esc_html__( 'Button Background hover bgColor', 'quomodo-market' ),
                'output'           => 'header .contact-btn:after ,header .get-a-quote:after',
                'output_mode'      => 'background-color',
                'background_gradient' => true,
               
            ),

            array(
                'id'     => 'button_one_border',
                'type'   => 'border',
                'title'  => esc_html__( 'Button Border', 'quomodo-market' ),
                'output' => 'header .contact-btn , header .get-a-quote'
            ),
           
           
        )
    ) );
  
    // Main menu
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'      => esc_html__( 'Main Menu', 'quomodo-market' ),
        'icon'   => 'fa fa-sitemap',
        'fields' => array(
          
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Background', 'quomodo-market' ),
            ),
            
            array(
                'id'      => 'menu_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu background form here.', 'quomodo-market' ),
                'output_important'=> true,
                'output' =>'.navbar.navbar-expand-lg'
            ),
            // header one
            array(
                'id'      => 'menu_shape_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Menu Shape Background', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu background shape form here.', 'quomodo-market' ),
                 
                'background_gradient'=> true,
                'output_important'=> true,
                'output' =>'.navbar.navbar-expand-lg:after'
            ),
           
         
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Color', 'quomodo-market' ),
            ),

            array(
                'id'      => 'menu_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu color by color picker', 'quomodo-market' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .nav-link,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link, .navbar-three.navbar-expand-lg .navbar-nav li .nav-link'
            ),
            array(
                'id'      => 'menu_hover',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Hover Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu hover color by color picker', 'quomodo-market' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .nav-link:hover,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:hover,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:hover'
            ),
            array(
                'id'               => 'menu_hover_icon_bg',
                'type'             => 'background',
                'title'            => esc_html__( 'Menu Hover shape', 'quomodo-market' ),
                'desc'             => esc_html__( 'Set the menu hover top icon.', 'quomodo-market' ),
                'background_color' => true,
                'output'           => '.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-two.navbar-expand-lg .navbar-nav li .nav-link:after,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:before,.navbar-three.navbar-expand-lg .navbar-nav li .nav-link:after',
        
            ),
            
            //dropdown
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Dropdown Color & Hover', 'quomodo-market' ),
            ),
            array(
                'id'      => 'menu_dropdown_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu dropdown color by color picker', 'quomodo-market' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu a'
            ),
            array(
                'id'      => 'menu_dropdown_hover__text_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the menu dropdown hover color by color picker', 'quomodo-market' ),
                'default' => '',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover,.navbar-two.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover,.navbar-three.navbar-expand-lg .navbar-nav li .dropdown-menu li a:hover'
            ),
          						
            array(
                'id'      => 'menu_dropdown_item_background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Background Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'quomodo-market' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li'
            ),

            array(
                'id'      => 'menu_dropdown__item_hover_background',
                'type'    => 'color',
                'title'   => esc_html__( 'Menu Dropdown Hover Background Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the dropdown background color by color picker', 'quomodo-market' ),
                'default' => '',
                'output_mode' => 'background-color',
                'output'  => '.navbar-expand-lg .navbar-nav li .dropdown-menu li:hover'
            ),
          

        )
    ) );

  

    
    // Logo section
    CSF::createSection( quomodo_market_option_KEY, array(
        'parent' => 'header_tab', // The slug id of the parent section
        'title'  => 'Logos',
        'icon'   => 'fa fa-file-image-o',
        'fields' => array(

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Main Image Logo', 'quomodo-market' ),
            ),
            array(
                'id'      => 'logo',
                'type'    => 'upload',
                'title'   => esc_html__( 'Upload Main Logo', 'quomodo-market' ),
                'desc'    => esc_html__( 'Upload main logo width 180px and height 65px.', 'quomodo-market' ),
                'default' => '',
                'help'    => esc_html__( 'Note: Please use logo image max width: 250px and max height 100px.', 'quomodo-market' ),
            ),
         
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Text Logo Color', 'quomodo-market' ),
            ),
            array(
                'id'      => 'logo_color',
                'type'    => 'color',
                'title'   => esc_html__( 'Text Logo Color', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the text logo color by color picker.', 'quomodo-market' ),
                'output' => '.logo-title a',
            ),
           
           

        )
    ) );