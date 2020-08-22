<?php
    // get header customizer option 
  
   
    $logo              = QUOMODO_MARKET_IMG . '/logo2.png';
    $quomodo_market_logo_url    = quomodo_market_option( 'dark_logo', $logo );
    
    if($quomodo_market_logo_url == ''){
        $quomodo_market_logo_url = $logo;
    }
    
    $header_contact    = quomodo_market_option('header_contact_info',[]);


?>
       <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-item">
                            <p>Try 3 in 1 Bundle Pack Upto 85% OFF <a href="#">Click Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   




