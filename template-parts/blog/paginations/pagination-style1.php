<?php 
 global $wp_query;

 /*Return early if there's only one page.*/
 if ($GLOBALS['wp_query']->max_num_pages < 2) {
     return;
 }
 $big_data = 999999999;
 echo '<nav class="navigation pagination d-flex justify-content-center mt-60"><div class="nav-links">';
 echo paginate_links(array(
     'prev_text'          => '<i class="ti-arrow-left"></i>',
     'next_text'          => '<i class="ti-arrow-right"></i>',
     'screen_reader_text' => ' ',
     'mid_size'           => 1,
     'base'               => get_pagenum_link(1) . '%_%',
     'base'               => str_replace($big_data, '%#%', esc_url(get_pagenum_link($big_data))),
     'format'             => 'page/%#%',
     'current'            => max( 1, get_query_var('paged') ),
     'total'              => $wp_query->max_num_pages,
     'prev_next'          => true,
     'type'               => 'list',
 ));
 echo '</div></nav>';