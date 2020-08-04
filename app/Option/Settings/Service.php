<?php 

CSF::createSection( INSUT_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Service','insut'),
        'fields' => array(

            array(
                'id'      => 'service_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Service Name', 'insut' ),
                'desc'       => esc_html__( 'Set service name', 'insut' ),
                
            ), 
            array(
                'id'      => 'service_menu',
                'type'       => 'text',
                'title'      => esc_html__( 'Service Menu Name', 'insut' ),
                'desc'       => esc_html__( 'Set service Menu name', 'insut' ),
                
            ), 
            array(
                'id'         => 'service_slug_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Service Slug Name', 'insut' ),
                'desc'       => esc_html__( 'Set service slug ', 'insut' ),
              
            ),

            array(
                'id'      => 'service_exclude_from_search',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Search Exclude', 'insut' ),
                'default' => true
            ), 

            array(
                'id'      => 'service_details_page',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Details page', 'insut' ),
                'default' => true
            ), 

       

        )
    ) ); 