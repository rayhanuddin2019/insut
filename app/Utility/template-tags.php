<?php

if ( ! function_exists( 'quomodo_market_post_thumbnail' ) ) :
	
	function quomodo_market_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) : ?>

			<div class="post-thumbnail post_img">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else : ?>

		<a class="post-thumbnail post_img" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
				the_post_thumbnail( 'post-thumbnail', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
			?>
		</a>

		<?php
		endif; 
	}
endif;

if ( ! function_exists( 'quomodo_market_return' ) ) :

  function quomodo_market_return($arg){
 
   return $arg;
  }

endif;


// display meta information for a specific post
// ----------------------------------------------------------------------------------------
if ( !function_exists('quomodo_market_get_breadcrumbs') ) {
   
	function quomodo_market_get_breadcrumbs( $seperator = '', $word = '' ) {

		$general_breadcrumb_limit = quomodo_market_option('general_breadcrumb_limit');
		
        
		if($general_breadcrumb_limit > 0){
			$word = $general_breadcrumb_limit;
		}
		
		echo '<ol class="breadcrumb" >';
		if ( !is_home() ) {

			echo '<li class="breadcrumb-item"><a href="';
			   echo esc_url( get_home_url( '/' ) );
			echo '">';
		
			echo esc_html__( 'Home', 'quomodo-market' );
			echo "</a>". wp_kses_post( $seperator )."</li> ";

			if ( is_category() || is_single() ) {
			
				if(is_single()){

					$category = isset(get_the_category()[0])?get_the_category()[0]:'';

				}else{

					$category = get_category( get_query_var( 'cat' ) );
                    
				}
				$my_term = null; 
				if(isset($category->term_id)){
				  $my_term = isset($category->term_id)?$category->term_id:null; 
				}
				
				echo '<li class="breadcrumb-item"> <a href='.get_category_link($my_term). '>';
				
				$post		 = get_queried_object();
				$postType	 = get_post_type_object( get_post_type( $post ) );

				if( !empty( $category ) ) {

					echo esc_html( $category->cat_name ) . '</a> </li>';

				} elseif( $postType ) {

					echo esc_html( $postType->labels->singular_name ) . '</a></li>';

				}
				
				if( is_single() ) {

					echo '<li class="breadcrumb-item">'.wp_kses_post( $seperator ).'&nbsp';
				    	echo esc_html( $word ) != '' ? wp_trim_words( get_the_title(), $word ) : get_the_title();
					echo '</li>';
					
				}
				
			} elseif( is_page() ) {

				echo '<li class="breadcrumb-item">';
				  echo esc_html( $word ) != '' ? wp_trim_words( get_the_title(), $word ) : get_the_title();
				echo '</li>';

			}
		}
		if ( is_tag() ) {

			echo '<li class="breadcrumb-item">';
			  single_tag_title();
			echo '</li>';

		} elseif ( is_day() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( 'Blogs for', 'quomodo-market' ) . " ";
		    	the_time( 'F jS, Y' );
			echo'</li>';

		} elseif ( is_month() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( 'Blogs for', 'quomodo-market' ) . " ";
			   the_time( 'F, Y' );
			echo'</li>';

		} elseif ( is_year() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( 'Blogs for', 'quomodo-market' ) . " ";
			   the_time( 'Y' );
			echo'</li>';

		} elseif ( is_author() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( 'Author Blogs', 'quomodo-market' );
			echo'</li>';

		} elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {

			echo "<li class='breadcrumb-item'>" . esc_html__( 'Blogs', 'quomodo-market' );
			echo'</li>';

		} elseif ( is_search() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( 'Search Result', 'quomodo-market' );
			echo'</li>';

		} elseif ( is_404() ) {

			echo"<li class='breadcrumb-item'>" . esc_html__( '404 Not Found', 'quomodo-market' );
			echo'</li>';

		}
		
		echo '</ol>';
	
	}

}

// wp_body_open() backword compatibility
if ( ! function_exists( 'wp_body_open' ) ) :
	
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}

endif;

/*-----------------------------
	RANDOM SINGLE TAG
------------------------------*/
if ( !function_exists( 'quomodo_market_random_tag_retrip' ) ): 
	function quomodo_market_random_tag_retrip(){

		if ( 'post' === get_post_type() ) {

			if ( has_tag() ) {
				$tags       = get_the_tags();
				$tag_count  = count($tags);
				$single_tag = $tags[random_int( 0, $tag_count-1 )];

				if ( get_the_tags() ) {
					echo '<a href="'.esc_url( get_category_link( $single_tag->term_id ) ).'">'.esc_html( $single_tag->name ).'</a>';
				}
			}
		}
	}
endif;

/*-----------------------------
	RANDOM SINGLE CATEGORY
------------------------------*/
if ( !function_exists( 'quomodo_market_random_category_retrip' ) ): 

	function quomodo_market_random_category_retrip($fsingle=false){

		$blog_cat_show   = quomodo_market_option( 'blog_category', '1' );
		$single          = quomodo_market_option( 'blog_category_single','1');
		
		if( ! $blog_cat_show ){
          return;
		}
        if($fsingle){
			$single = true;	
		}
		if ( 'post' === get_post_type() ) {

			$category        = get_the_category();
			$cat_count       = count($category);
			$single_cat      = $category[random_int( 0, $cat_count-1 )];

			if( !get_the_category() ){
               return;
			}
			
		      
				foreach( $category as $sl=> $value ):
					if($sl == 0){

					
					echo   '<a 
								class="post-cat" 
								href="'. esc_url (get_category_link($value->term_id) ) .'"
								><i class="icofont-ui-folder" aria-hidden="true"></i>'. 
								esc_html(get_cat_name($value->term_id)).
							'</a>';
					if ($single) {
						break;
					}	
				}else{
					echo   '<a 
						class="post-cat" 
						href="'. esc_url (get_category_link($value->term_id) ) .'"
						>'. 
						esc_html(get_cat_name($value->term_id)).
					'</a>';	
				}	
				endforeach;  
			
                 	
			
		}
	}

endif;


