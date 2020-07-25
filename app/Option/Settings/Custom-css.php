<?php 

  // custom css
  CSF::createSection( INSUT_OPTION_KEY, array(
   
    'title'  => esc_html__( 'Custom Css', 'insut' ),
    'icon'   => 'fa fa-css3',
    'fields' => array(
        array(
            'id'    => 'custom_css',
            'type'  => 'textarea',
            'title' => esc_html__( 'Write Custom Css Here', 'insut' ),
            'desc'  => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post.', 'insut' ),
        ),
    ),
) ); 