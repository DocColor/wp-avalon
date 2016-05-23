<?php

function avalon_customize_register($wp_customize) {

  class WP_Avalon_Theme_Support_WP_Property extends WP_Customize_Control {

    public function render_content() {
      echo __('Please, install or activate a <a href="https://www.usabilitydynamics.com/product/wp-property">WP Property</a> FREE plugin to use this option ', 'wp-avalon');
    }

  }

  $wp_customize->remove_section('colors');

  $shortcode_notice = __('Notice: Shortcodes will be applied after the page reload', 'wp-avalon');

//    COLOR SCHEME
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('general_colors', array(
      'priority' => 30,
      'capability' => 'edit_theme_options',
      'title' => __('Color Scheme', 'wp-avalon')
  ));

//    Header colors section
  $wp_customize->add_section('avalon_header_colors_section', array(
      'title' => __('Header colors scheme', 'wp-avalon'),
      'priority' => 1,
      'panel' => 'general_colors'
  ));

//    header bg color
  $wp_customize->add_setting('avalon_header_bg_color', array(
      'default' => '#19294c',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bg_color', array(
      'label' => __('Header background color', 'wp-avalon'),
      'description' => __('This color will be used for several blocks on the site: responsive menu background, overview and header.', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 1
  )));
//    header top border color
  $wp_customize->add_setting('avalon_header_top_border_color', array(
      'default' => '#101a30',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_top_border_color', array(
      'label' => __('Header top border color', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 2
  )));
//    header bottom border color
  $wp_customize->add_setting('avalon_header_bottom_border_color', array(
      'default' => '#2f3d5d',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bottom_border_color', array(
      'label' => __('Header bottom border color', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 3
  )));
//    Secondary header bg color
  $wp_customize->add_setting('avalon_secondary_header_bg_color', array(
      'default' => '#2b5188',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_header_bg_color', array(
      'label' => __('Secondary header background color', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 4
  )));
//    Header bar bg color
  $wp_customize->add_setting('avalon_header_bar_bg_color', array(
      'default' => '#0b1a3a',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_bg_color', array(
      'label' => __('Header bar background color', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 5
  )));
//    Header bar border color
  $wp_customize->add_setting('avalon_header_bar_border_color', array(
      'default' => '#2f3d5d',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_border_color', array(
      'label' => __('Header bar bottom border color', 'wp-avalon'),
      'section' => 'avalon_header_colors_section',
      'priority' => 6
  )));


//    Menu text colors section
  $wp_customize->add_section('avalon_menu_color_scheme', array(
      'title' => __('Menu color scheme', 'wp-avalon'),
      'priority' => 2,
      'panel' => 'general_colors'
  ));

//    Menu text color
  $wp_customize->add_setting('avalon_menu_text_color', array(
      'default' => '#FFFFFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_menu_text_color', array(
      'label' => __('Menu text color', 'wp-avalon'),
      'section' => 'avalon_menu_color_scheme',
      'priority' => 1
  )));


//    Post and Page title color section
  $wp_customize->add_section('avalon_postpage_color_scheme', array(
      'title' => __('Post and Page title color scheme', 'wp-avalon'),
      'priority' => 3,
      'panel' => 'general_colors'
  ));

//    Single & Page title color
  $wp_customize->add_setting('avalon_page_title_color', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_title_color', array(
      'label' => __('Single and Page title color', 'wp-avalon'),
      'section' => 'avalon_postpage_color_scheme',
      'priority' => 1
  )));

//    Single & Page tagline color
  $wp_customize->add_setting('avalon_page_tagline_color', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_tagline_color', array(
      'label' => __('Single and Page tagline color', 'wp-avalon'),
      'section' => 'avalon_postpage_color_scheme',
      'priority' => 2
  )));


//    Buttons color scheme section
  $wp_customize->add_section('avalon_buttons_color_scheme', array(
      'title' => __('Buttons color scheme', 'wp-avalon'),
      'priority' => 4,
      'panel' => 'general_colors'
  ));

//    Button bg color
  $wp_customize->add_setting('avalon_button_bg_color', array(
      'default' => '#19294c',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_bg_color', array(
      'label' => __('Buttons background color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 1
  )));

//    Button border color
  $wp_customize->add_setting('avalon_button_border_color', array(
      'default' => '#0b1a3a',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_border_color', array(
      'label' => __('Buttons border color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 2
  )));

