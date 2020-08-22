<?php

namespace QuomodoMarket\Setup;


/**
* Enqueue.
*/

class InlineStyle  {
    /**
    * register default hooks and actions for WordPress
    * @return
    */

    public function register()
    {
        add_action( 'wp_enqueue_scripts',  array( $this, 'dynamic_style' ) );
    }

    public function dynamic_style() {
       
        $unit                                = 'px';
        $preloader_bg                        = quomodo_market_option('preloader_bg');
        $body_text_color                     = quomodo_market_option('main_text_color');
   
        $custom_css = '';

	
       // Banner page Overlay Color Opacity
       if(is_page()){

            $banner_page_image_overlay  = '';
            $banner_page_image_opacity  = '';

            if(quomodo_market_meta_option( get_the_ID(), 'banner_page_image_overlay' ) != ''){
                $banner_page_image_overlay =  quomodo_market_meta_option( get_the_ID(), 'banner_page_image_overlay' );
            }elseif(quomodo_market_option( 'banner_page_image_overlay' ) !=''){
              $banner_page_image_overlay =  quomodo_market_option( 'banner_page_image_overlay' );
            }

            if(quomodo_market_meta_option( get_the_ID(), 'banner_page_image_opacity' ) != ''){
                $banner_page_image_opacity =  quomodo_market_meta_option( get_the_ID(), 'banner_page_image_opacity' );
            }elseif(quomodo_market_option( 'banner_page_image_opacity' ) !=''){
              $banner_page_image_opacity =  quomodo_market_option( 'banner_page_image_opacity' );
            }

            // color
            if($banner_page_image_overlay != ''){
                $custom_css .="
                .page .bg-overlay:before{
                      background:$banner_page_image_overlay;
                  }
              ";
            }
             // opacity
            if($banner_page_image_opacity != ''){
                $custom_css .="
                .page .bg-overlay:before{
                      opacity:$banner_page_image_opacity;
                  }
              ";
            }
          
          
       }else{
           
        $banner_blog_image_overlay  = '';
        $banner_blog_image_opacity  = '';

        if(quomodo_market_option( 'banner_blog_image_overlay' ) !=''){
          $banner_blog_image_overlay =  quomodo_market_option( 'banner_blog_image_overlay' );
        }

        if(quomodo_market_option( 'banner_blog_image_opacity' ) !=''){
          $banner_blog_image_opacity =  quomodo_market_option( 'banner_blog_image_opacity' );
        }

        // color
        if($banner_blog_image_overlay != ''){
            $custom_css .="
            .blog-banner .bg-overlay:before{
                  background:$banner_blog_image_overlay;
              }
          ";
        }
         // opacity
        if($banner_blog_image_opacity != ''){
            $custom_css .="
            .blog-banner .bg-overlay:before{
                  opacity:$banner_blog_image_opacity;
              }
          ";
        }  

       } 
       // page banner end
       //case study 
       if(is_singular('quomodo-case')){

        $banner_page_image_overlay  = '';
        $banner_page_image_opacity  = '';

        if( quomodo_market_meta_option( get_the_ID(), 'banner_case_image_overlay' ) != '' ){
            $banner_page_image_overlay =  quomodo_market_meta_option( get_the_ID(), 'banner_case_image_overlay' );
        }

        if( quomodo_market_meta_option( get_the_ID(), 'banner_case_image_opacity' ) != '' ){
            $banner_page_image_opacity =  quomodo_market_meta_option( get_the_ID(), 'banner_case_image_opacity' );
        }

        // color
        if( $banner_page_image_overlay != '' ){
            $custom_css .="
            .single-quomodo-case .bg-overlay:before{
                  background:$banner_page_image_overlay;
              }
          ";
        }
         // opacity
        if( $banner_page_image_opacity != '' ){
            $custom_css .="
            .single-quomodo-case .bg-overlay:before{
                  opacity:$banner_page_image_opacity;
              }
          ";
        }
      

       }

        //Service
        if( is_singular('quomodo-service') ){

          $banner_page_image_overlay  = '';
          $banner_page_image_opacity  = '';
  
          if( quomodo_market_meta_option( get_the_ID(), 'banner_service_image_overlay' ) != '' ){
              $banner_page_image_overlay =  quomodo_market_meta_option( get_the_ID(), 'banner_service_image_overlay' );
          }
  
          if( quomodo_market_meta_option( get_the_ID(), 'banner_service_image_opacity' ) != '' ){
              $banner_page_image_opacity =  quomodo_market_meta_option( get_the_ID(), 'banner_service_image_opacity' );
          }
  
          // color
          if( $banner_page_image_overlay != '' ){
              $custom_css .="
              .single-quomodo-service .bg-overlay:before{
                    background:$banner_page_image_overlay;
                }
            ";
          }
           // opacity
          if( $banner_page_image_opacity != '' ){
              $custom_css .="
              .single-quomodo-service .bg-overlay:before{
                    opacity:$banner_page_image_opacity;
                }
            ";
          }
        
  
         }
        
          /*----------------------------------
            CSS ALL DEVICE
        -----------------------------------*/
        if( quomodo_market_option( 'custom_css' ) ){
            $custom_css .= quomodo_market_option( 'custom_css' );
        }
        /*----------------------------------
            CSS IPAD DEVICE
        -----------------------------------*/
        if( quomodo_market_option( 'custom_css_ipad' ) ){
            $custom_css.="
                @media (min-width: 1024px) and (max-width: 1400px) {
                    ".quomodo_market_option( 'custom_css_ipad' )."
                }
            ";
        }
        /*----------------------------------
            CSS TABLET DEVICE
        -----------------------------------*/
        if( quomodo_market_option( 'custom_css_tablet' ) ){
            $custom_css.="
                @media (min-width: 768px) and (max-width: 991px) {
                    ".quomodo_market_option( 'custom_css_tablet' )."
                }
            ";
        }
        /*----------------------------------
            CSS MOBILE DEVICE
        -----------------------------------*/
        if( quomodo_market_option( 'custom_css_mobile' ) ){
            $custom_css.="
                @media only screen and (max-width: 767px) {
                    ".quomodo_market_option( 'custom_css_mobile' )."
                }
            ";
        }

        wp_add_inline_style( 'quomodo-market-theme', $custom_css );
    }

}