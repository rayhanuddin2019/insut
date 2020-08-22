<?php 

    // Faq
    CSF::createSection( quomodo_market_option_KEY, array(
        'title'  => esc_html__( 'Faq', 'quomodo-market' ),
        'icon'   => 'fa fa-question-circle',
        'fields' => array(
            array(
                'id'        => 'faq_tab_list',
                'type'      => 'group',
                'title'      => esc_html__( 'Frequently Asked Questions', 'quomodo-market' ),
                'fields'    => array(
                
                  array(
                    'id'    => 'tab_menu',
                    'type'  => 'text',
                    'title' => esc_html__( 'Group Name', 'quomodo-market' ),
                  ),
                 
               
                  array(
                    'id'        => 'faq_question_list',
                    'type'      => 'group',
                    'title' => esc_html__( 'Question List', 'quomodo-market' ),
                    'fields'    => array(
                      array(
                        'id'    => 'question',
                        'type'  => 'textarea',
                        'title' => esc_html__( 'Faq Question', 'quomodo-market' ),
                      ),
                      array(
                        'id'    => 'answer',
                        'type'  => 'wp_editor',
                        'title' => esc_html__( 'Faq Answer', 'quomodo-market' ),
                      ),
                    ),
                  ),
                 
                ),
              
              ),
              

        ),

    ) );