//    Button text color
  $wp_customize->add_setting('avalon_button_text_color', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_text_color', array(
      'label' => __('Buttons text color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 3
  )));

//    Button bg color hover
  $wp_customize->add_setting('avalon_hover_button_bg_color', array(
      'default' => '#0b1a3a',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_bg_color', array(
      'label' => __('Buttons hover background color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 4
  )));

//    Button border color hover
  $wp_customize->add_setting('avalon_hover_button_border_color', array(
      'default' => '#0b1a3a',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_border_color', array(
      'label' => __('Buttons hover border color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 5
  )));

//    Button text color hover
  $wp_customize->add_setting('avalon_hover_button_text_color', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_text_color', array(
      'label' => __('Buttons hover text color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 6
  )));

//    Secondary button text color hover
  $wp_customize->add_setting('avalon_secondary_button_color', array(
      'default' => '#19294c',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_color', array(
      'label' => __('Property sort buttons background color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 7
  )));

//    Secondary button text color hover
  $wp_customize->add_setting('avalon_secondary_button_text_color', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_text_color', array(
      'label' => __('Property sort buttons text color', 'wp-avalon'),
      'section' => 'avalon_buttons_color_scheme',
      'priority' => 8
  )));

//    Permalinks color scheme section
  $wp_customize->add_section('avalon_permalinks_color_scheme', array(
      'title' => __('Permalinks color scheme', 'wp-avalon'),
      'priority' => 5,
      'panel' => 'general_colors'
  ));

//    Permalink color
  $wp_customize->add_setting('avalon_permalink_color', array(
      'default' => '#337ab7',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_color', array(
      'label' => __('Permalinks color', 'wp-avalon'),
      'section' => 'avalon_permalinks_color_scheme',
      'priority' => 1
  )));

//    Permalink hover color
  $wp_customize->add_setting('avalon_permalink_hover_color', array(
      'default' => '#23527c',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_hover_color', array(
      'label' => __('Permalinks hover color', 'wp-avalon'),
      'section' => 'avalon_permalinks_color_scheme',
      'priority' => 2
  )));


