<?php
/**
 * the template for displaying all posts.
 */

   get_header(); 
   get_template_part( 'template-parts/banner/content', 'banner-blog' );
   $reserved_data = [];    
  
?>

<main id="site-content" class="qomodo-main-container blog-single blog-area" role="main">

  <div class="quomodo-theme-portfolio" id="post-<?php the_ID(); ?>"  role="main">
      <div class="quomdodo-portfolio-content">
      <?php while ( have_posts() ) : the_post(); ?>
          <?php 

            $item_type         = '';
            $post_id           = $post->ID;
            $value_id          = get_post_meta( $post_id, 'ew_envato_item_id',true);
            $value_url         = get_post_meta( $post_id, 'ew_envato_item_url',true);
            $value_license_url = get_post_meta( $post_id, 'ew_envato_item_license_url',true);
            $value_user        = get_post_meta( $post_id, 'ew_envato_item_user',true);
            $value_sales       = get_post_meta( $post_id, 'ew_envato_item_sales',true);
            $value_rating      = get_post_meta( $post_id, 'ew_envato_item_rating',true);
            $value_cost        = get_post_meta( $post_id, 'ew_envato_item_cost',true);
            $value_uploaded_on = get_post_meta( $post_id, 'ew_envato_item_uploaded_on',true);
            $value_tags        = get_post_meta( $post_id, 'ew_envato_item_tags',true);
            $value_category    = get_post_meta( $post_id, 'ew_envato_item_category',true);
            $reserved_data     = quomodo_market_ewSingleitemdata($value_id);
          
            if(isset($reserved_data["classification"])){
              $classification = explode('/',$reserved_data["classification"]);
              if(in_array("wordpress",$classification) ){
                $item_type = esc_html__("wordpress",'quomodo-market-essential');
              }elseif(in_array("site-templates",$classification) ){
                $item_type =  esc_html__("html",'quomodo-market-essential');
              }elseif(in_array("joomla",$classification) ){
                $item_type = esc_html__("joomla",'quomodo-market-essential');
              }
              
            }
        
          
          ?>
          <div class="container">
                <div class="row">
                  <div class="col-md-8">
                      <div class="row product-preview">
                          <div class="col-md-9"> 
                              
                                <div class="product-preview-img">
                                <div class="content-inner xs-padding">
                                    <div class="product-tag"><a href="#"> <?php echo esc_html($item_type); ?> </a></div>
                                      
                                        <?php if(get_the_post_thumbnail_url($post_id)): ?>
                                            <img class="img-responsive" src="<?php echo esc_url(get_the_post_thumbnail_url($post_id)); ?>" >
                                        <?php else: ?>   
                                        <img class="img-responsive" src="<?php echo esc_url($reserved_data["previews"]["landscape_preview"]["landscape_url"]); ?>" alt="<?php echo esc_html($reserved_data["name"]); ?>">
                                        <?php endif; ?> 
                                        
                                        <div class="icon_preview">
                                            <?php if(isset($reserved_data["previews"])): ?>
                                                  <?php $reserved_data_previews = $reserved_data["previews"]; ?>
                                                  <?php if(isset($reserved_data_previews["icon_preview"]) && ew_is_connected()): ?>
                                                    <img class="img-responsive" src="<?php echo esc_url($reserved_data["previews"]["icon_preview"]["icon_url"]); ?>" alt="<?php echo esc_html($reserved_data["name"]); ?>">
                                                  <?php endif; ?> 
                                            <?php endif; ?> 
                                            
                                        </div>
                                    
                                        <div class="product-button">
                                          <div>
                                                  <?php if(isset($reserved_data["previews"])): ?>
                                                  <?php $reserved_data_live_site = $reserved_data["previews"]; ?>
                                                        <?php if(isset($reserved_data_live_site["live_site"]) && ew_is_connected()): ?>
                                                        <a class="btn btn-theme" href="<?php echo esc_url("https://".$reserved_data["site"].$reserved_data["previews"]["live_site"]["href"]); ?>" target="_blank"><?php echo esc_html("Live Demo",'quomodo-market-essential'); ?> </a>
                                                        <?php endif; ?> 
                                                  <?php endif; ?> 

                                          </div>
                                      </div>
                                </div>
                                </div>
                                <div class="content-inner ew-description">
                              
                                  <?php if($post->post_content==''): ?>
                                      <?php if(isset($reserved_data["description"])): ?>   
                                        <?php echo wp_kses_post(($reserved_data["description"])); ?>
                                      <?php endif; ?>  
                                  <?php else: ?>
                                        <?php echo wp_kses_post(($post->post_content)); ?>
                                  <?php endif; ?>
                                
                                </div>
                            </div>
                            <div class="col-md-3">  
                            <div class="product-preview-info">
                              <?php if(isset($reserved_data["price_cents"])): ?>
                                  <div>
                                      <span class="info-title"> <?php echo esc_html__("PRICE",'quomodo-market-essential'); ?></span>
                                      <span class="amount"> <?php echo esc_html("$".number_format(($reserved_data["price_cents"]/100), 2, '.', ' ') ); ?>  </span>
                                  </div>
                                <?php endif; ?> 
                                <?php if(isset($reserved_data["number_of_sales"])): ?>
                                  <div>
                                      <span class="info-title"><?php echo esc_html__("Sales",'quomodo-market-essential'); ?></span>
                                      <span> <?php echo esc_html($reserved_data["number_of_sales"]); ?> </span>
                                  </div>
                                <?php endif; ?> 
                                <?php if(isset($reserved_data["rating_count"])): ?>
                                <div>
                                  <span class="info-title"><?php echo esc_html__("LOVED",'quomodo-market-essential'); ?> </span>
                                  <span> <?php echo esc_html($reserved_data["rating_count"]); ?> </span>
                                </div>
                                <?php endif; ?> 
                                <?php if(isset($item_type)): ?>
                              <div>
                                  <span class="info-title"><?php echo esc_html__("TYPE",'quomodo-market-essential'); ?></span>
                                  <span><a href="#"> <?php echo esc_html($item_type); ?></a></span>
                                </div>
                                <?php endif; ?> 
                          </div>
                            </div>     
                      </div>
                  </div>
                  <div class="col-md-4">
                    
                    <div class="project-overview text-center">
                            <div class="content-inner sm-padding">
                                <div class="themebox_excerpt">
                                  <?php if($item_type=="wordpress"): ?>
                                        <?php if(isset($reserved_data["wordpress_theme_metadata"])): ?>
                                            <?php if($post->post_excerpt==''): ?>
                                                <?php echo esc_html($reserved_data["wordpress_theme_metadata"]["description"])?>
                                            <?php else: ?>
                                            <?php echo esc_html($post->post_excerpt);?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                  <?php else: ?>
                                  <?php echo esc_html($post->post_excerpt); ?>
                                  <?php endif; ?>
                                  
                                </div>
                                  <?php if(isset($reserved_data["url"])): ?>    
                                      <a href="<?php echo esc_url($reserved_data["url"]); ?>" class="btn btn-primary btn-buy-template">
                                      Buy This <?php echo esc_html($item_type=="html"?"html Template":"wordpress theme"); ?></a>
                                  <?php endif; ?>
                                  <?php if($value_license_url!=''): ?>
                                    <div class="license" ><a class="read-more" href="#">Read about the license</a></div>
                                  <?php endif; ?>

                            </div>
                      </div> 
                      <div class="project-details">
                          <h3 class="block-title"><span><?php echo esc_html($item_type=="html"?" Template":"Theme"); ?> Information</span></h3>
                          <?php if(isset($reserved_data["published_at"])): ?>
                          <dl class="dl-horizontal">
                            <dt>Created On:</dt>
                            <dd> <?php echo esc_html(date('M d, Y', strtotime($reserved_data["published_at"]))); ?> </dd>
                          </dl>
                          <?php endif; ?>
                          <?php if(isset($reserved_data["updated_at"])): ?>
                          <dl class="dl-horizontal">
                            <dt>Updated On:</dt>
                            <dd> <?php echo esc_html(date('M d, Y', strtotime($reserved_data["updated_at"]))); ?> </dd>
                          </dl>
                          <?php endif; ?>
                          
                          <?php if(isset($reserved_data["wordpress_theme_metadata"])): ?>
                            <dl class="dl-horizontal">
                                <dt>Version:</dt>
                                <dd><?php echo esc_html($reserved_data["wordpress_theme_metadata"]["version"]); ?> </dd>
                            </dl>
                        <?php endif; ?> 
                        <?php if(isset($reserved_data["attributes"])): ?>
                            <?php foreach($reserved_data["attributes"] as $item_attr): ?>
                            <dl class="dl-horizontal">
                                <dt> <?php echo $item_attr["name"] ?> </dt>
                                <dd>
                                  <?php 
                                      if(is_array($item_attr["value"])):
                                      echo implode(' , ',$item_attr["value"]);
                                      else:
                                        if(wp_http_validate_url($item_attr["value"])):
                                        echo "<a href=".esc_url($item_attr["value"]).">".esc_html__("Open",'quomodo-market-essential') ."</a>" ; 
                                        else:
                                        echo esc_html($item_attr["value"]); 
                                        endif;  
                                      endif;  
                                  ?> 
                                </dd>
                            </dl>       
                            <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    
              </div>
          </div>
        </div>
      <?php endwhile; ?>
      </div> <!-- end main-content -->
  </div> <!-- end main-content -->
  
</main> <!--#main-content -->
<?php get_footer(); ?>