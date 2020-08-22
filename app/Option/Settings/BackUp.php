<?php 

   // backup option
   CSF::createSection( quomodo_market_option_KEY, array(
           
    'title'  => esc_html__( 'Backup Options', 'quomodo-market' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Your All Options', 'quomodo-market' ),
            'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'quomodo-market' ),
        ),
    ),
) );