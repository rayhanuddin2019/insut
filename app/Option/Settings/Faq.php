<?php 

    // Faq
    CSF::createSection( INSUT_OPTION_KEY, array(
        'title'  => esc_html__( 'Faq', 'insut' ),
        'icon'   => 'fa fa-question-circle',
        'fields' => array(
            array(
                'id'        => 'faq_tab_list',
                'type'      => 'group',
                'title'      => esc_html__( 'Frequently Asked Questions', 'insut' ),
                'fields'    => array(
                
                  array(
                    'id'    => 'tab_menu',
                    'type'  => 'text',
                    'title' => esc_html__( 'Menu Name', 'insut' ),
                  ),
                  array(
                    'id'    => 'tab_menu_slug',
                    'type'  => 'text',
                    'title' => esc_html__( 'Menu Slug', 'insut' ),
                    'help' => esc_html__( 'Write down Slug with hypen and lowwecase latter', 'insut' ),
                    
                  ),
               
                  array(
                    'id'        => 'faq_question_list',
                    'type'      => 'group',
                    'title' => esc_html__( 'Question List', 'insut' ),
                    'fields'    => array(
                      array(
                        'id'    => 'question',
                        'type'  => 'textarea',
                        'title' => esc_html__( 'Faq Question', 'insut' ),
                      ),
                      array(
                        'id'    => 'answer',
                        'type'  => 'wp_editor',
                        'title' => esc_html__( 'Faq Answer', 'insut' ),
                      ),
                    ),
                  ),
                 
                ),
              
              ),
              

        ),

    ) );