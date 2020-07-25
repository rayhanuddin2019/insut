<?php

namespace Insut\Setup;
use Insut\Core\Hook\Insut_Unyson_Google_Fonts;

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
        $preloader_bg                        = insut_option('preloader_bg');
        $body_text_color                     = insut_option('main_text_color');
   
        $custom_css = '';

	
       // Banner page Overlay Color Opacity
       if(is_page()){

            $banner_page_image_overlay  = '';
            $banner_page_image_opacity  = '';

            if(insut_meta_option( get_the_ID(), 'banner_page_image_overlay' ) != ''){
                $banner_page_image_overlay =  insut_meta_option( get_the_ID(), 'banner_page_image_overlay' );
            }elseif(insut_option( 'banner_page_image_overlay' ) !=''){
              $banner_page_image_overlay =  insut_option( 'banner_page_image_overlay' );
            }

            if(insut_meta_option( get_the_ID(), 'banner_page_image_opacity' ) != ''){
                $banner_page_image_opacity =  insut_meta_option( get_the_ID(), 'banner_page_image_opacity' );
            }elseif(insut_option( 'banner_page_image_opacity' ) !=''){
              $banner_page_image_opacity =  insut_option( 'banner_page_image_opacity' );
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

        if(insut_option( 'banner_blog_image_overlay' ) !=''){
          $banner_blog_image_overlay =  insut_option( 'banner_blog_image_overlay' );
        }

        if(insut_option( 'banner_blog_image_opacity' ) !=''){
          $banner_blog_image_opacity =  insut_option( 'banner_blog_image_opacity' );
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

        wp_add_inline_style( 'insut-theme', $custom_css );
    }

}