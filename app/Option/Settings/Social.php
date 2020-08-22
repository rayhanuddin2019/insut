<?php 

    // social
    CSF::createSection( quomodo_market_option_KEY, array(
        'title'  => esc_html__( 'Social', 'quomodo-market' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Bookmark', 'quomodo-market' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'quomodo-market' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'quomodo-market' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'quomodo-market' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'quomodo-market' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'quomodo-market' ),
                        'options'     => quomodo_market_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'quomodo-market' ),
                'button_title' => esc_html__( 'Add New Bookmark', 'quomodo-market' ),
                'desc'         => esc_html__( 'Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'quomodo-market' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'quomodo-market' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'quomodo-market' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'quomodo-market' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'quomodo-market' ),
                        'default' => 'http://facebook.com/quomodosoft'
                    ),
                   
                ),
            ),
         
            
            array(
                'id'      => 'post_social_share_show',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Blog Social Share', 'quomodo-market' ),
                'desc'    => esc_html__( 'Set the Social social hide or not.', 'quomodo-market' ),
                'default' => false,
            ),
         
        
        ),

    ) );