//  --------------------------------------------------------------------------
//  Header settings
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('header_main_settings_control', array(
      'priority' => 31,
      'capability' => 'edit_theme_options',
      'title' => __('Header settings', 'wp-avalon')
  ));

  // Login/Register settings
  $wp_customize->add_section('header_main_settings_section', array(
      'title' => __('Login/Register', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'priority' => 1,
  ));
  // Show default Login/Register button
  $wp_customize->add_setting('header_main_show_login_register_button', array(
      'default' => '1',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_main_show_login_register_button', array(
      'label' => __('Show Login/Register button', 'wp-avalon'),
      'section' => 'header_main_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));

  // Header image settings
  $wp_customize->add_section('header_image_settings_section', array(
      'title' => __('Header image settings', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'priority' => 2,
  ));
  // Show fetured image in header 
  $wp_customize->add_setting('header_image_disable', array(
      'default' => '1',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image_disable', array(
      'label' => __('Show full section with header image', 'wp-avalon'),
      'section' => 'header_image_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  // Show fetured image in header instead header image 
  $wp_customize->add_setting('header_image_show_featured_image_in_head', array(
      'default' => '1',
  ));
  $wp_customize->add_control('header_image_show_featured_image_in_head', array(
      'label' => __('Show fetured image in header instead of header image', 'wp-avalon'),
      'section' => 'header_image_settings_section',
      'type' => 'checkbox',
      'priority' => 2
  ));
  // Header image
  $wp_customize->add_setting('header_image', array(
      'default' => get_template_directory_uri() . '/static/images/default-header-image.jpg',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
      'label' => __('Header image', 'wp-avalon'),
      'section' => 'header_image_settings_section',
      'priority' => 3
  )));
//    Blackout color
  $wp_customize->add_setting('header_image__blackout_color', array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_image__blackout_color', array(
      'label' => __('Blackout color for header image', 'wp-avalon'),
      'section' => 'header_image_settings_section',
      'priority' => 4
  )));
//    Blackout opacity
  $wp_customize->add_setting('header_image__opacity_setting', array(
      'capability' => 'edit_theme_options',
      'default' => '0.3',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image__opacity_setting', array(
      'label' => __('Blackout opacity (type "0.0-1.0" of opacity). Default: 0', 'wp-avalon'),
      'section' => 'header_image_settings_section',
      'type' => 'range',
      'input_attrs' => array(
          'min' => 0,
          'max' => 1,
          'step' => 0.1,
      ),
      'priority' => 5
  ));

//    Wellcome section
  $wp_customize->add_section('header_wellcome_section', array(
      'title' => __('Wellcome section', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'description' => '',
      'priority' => 3,
  ));

  // Disable wellcome section
  $wp_customize->add_setting('header_wellcome_disable', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_wellcome_disable', array(
      'label' => __('Disable "Wellcome" section', 'wp-avalon'),
      'section' => 'header_wellcome_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  // Wellcome title
  $wp_customize->add_setting('header_wellcome_title', array(
      'default' => __('Wellcome to WP Avalon', 'wp-avalon'),
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_wellcome_title', array(
      'label' => __('Wellcome section title', 'wp-avalon'),
      'section' => 'header_wellcome_section',
      'type' => 'text',
      'priority' => 2
  ));
  // Wellcome text
  $wp_customize->add_setting('header_wellcome_text', array(
      'default' => __('WP Avalon - FREE wordpress theme. Created special for using with <a href="#">wp-property</a> plugin', 'wp-avalon'),
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_wellcome_text', array(
      'label' => __('Wellcome section text', 'wp-avalon'),
      'description' => $shortcode_notice,
      'section' => 'header_wellcome_section',
      'type' => 'textarea',
      'priority' => 3
  ));
  if (function_exists('ud_check_wp_property')) :
    $wp_customize->add_setting('header_wellcome_property_search_disable', array(
        'default' => '',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('header_wellcome_property_search_disable', array(
        'label' => __('Disable "Property search" in Wellcome section', 'wp-avalon'),
        'section' => 'header_wellcome_section',
        'type' => 'checkbox',
        'priority' => 4
    ));
  else :
    // disable section
    $wp_customize->add_setting('header_wellcome_property_search', array(
        'sanitize_callback' => 'avalon_closed_section'
    ));
    $wp_customize->add_control(new WP_Avalon_Theme_Support_WP_Property($wp_customize, 'header_wellcome_property_search', array(
        'section' => 'header_wellcome_section',
        'priority' => 4
    )));
    // description
    $wp_customize->add_setting('header_wellcome_property_search_title', array(
        'default' => __('At that place you can enable default property search', 'wp-avalon'),
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('header_wellcome_property_search_title', array(
        'label' => __('"Property search" description', 'wp-avalon'),
        'description' => $shortcode_notice,
        'section' => 'header_wellcome_section',
        'type' => 'textarea',
        'priority' => 5
    ));
  endif;

//    Logo settings
  $wp_customize->add_section('header_logo_settings', array(
      'title' => __('Logo settings', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'description' => '',
      'priority' => 4,
  ));
//    Logo icon
  $wp_customize->add_setting('header_logo_icon_settings', array(
      'default' => get_template_directory_uri() . '/static/images/logo-icon.png',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_icon_settings', array(
      'label' => __('Logo icon (Recommended height 20px)', 'wp-avalon'),
      'section' => 'header_logo_settings',
  )));
//    Logo img margin top
  $wp_customize->add_setting('header_logo_icon_margin_setting', array(
      'default' => '-5',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_icon_margin_setting', array(
      'label' => __('Margin top in px', 'wp-avalon'),
      'section' => 'header_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
  ));
//    Logo img margin top
  $wp_customize->add_setting('header_logo_icon_margin_right_setting', array(
      'default' => '10',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_icon_margin_right_setting', array(
      'label' => __('Margin right in px', 'wp-avalon'),
      'section' => 'header_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
  ));
//    logo text settings
  $wp_customize->add_setting('header_logo_text_settings', array(
      'default' => 'WP Avalon',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_text_settings', array(
      'label' => __('Logo text', 'wp-avalon'),
      'section' => 'header_logo_settings',
  ));
//    Logo text color
  $wp_customize->add_setting('header_logo_text_color_settings', array(
      'default' => '#FFF',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_logo_text_color_settings', array(
      'label' => __('Logo Text Color', 'wp-avalon'),
      'section' => 'header_logo_settings',
  )));
//    Logo image
  $wp_customize->add_setting('header_logo_big_image_settings', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_big_image_settings', array(
      'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
      'section' => 'header_logo_settings',
  )));
//    Logo img margin top
  $wp_customize->add_setting('header_logo_img_margin_setting', array(
      'default' => '0',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_img_margin_setting', array(
      'label' => __('Margin top in px', 'wp-avalon'),
      'section' => 'header_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
  ));

  // Header Contact us settings
  $wp_customize->add_section('header_contuctus_settings_section', array(
      'title' => __('Contact us settings', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'priority' => 5,
  ));
  // Disable "Contact us" area
  $wp_customize->add_setting('header_contuctus_disable_settings', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contuctus_disable_settings', array(
      'label' => __('Disable "Contact us" area', 'wp-avalon'),
      'section' => 'header_contuctus_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  // "Contact us" area title
  $wp_customize->add_setting('header_contuctus_title_settings', array(
      'capability' => 'edit_theme_options',
      'default' => __('CONTACT FORM', 'wp-avalon'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contuctus_title_settings', array(
      'label' => __('"Contact us" area title', 'wp-avalon'),
      'section' => 'header_contuctus_settings_section',
      'type' => 'text',
      'priority' => 2
  ));
  // "Contact us" area description
  $wp_customize->add_setting('header_contuctus_description_settings', array(
      'capability' => 'edit_theme_options',
      'default' => __('Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.', 'wp-avalon'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contuctus_description_settings', array(
      'label' => __('"Contact us" area description', 'wp-avalon'),
      'description' => $shortcode_notice,
      'section' => 'header_contuctus_settings_section',
      'type' => 'textarea',
      'priority' => 3
  ));
  // "Contact us" form options
  $wp_customize->add_setting('header_contuctus_form_settings', array(
      'default' => 'default',
      'capability' => 'edit_theme_options'
  ));
  $wp_customize->add_control('header_contuctus_form_settings', array(
      'label' => __('Contact us foms settings', 'themename'),
      'section' => 'header_contuctus_settings_section',
      'priority' => 4,
      'type' => 'radio',
      'choices' => array(
          'default' => __('Use default form (emails will be send on site admin email)', 'wp-avalon'),
          'custom' => __('Use custom form with shortcode', 'wp-avalon'),
      ),
  ));
  // "Contact us" custom form shortcode
  $wp_customize->add_setting('header_contuctus_shortcode_settings', array(
      'capability' => 'edit_theme_options',
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contuctus_shortcode_settings', array(
      'label' => __('"Contact us" custom form shortcode', 'wp-avalon'),
      'description' => $shortcode_notice,
      'section' => 'header_contuctus_settings_section',
      'type' => 'text',
      'priority' => 5
  ));
  // "Contact us" custom form CSS
  $wp_customize->add_setting('header_contuctus_css_settings', array(
      'capability' => 'edit_theme_options',
      'default' => ''
  ));
  $wp_customize->add_control('header_contuctus_css_settings', array(
      'label' => __('"Contact us" custom form CSS', 'wp-avalon'),
      'section' => 'header_contuctus_settings_section',
      'type' => 'textarea',
      'priority' => 6
  ));


//  Location area settings
  $wp_customize->add_section('header_location_area_section', array(
      'title' => __('"Location" area settings', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'description' => '',
      'priority' => 6,
  ));
  // Disable "Location" area
  $wp_customize->add_setting('header_location_area_settings', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_location_area_settings', array(
      'label' => __('Disable "Location" area', 'wp-avalon'),
      'section' => 'header_location_area_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  // "Location" area title
  $wp_customize->add_setting('header_location_area_title', array(
      'capability' => 'edit_theme_options',
      'default' => __('Location & Address', 'wp-avalon'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_location_area_title', array(
      'label' => __('"Location" area title', 'wp-avalon'),
      'section' => 'header_location_area_section',
      'type' => 'text',
      'priority' => 2
  ));
  // "Location" adress
  $wp_customize->add_setting('header_location_area_map_location', array(
      'capability' => 'edit_theme_options',
      'default' => ''
  ));
  $wp_customize->add_control('header_location_area_map_location', array(
      'label' => __('"Location" adress (for google map)', 'wp-avalon'),
      'section' => 'header_location_area_section',
      'type' => 'text',
      'priority' => 3
  ));
  // "Location" image
  $wp_customize->add_setting('header_location_area_image', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_location_area_image', array(
      'label' => __('or use image', 'wp-avalon'),
      'section' => 'header_location_area_section',
      'priority' => 4
  )));
  // "Location" description
  $wp_customize->add_setting('header_location_area_description', array(
      'capability' => 'edit_theme_options',
      'default' => __('Here you can add some decription', 'wp-avalon'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_location_area_description', array(
      'label' => __('"Location" area decrpiption', 'wp-avalon'),
      'description' => $shortcode_notice,
      'section' => 'header_location_area_section',
      'type' => 'textarea',
      'priority' => 5
  ));


// -----------------------------------------------------------------------------
//    WP Property settings
// -----------------------------------------------------------------------------
  if (function_exists('ud_check_wp_property')) {
    $wp_customize->add_panel('wp_property_settings_control', array(
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title' => __('WP Property settings', 'wp-avalon')
    ));

    // Main settings
    $wp_customize->add_section('wp_property_settings_section', array(
        'title' => __('Settings', 'wp-avalon'),
        'panel' => 'wp_property_settings_control',
        'priority' => 1,
    ));

    // Show default property search
    $wp_customize->add_setting('wp_property_show_default_property_search', array(
        'default' => '1'
    ));
    $wp_customize->add_control('wp_property_show_default_property_search', array(
        'label' => __('Show default property search on "Front page" widget area', 'wp-avalon'),
        'section' => 'wp_property_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
  } else {
    $wp_customize->add_section('wp_property_disabled_settings_section', array(
        'title' => __('WP Property settings', 'wp-avalon'),
        'priority' => 32,
    ));
    // disable section
    $wp_customize->add_setting('wp_property_disabled_settings_section', array(
        'sanitize_callback' => 'avalon_closed_section'
    ));
    $wp_customize->add_control(new WP_Avalon_Theme_Support_WP_Property($wp_customize, 'wp_property_disabled_settings_section', array(
        'section' => 'wp_property_disabled_settings_section',
    )));
  }


// -----------------------------------------------------------------------------
//    Fronpage top widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('frontpage_top_widget_area_panel', array(
      'priority' => 33,
      'capability' => 'edit_theme_options',
      'title' => __('Frontpage multi-sidebar widget area', 'wp-avalon')
  ));

  // Fronpage top widget area settings
  $wp_customize->add_section('frontpage_top_widget_area_settings_section', array(
      'title' => __('Area settings', 'wp-avalon'),
      'panel' => 'frontpage_top_widget_area_panel',
      'priority' => 1,
  ));
  // disable section
  $wp_customize->add_setting('frontpage_top_widget_area_settings', array(
      'default' => ''
  ));
  $wp_customize->add_control('frontpage_top_widget_area_settings', array(
      'label' => __('Disable widget area', 'wp-avalon'),
      'section' => 'frontpage_top_widget_area_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));



// -----------------------------------------------------------------------------
//    Fronpage text widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('frontpage_features_area_panel', array(
      'priority' => 34,
      'capability' => 'edit_theme_options',
      'title' => __('Avalon features area', 'wp-avalon')
  ));

  // Fronpage top widget area settings
  $wp_customize->add_section('frontpage_features_area_settings_section', array(
      'title' => __('Area settings', 'wp-avalon'),
      'panel' => 'frontpage_features_area_panel',
      'priority' => 1,
  ));
  // disable section
  $wp_customize->add_setting('frontpage_features_area_settings', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('frontpage_features_area_settings', array(
      'label' => __('Disable widget area', 'wp-avalon'),
      'section' => 'frontpage_features_area_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));



// -----------------------------------------------------------------------------
//    Headlights widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('headlights_widget_area_panel', array(
      'priority' => 35,
      'capability' => 'edit_theme_options',
      'title' => __('Headlights widget area settings', 'wp-avalon')
  ));

//    Headlight Settings
  $wp_customize->add_section('headlights_wa_settings_section', array(
      'title' => __('Area settings', 'wp-avalon'),
      'panel' => 'headlights_widget_area_panel',
      'priority' => 1,
  ));
// disable section
  $wp_customize->add_setting('headlights_wa_disable_setting', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('headlights_wa_disable_setting', array(
      'label' => __('Disable widget area section', 'wp-avalon'),
      'section' => 'headlights_wa_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
// section title
  $wp_customize->add_setting('headlights_wa_title_setting', array(
      'default' => __('Headlight widget area title', 'wp-avalon'),
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('headlights_wa_title_setting', array(
      'label' => __('Headlight widget area title', 'wp-avalon'),
      'section' => 'headlights_wa_settings_section',
      'type' => 'text',
      'priority' => 2
  ));


//  --------------------------------------------------------------------------
//  WP Property desctiption text
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('property_description_area_panel', array(
      'priority' => 36,
      'capability' => 'edit_theme_options',
      'title' => __('WP Property desctiption section', 'wp-avalon')
  ));

  // WP Property desctiption settings
  $wp_customize->add_section('property_description_area_section', array(
      'title' => __('Settings', 'wp-avalon'),
      'panel' => 'property_description_area_panel',
      'priority' => 1,
  ));
  // WP Property desctiption section
  $wp_customize->add_setting('property_description_disable', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('property_description_disable', array(
      'label' => __('Disable section', 'wp-avalon'),
      'section' => 'property_description_area_section',
      'type' => 'checkbox',
      'priority' => 1
  ));


//  --------------------------------------------------------------------------
//  Default property overview settings
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('property_overview_area_panel', array(
      'priority' => 37,
      'capability' => 'edit_theme_options',
      'title' => __('Default property overview section', 'wp-avalon')
  ));

  // Property overview settings
  $wp_customize->add_section('property_overview_settings_section', array(
      'title' => __('Settings', 'wp-avalon'),
      'panel' => 'property_overview_area_panel',
      'priority' => 1,
  ));
  // Show default property overview section
  $wp_customize->add_setting('property_overview_disable', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('property_overview_disable', array(
      'label' => __('Disable section', 'wp-avalon'),
      'section' => 'property_overview_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  $wp_customize->add_setting('property_overview_title', array(
      'default' => __('Property overview', 'wp-avalon'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('property_overview_title', array(
      'label' => __('Section title', 'wp-avalon'),
      'section' => 'property_overview_settings_section',
      'type' => 'text',
      'priority' => 2
  ));
  // Property overview widget area
  $wp_customize->add_section('property_overview_widget_area', array(
      'title' => __('Property overview widget area', 'wp-avalon'),
      'panel' => 'property_overview_settings_control',
      'priority' => 2,
  ));

//  --------------------------------------------------------------------------
//  Addons section
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('addons_area_panel', array(
      'priority' => 38,
      'capability' => 'edit_theme_options',
      'title' => __('Property add-ons section', 'wp-avalon')
  ));

  // Addons settings
  $wp_customize->add_section('addons_settings_section', array(
      'title' => __('Settings', 'wp-avalon'),
      'panel' => 'addons_area_panel',
      'priority' => 1,
  ));
  // Show addons section
  $wp_customize->add_setting('addons_disable', array(
      'default' => '',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('addons_disable', array(
      'label' => __('Disable section', 'wp-avalon'),
      'section' => 'addons_settings_section',
      'type' => 'checkbox',
      'priority' => 1
  ));
  // Addons section title
  $wp_customize->add_setting('addons_section_title', array(
      'default' => __('WP Property addons', 'wp-title'),
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('addons_section_title', array(
      'label' => __('Section title', 'wp-avalon'),
      'section' => 'addons_settings_section',
      'type' => 'text',
      'priority' => 2
  ));


//  --------------------------------------------------------------------------
//  Front page Container
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('avalon_frontpage_container', array(
      'priority' => 39,
      'capability' => 'edit_theme_options',
      'title' => __('Frontpage container section', 'wp-avalon')
  ));

  // FP settings
  $wp_customize->add_section('avalon_frontpage_container_settings', array(
      'title' => __('Frontpage container settings', 'wp-avalon'),
      'panel' => 'avalon_frontpage_container',
      'priority' => 1,
  ));
  // Show container
  $wp_customize->add_setting('avalon_frontpage_container_disable', array(
      'default' => 1
  ));
  $wp_customize->add_control('avalon_frontpage_container_disable', array(
      'label' => __('Disable default content on front page', 'wp-avalon'),
      'section' => 'avalon_frontpage_container_settings',
      'type' => 'checkbox',
      'priority' => 1
  ));


//  --------------------------------------------------------------------------
//  Footer
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('footer_area_panel', array(
      'priority' => 40,
      'capability' => 'edit_theme_options',
      'title' => __('Footer section', 'wp-avalon')
  ));

//    FOOTER Logo settings
  $wp_customize->add_section('footer_logo_settings', array(
      'title' => __('Footer Logo settings', 'wp-avalon'),
      'panel' => 'footer_area_panel',
      'priority' => 1,
  ));
//    Footer Logo icon
  $wp_customize->add_setting('footer_logo_icon_settings', array(
      'default' => get_template_directory_uri() . '/static/images/footer-logo-icon.png',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_icon_settings', array(
      'label' => __('Logo icon (Recommended height 20px)', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'priority' => 1
  )));
//    Footer Logo img margin top
  $wp_customize->add_setting('footer_logo_icon_margin_setting', array(
      'default' => '-5',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_icon_margin_setting', array(
      'label' => __('Margin top in px', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
      'priority' => 2
  ));
//    Footer Logo img margin right
  $wp_customize->add_setting('footer_logo_icon_margin_right_setting', array(
      'default' => '10',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_icon_margin_right_setting', array(
      'label' => __('Margin right in px', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
      'priority' => 3
  ));
//    Footer logo text settings
  $wp_customize->add_setting('footer_logo_text_settings', array(
      'default' => 'WP Avalon',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_text_settings', array(
      'label' => __('Logo text', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'priority' => 4
  ));
//    Footer Logo text color
  $wp_customize->add_setting('footer_logo_text_color_settings', array(
      'default' => '#a7a7a7',
      'sanitize_callback' => 'sanitize_hex_color',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_logo_text_color_settings', array(
      'label' => __('Logo Text Color', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'priority' => 5
  )));
//    Footer Logo image
  $wp_customize->add_setting('footer_logo_big_image_settings', array(
      'default' => '',
      'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_big_image_settings', array(
      'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'priority' => 6
  )));
//    Footer Logo img margin top
  $wp_customize->add_setting('footer_logo_img_margin_setting', array(
      'default' => '0',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_img_margin_setting', array(
      'label' => __('Margin top in px', 'wp-avalon'),
      'section' => 'footer_logo_settings',
      'type' => 'number',
      'input_attrs' => array(
          'min' => -50,
          'max' => 50,
          'step' => 1,
      ),
      'priority' => 7
  ));

//    Copyrights
  $wp_customize->add_section('avalon_copyrights', array(
      'title' => __('Copyrights', 'wp-avalon'),
      'panel' => 'footer_area_panel',
      'priority' => 2,
  ));
//    copyright settings
  $wp_customize->add_setting('avalon_copyrights_settings', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
  ));
  $wp_customize->add_control('avalon_copyrights_control', array(
      'label' => __('Copyrights', 'wp-avalon'),
      'section' => 'avalon_copyrights',
      'settings' => 'avalon_copyrights_settings',
      'priority' => 1
  ));
}

add_action('customize_register', 'avalon_customize_register');

function avalon_closed_section($input) {
  return $input;
  echo '23456789';
}

function avalon_customize_css() {
  ?>
  <style type="text/css">

    body header .container .navigation-box .navigation-wrapper {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
    }

    body header .container .logotype a span { 
      color:<?php echo get_theme_mod('header_logo_text_color_settings', '#FFF'); ?>;
    }
    body .footer .footer-area .logotype a span { 
      color:<?php echo get_theme_mod('footer_logo_text_color_settings', '#a7a7a7'); ?>;
    }

    body header {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
      border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
      border-top: 1px solid <?php echo get_theme_mod('avalon_header_top_border_color', '#101a30'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper {
      border-right: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button {
      border-left: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
    }

    body .header-bar {
      background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#0b1a3a'); ?>;
      border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bar_border_color', '#2f3d5d'); ?>;
    }
    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button:hover,
    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button.active {
      background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#0b1a3a'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .site-header-menu .main-navigation ul li a {
      color: <?php echo get_theme_mod('avalon_menu_text_color', '#FFFFFF'); ?>;
    }

    body main.main-content .secondary-header {
      background-color: <?php echo get_theme_mod('avalon_secondary_header_bg_color', '#2b5188'); ?>
    }

    body main.main-content .secondary-header .shi__blackout {
      background-color: <?php echo get_theme_mod('header_image__blackout_color', '#000000'); ?>;
      opacity: <?php echo get_theme_mod('header_image__opacity_setting', '0.3'); ?>;
    }

    body main.main-content .secondary-header h1.page-title {
      color: <?php echo get_theme_mod('avalon_page_title_color', '#FFF'); ?>;
    }
    body main.main-content .secondary-header h3.page-tagline {
      color: <?php echo get_theme_mod('avalon_page_tagline_color', '#FFF'); ?>;
    }
    body main.main-content .container .frontpage-avalon-features-area .featured-text-widget .ftw__title, 
    body main.main-content .container .frontpage-property-description-area .featured-text-widget .ftw__title,
    body main.main-content .container .frontpage-overview-widget-area .fowa__container .property .property_div_box .wpp_overview_right_column .property_bottom,
    .wpp_property_overview_shortcode .wpp_grid_view.wpp_property_view_result .all-properties .property .property_div_box .wpp_overview_right_column .property_bottom {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
    }


    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a,
    .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button,
    .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button,
    .wpp_property_overview_shortcode .properties_pagination .wpp_property_results_options .wpp_sorter_options .wpp_sortable_link,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button {
      background-color: <?php echo get_theme_mod('avalon_secondary_button_color', '#19294c'); ?>;
      color: <?php echo get_theme_mod('avalon_secondary_button_text_color', '#FFF'); ?>;
    }

    body .wpp_feps_login_box .line .login_link .lost_pass_link,
    body .btn-info,
    body a.btn-info,
    body .btn.btn-info,
    body a.btn.btn-info,
    body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button,
    body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button,
    body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button,
    .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button,
    body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info,
    body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a,
    body input[type="button"],
    body input[type="submit"],
    body input.submit-btn,
    body button.submit-btn,
    body a.submit-btn,
    body span.submit-btn,
    body input.submit,
    body button.submit,
    body a.submit,
    body button[type="submit"],
    body input.wpp_feps_submit_form,
    body button.wpp_feps_submit_form,
    body a.wpp_feps_submit_form,
    body input.search_b,
    body button.search_b,
    body a.search_b,
    body input.show_more.btn,
    body button.show_more.btn,
    body a.show_more.btn,
    body p.view-all a.btn,
    body p.more a.btn {
      background-color: <?php echo get_theme_mod('avalon_button_bg_color', '#19294c'); ?>;
      border-color: <?php echo get_theme_mod('avalon_button_border_color', '#0b1a3a'); ?>;
      color: <?php echo get_theme_mod('avalon_button_text_color', '#FFF'); ?>;
    }
    body .wpp_feps_login_box .line .login_link .lost_pass_link:hover,
    body .btn-info:hover,
    body a.btn-info:hover,
    body .btn.btn-info:hover,
    body a.btn.btn-info:hover,
    body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover,
    body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover,
    body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover,
    .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover,
    body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li.active,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover,
    body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a:hover,
    body input[type="button"]:hover,
    body input[type="submit"]:hover,
    body input.submit-btn:hover,
    body button.submit-btn:hover,
    body a.submit-btn:hover,
    body span.submit-btn:hover,
    body input.submit:hover,
    body button.submit:hover,
    body a.submit:hover,
    body button[type="submit"]:hover,
    body input.wpp_feps_submit_form:hover,
    body button.wpp_feps_submit_form:hover,
    body a.wpp_feps_submit_form:hover,
    body input.search_b:hover,
    body button.search_b:hover,
    body a.search_b:hover,
    body input.show_more.btn:hover,
    body button.show_more.btn:hover,
    body a.show_more.btn:hover,
    body p.view-all a.btn:hover,
    body p.more a.btn:hover {
      background-color: <?php echo get_theme_mod('avalon_hover_button_bg_color', '#0b1a3a'); ?>;
      border-color: <?php echo get_theme_mod('avalon_hover_button_border_color', '#0b1a3a'); ?>;
      color: <?php echo get_theme_mod('avalon_hover_button_text_color', '#FFF'); ?>;
    }

    a {
      color: <?php echo get_theme_mod('avalon_permalink_color', '#337ab7'); ?>;
    }
    a:focus,
    a:hover {
      color: <?php echo get_theme_mod('avalon_permalink_hover_color', '#23527c'); ?>;
    }

  </style>
  <?php
}

add_action('wp_head', 'avalon_customize_css');
