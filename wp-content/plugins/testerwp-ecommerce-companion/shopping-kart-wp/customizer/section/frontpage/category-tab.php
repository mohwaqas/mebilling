<?php
$wp_customize->add_setting( 'shopping_kart_wp_disable_cat_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_disable_cat_sec', array(
                'label'                 => esc_html__('Disable Section', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_category_tab_section',
                'settings'              => 'shopping_kart_wp_disable_cat_sec',
            ) ) );
// section heading
$wp_customize->add_setting('shopping_kart_wp_cat_tab_heading', array(
        'default' => __('Best','shopping-kart-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_kart_wp_cat_tab_heading', array(
        'label'    => __('Section Heading', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_category_tab_section',
         'type'       => 'text',
));

// section subheading
$wp_customize->add_setting('shopping_kart_wp_cat_tab_subheading', array(
        'default' => __('IN THIS MONTH','shopping-kart-wp'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'shopping_kart_wp_cat_tab_subheading', array(
        'label'    => __('Section Sub Heading', 'shopping-kart-wp'),
        'section'  => 'shopping_kart_wp_category_tab_section',
         'type'       => 'text',
));


//= Choose All Category  =   
    if (class_exists( 'Shopping_Kart_WP_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('shopping_kart_wp_category_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'shopping_kart_wp_checkbox_explode'
    ));
    $wp_customize->add_control(new Shopping_Kart_WP_Customize_Control_Checkbox_Multiple(
            $wp_customize,'shopping_kart_wp_category_tab_list', array(
        'settings'=> 'shopping_kart_wp_category_tab_list',
        'label'   => __( 'Choose Categories To Show', 'shopping-kart-wp' ),
        'section' => 'shopping_kart_wp_category_tab_section',
        'choices' => shopping_kart_WP_get_category_list(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  

$wp_customize->add_setting('shopping_kart_wp_category_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'shopping_kart_wp_sanitize_select',
    ));
$wp_customize->add_control( 'shopping_kart_wp_category_optn', array(
        'settings' => 'shopping_kart_wp_category_optn',
        'label'   => __('Choose Option','shopping-kart-wp'),
        'section' => 'shopping_kart_wp_category_tab_section',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','shopping-kart-wp'),
        'featured'   => __('Featured','shopping-kart-wp'),
        'random'     => __('Random','shopping-kart-wp'),
            
        ),
    ));

$wp_customize->add_setting( 'shopping_kart_wp_single_row_slide_cat', array(
                'default'               => true,
                'sanitize_callback'     => 'shopping_kart_wp_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'shopping_kart_wp_single_row_slide_cat', array(
                'label'                 => esc_html__('Enable Single Row Slide', 'shopping-kart-wp'),
                'type'                  => 'checkbox',
                'section'               => 'shopping_kart_wp_category_tab_section',
                'settings'              => 'shopping_kart_wp_single_row_slide_cat',
            ) ) );


// Add an option to disable the logo.
  $wp_customize->add_setting( 'shopping_kart_wp_cat_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'shopping_kart_wp_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new Shopping_Kart_WP_Toggle_Control( $wp_customize, 'shopping_kart_wp_cat_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'shopping-kart-wp' ),
    'section'     => 'shopping_kart_wp_category_tab_section',
    'type'        => 'toggle',
    'settings'    => 'shopping_kart_wp_cat_slider_optn',
  ) ) );