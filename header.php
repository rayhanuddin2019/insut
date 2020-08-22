<?php
/**
 * The qomodo header template for the theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >

        <?php

            wp_body_open();
            $general_pre_loader = quomodo_market_option('enable_preloader','0');
       
        ?>

                <?php if($general_pre_loader): ?>
                    <div class="preloader" id="preloader">
                        <div class="lds-ellipsis">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                <?php endif; ?>
        
        
            <?php 
                
                // header style option     
                $header_style             = quomodo_market_option( 'header_style','style1' );
                $page_override_header     = quomodo_market_meta_option( get_the_ID(), 'header_style_override' );
                $page_header_layout_style = quomodo_market_meta_option( get_the_ID(), 'header_style','style2' );
               
                //   if($page_override_header):
                //      $header_style = $page_header_layout_style;
                //   endif;  
               
               
              
                get_template_part( 'template-parts/headers/header', $header_style );
                    
              
               
                
            ?>
           
            <div class="qomodo-body-innner-content">
                  
                  