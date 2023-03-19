<?php

function _themename_customize_register($wp_customize) {
    /** 
     * Add Footer options section
     */
    $wp_customize->add_section('_themename_footer_options', array(
        'title' => esc_html__('Footer Options', '_themename'),
        'description' => esc_html__('You can change footer options from here', '_themename')
    ));

    /** 
     * Site info
     */
    $wp_customize->add_setting('_themename_site_info', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('_themename_site_info', array(
        'type' => 'text',
        'label' => esc_html__('Site Info', '_themename'),
        'section' => '_themename_footer_options'
    ));

    /** 
     * Footer color mode
     */

    $wp_customize->add_setting('_themename_footer_bg', array(
        'default' => 'dark',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('_themename_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__('Footer background', '_themename'),
        'choices' => array(
            'light' => esc_html__('Light'),
            'dark' => esc_html__('Dark')

        ),
        'section' => '_themename_footer_options'
    ));

    /** 
     * Footer layout
     */

    $wp_customize->add_setting('_themename_footer_layout', array(
        'default' => '3,3,3,3',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => '_themename_validate_footer_layout'
    ));

    $wp_customize->add_control('_themename_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__('Footer layout', '_themename'),
        'section' => '_themename_footer_options'
    ));
}
add_action('customize_register', '_themename_customize_register');


// function _themename_sanitize_input($input) {
//     $allowed = array('a' => array(
//         'href' => array(),
//         'title' => array(),
//     ));

//     return wp_kses($input,  $allowed);
// }

function _themename_validate_footer_layout($validity, $value) {
    if (!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__('Footer layout is invalid', '_themename'));
    }
    return $validity;
}
