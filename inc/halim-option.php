
<?php 

if(class_exists('CSF')){
    $prefix = 'halim_options';
    CSF::createOptions( $prefix, array(
        'menu_title' => __('Halim Options', 'halim'),
        'menu_slug' => 'halim-options',
        'framework_title' => 'Halim Option - <small>Halim Theme</small>',
        'menu_type' => 'submenu',
        'menu_parent' => 'themes.php',
        'menu_icon' => 'dashicons-admin-settings',

        // 'menu_type' => 'menu',
        // 'menu_icon' => 'dashicons-admin-multisite',
    ) );

    // header options
    CSF::createSection( $prefix, array(
        'id'     => 'header_options',
        'title'  => __('Header Options', 'halim'),
        'icon'=> 'fas fa-edit',
    ) );

    CSF::createSection( $prefix, array(
        'parent' => 'header_options',
        'title'  => __('Header Left', 'halim'),
        'icon'   => 'fa fa-home',
        'fields' => array(
            array(
                'id'    => 'header_email',
                'type'  => 'text',
                'title' => __('Email Address', 'halim'),
            ),
            array(
                'id'    => 'header_phone',
                'type'  => 'text',
                'title' => __('Phone Number', 'halim'),
            ),
        ),
    ) );

    CSF::createSection( $prefix, array(
        'parent' => 'header_options',
        'title'  => __('Header Right', 'halim'),
        'icon'   => 'fa fa-home',
        'fields' => array(
            array(
                'id'    => 'header_icons',
                'title' => 'Header Icons',
                'type'  => 'group',
                'button_title' => __('Add New Social Icon', 'halim'),
                'fields' => array(
                    array(
                        'id'    => 'social_icon',
                        'type'  => 'icon',
                        'title' => __('Social Icon', 'halim'),
                    ),
                    array(
                        'id'    => 'social_link',
                        'type'  => 'text',
                        'title' => __('Social Link', 'halim'),
                    ),
                    array(
                        'id'    => 'social_title',
                        'type'  => 'text',
                        'title' => __('Social Title', 'halim'),
                    ),
                ),
            ),
        ),
    ) );

    CSF::createSection( $prefix, array(
        'parent' => 'header_options',
        'title'  => __('Logo & Favicon', 'halim'),
        'icon'   => 'fa fa-arrow-right',
        'fields' => array(
            array(
                'id'    => 'logo',
                'type'  => 'upload',
                'title' => __('Upload Logo', 'halim'),
            ),
            array(
                'id'    => 'favicon',
                'type'  => 'upload',
                'title' => __('Upload Favicon', 'halim'),
            ),
        ),
    ) );

    // about options
    CSF::createSection( $prefix, array(
        'id'     => 'about_options',
        'title'  => __('About Section', 'halim'),
        'icon'=> 'fab fa-accusoft',
    ) );

    // About Section Content
    CSF::createSection( $prefix, array(
        'parent' => 'about_options',
        'title'  => __('About Section Content', 'halim'),
        'icon'   => 'fa fa-arrow-right',
        'fields' => array(
            array(
                'id'    => 'about_title',
                'type'  => 'text',
                'title' => __('About Title', 'halim'),
                'desc'  => __('Enter About Section Title', 'halim'),
            ),
            array(
                'id'    => 'about_subtitle',
                'type'  => 'text',
                'title' => __('About Subtitle', 'halim'),
                'desc'  => __('Write About Section Subtitle Here', 'halim'),
            ),
            array(
                'id'    => 'about_desc',
                'type'  => 'textarea',
                'title' => __('About Description', 'halim'),
            ),
        ),
    ) );

    // About Page Content
    CSF::createSection( $prefix, array(
        'parent' => 'about_options',
        'title'  => __('About Page Content', 'halim'),
        'icon'   => 'fa fa-arrow-right',
        'fields' => array(
            array(
                'id'    => 'about_content_title',
                'type'  => 'text',
                'title' => __('About Content Title', 'halim'),
                'desc'  => __('Enter About Content Title', 'halim'),
            ),
            array(
                'id'    => 'about_content',
                'type'  => 'textarea',
                'title' => __('About Content', 'halim'),
            ),
            array(
                'id'    => 'about_content_btn',
                'type'  => 'text',
                'title' => __('About Content Button Link', 'halim'),
            ),
        ),
    ) );

    // About Page Features
    CSF::createSection( $prefix, array(
        'parent' => 'about_options',
        'title'  => __('About Page Features', 'halim'),
        'icon'   => 'fa fa-arrow-right',

        'fields' => array(
            array(
                'id'    => 'about_page_features',
                'type'  => 'group',
                'title' => __('About Features', 'halim'),
                'button_title' => __('Add New Feature', 'halim'),
                'fields' => array(
                    array(
                        'id'    => 'feature_title',
                        'type'  => 'text',
                        'title' => __('About Page Feature Title', 'halim'),
                    ),
                    array(
                        'id'    => 'feature_content',
                        'type'  => 'textarea',
                        'title' => __('About Page Feature Content', 'halim'),
                    ),
                    array(
                        'id'    => 'feature_icon',
                        'type'  => 'icon',
                        'title' => __('About Page Feature Icon', 'halim'),
                    ),
                ),
            ),
        ),
    ) );

    // faq options
    CSF::createSection( $prefix, array(
        'id'     => 'faq_options',
        'title'  => __('FAQ Section', 'halim'),
        'icon'=> 'fas fa-question-circle',
    ) );

    // FAQ List
    CSF::createSection( $prefix, array(
        'parent' => 'faq_options',
        'title'  => __('FAQ List', 'halim'),
        'icon'   => 'fa fa-arrow-right',

        'fields' => array(
            array(
              'id'    => 'section_title',
              'type'  => 'text',
              'title' => __('FAQ Section Title', 'halim'),
              'desc'  => __('Enter FAQ Section Title', 'halim'),
            ),
            array(
                'id'    => 'faq_list',
                'type'  => 'group',
                'title' => __('Add New FAQ', 'halim'),
                'button_title' => __('Add New FAQ', 'halim'),
                'fields' => array(
                    array(
                        'id'    => 'faq_question',
                        'type'  => 'text',
                        'title' => __('FAQ Question', 'halim'),
                    ),
                    array(
                        'id'    => 'faq_answer',
                        'type'  => 'textarea',
                        'title' => __('FAQ Answer', 'halim'),
                    ),
                ),
            ),
        ),
    ) );

    // Skill List
       CSF::createSection( $prefix, array(
        'parent' => 'faq_options',
        'title'  => __('Skill List', 'halim'),
        'icon'   => 'fa fa-arrow-right',

        'fields' => array(
            array(
              'id'    => 'skill_title',
              'type'  => 'text',
              'title' => __('Skill Section Title', 'halim'),
              'desc'  => __('Enter Skill Section Title', 'halim'),
            ),
            array(
                'id'    => 'skill_list',
                'type'  => 'group',
                'title' => __('Add New Skill', 'halim'),
                'button_title' => __('Add New Skill', 'halim'),
                'fields' => array(
                    array(
                        'id'    => 'skill_name',
                        'type'  => 'text',
                        'title' => __('Skill Name', 'halim'),
                    ),
                    array(
                        'id'    => 'skill_percent',
                        'type'  => 'text',
                        'title' => __('Skill Percent', 'halim'),
                    ),
                ),
            ),
        ),
    ) );

    // counter options
    CSF::createSection( $prefix, array(
        'id'     => 'counter_options',
        'title'  => __('Counter Section', 'halim'),
        'icon'=> 'fas fa-stopwatch-20',
    ) );

    // Counter List
    CSF::createSection( $prefix, array(
        'parent' => 'counter_options',
        'title'  => __('Counter List', 'halim'),
        'icon'   => 'fa fa-arrow-right',

        'fields' => array(
            array(
                'id'    => 'counter_list',
                'type'  => 'group',
                'title' => __('Add New Counter', 'halim'),
                'button_title' => __('Add New Counter', 'halim'),
                'fields' => array(
                    array(
                        'id'    => 'counter_name',
                        'type'  => 'text',
                        'title' => __('Counter Name', 'halim'),
                    ),
                    array(
                        'id'    => 'counter_number',
                        'type'  => 'text',
                        'title' => __('Counter Number', 'halim'),
                    ),
                    array(
                        'id'    => 'counter_icon',
                        'type'  => 'icon',
                        'title' => __('Counter icon', 'halim'),
                    ),
                ),
            ),
        ),
    ) );

}