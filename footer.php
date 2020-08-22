
         <?php
               // footer style option
              $footer = quomodo_market_option("footer_style","style1");
              $override = quomodo_market_meta_option(get_the_id(),"override_footer",0);
              
              if( $override ){

                 $footer = quomodo_market_meta_option(get_the_id(),"footer_style",'style4');

              }
             
              get_template_part( 'template-parts/footer/footer', $footer );
         ?>

         <?php wp_footer(); ?>
      </div>
   </body>
</html>