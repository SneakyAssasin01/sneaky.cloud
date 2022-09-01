<?php
/* Customizer Code HERE */

function computer_repair_theme_customizer($wp_customize) {

    // Customizer Title Control
    class WP_Customize_Title_Control extends WP_Customize_Control {

        public function __construct($manager, $id, $args = array()) {
            parent::__construct($manager, $id, $args);
        }

        public function render_content() {
            ?><h3><?php echo esc_html($this->label); ?></h3><?php
        }

    }

    $wp_customize->add_panel('all_styling_panel', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Styling Settings', 'computer-repair'),
        'description' => esc_html__('All Styling Settings', 'computer-repair'),
    ));

    //Comon color

    $wp_customize->add_section('computer_comon_section', array(
        'title' => esc_html__('Comon Color', 'computer-repair'),
        'priority' => 1,
        'panel' => 'all_styling_panel'
    ));
    $wp_customize->add_setting('computer_services_colors[body_color]', array(
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[body_color]', array(
        'label' => esc_html__('Body Text Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 1,
    )));
	
	/* $wp_customize->add_setting('computer_services_colors[body_color_hover]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[body_color_hover]', array(
        'label' => esc_html__('Body Text Color Hover', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 2,
    )));*/

    $wp_customize->add_setting('computer_services_colors[heading_color]', array(
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[heading_color]', array(
        'label' => esc_html__('Heading Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 2,
    )));


    $wp_customize->add_setting('computer_services_colors[heading_white_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[heading_white_color]', array(
        'label' => esc_html__('Heading White Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[body_white_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[body_white_color]', array(
        'label' => esc_html__('Body White Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[theme_active_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[theme_active_color]', array(
        'label' => esc_html__('Theme Active Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[theme_gradient_primary_color]', array(
        'default' => '#6782c9',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[theme_gradient_primary_color]', array(
        'label' => esc_html__('Theme Gradient Primary Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[theme_gradient_secondary_color]', array(
        'default' => '#ba4ecf',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[theme_gradient_secondary_color]', array(
        'label' => esc_html__('Theme Gradient Secondary Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[theme_active_bg_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[theme_active_bg_color]', array(
        'label' => esc_html__('Theme Active Bg Color', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[services_icon]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[services_icon]', array(
        'label' => esc_html__('Services Icon', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 5,
    )));

    $wp_customize->add_setting('computer_services_colors[services_icon_bg]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[services_icon_bg]', array(
        'label' => esc_html__('Services Icon Bg', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 6,
    )));

    $wp_customize->add_setting('computer_services_colors[services_icon_bg_hover]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[services_icon_bg_hover]', array(
        'label' => esc_html__('Services Icon Bg Hover', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 7,
    )));

    $wp_customize->add_setting('computer_services_colors[theme_big_icon]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[theme_big_icon]', array(
        'label' => esc_html__('Big Icon', 'computer-repair'),
        'section' => 'computer_comon_section',
        'priority' => 7,
    )));




    // Header color 
    // *******************************************

    $wp_customize->add_section('computer_header_section', array(
        'title' => esc_html__('Header Color', 'computer-repair'),
        'priority' => 2,
        'panel' => 'all_styling_panel'
    ));
    $wp_customize->add_setting('computer_services_colors[header_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[header_text_color]', array(
        'label' => esc_html__('Header Phone Number Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('computer_services_colors[header_text_bg_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[header_text_bg_color]', array(
        'label' => esc_html__('Header Phone Number Bg Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 2,
    )));

    $wp_customize->add_setting('computer_services_colors[header_icon_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[header_icon_color]', array(
        'label' => esc_html__('Header Icon Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 2,
    )));

    //Menu color
    $wp_customize->add_setting('computer_services_colors[mainmenu_bg_color]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[mainmenu_bg_color]', array(
        'label' => esc_html__('MainMenu Bg Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[sub_menu_bg_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[sub_menu_bg_color]', array(
        'label' => esc_html__('Sub Menu Bg Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 3,
    )));


    $wp_customize->add_setting('computer_services_colors[sub_menu_hover_bg_color]', array(
        'default' => '#f2f2f2',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[sub_menu_hover_bg_color]', array(
        'label' => esc_html__('Sub Menu Hover Bg Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 3,
    )));


    $wp_customize->add_setting('computer_services_colors[menu_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[menu_text_color]', array(
        'label' => esc_html__('Menu Text Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[menu_text_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[menu_text_hover_color]', array(
        'label' => esc_html__('Menu Text Hover Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 5,
    )));

    $wp_customize->add_setting('computer_services_colors[submenu_border_top]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[submenu_border_top]', array(
        'label' => esc_html__('Dropdown Menu Top Border', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 6,
    )));

    $wp_customize->add_setting('computer_services_colors[submenu_text_color]', array(
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[submenu_text_color]', array(
        'label' => esc_html__('Dropdown Menu Text Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 7,
    )));


    $wp_customize->add_setting('computer_services_colors[submenu_text_hover_color]', array(
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[submenu_text_hover_color]', array(
        'label' => esc_html__('Dropdown Menu Text Hover Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 7,
    )));

    $wp_customize->add_setting('computer_services_colors[mob_menu_bg_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[mob_menu_bg_color]', array(
        'label' => esc_html__('Mobile Menu Bg Color', 'computer-repair'),
        'section' => 'computer_header_section',
        'priority' => 7,
    )));
    
    //Slider color

    $wp_customize->add_section('computer_Slider_color_section', array(
        'title' => esc_html__('Slider Color', 'computer-repair'),
        'priority' => 3,
        'panel' => 'all_styling_panel'
    ));
    $wp_customize->add_setting('computer_services_colors[nivo_slider_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[nivo_slider_color]', array(
        'label' => esc_html__('Slider Text Color', 'computer-repair'),
        'section' => 'computer_Slider_color_section',
        'priority' => 19,
    )));

    $wp_customize->add_setting('computer_services_colors[nivo_slider_span_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[nivo_slider_span_color]', array(
        'label' => esc_html__('Slider Text Span Color', 'computer-repair'),
        'section' => 'computer_Slider_color_section',
        'priority' => 19,
    )));

    $wp_customize->add_setting('computer_services_colors[nivo_slider_navigation_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[nivo_slider_navigation_color]', array(
        'label' => esc_html__('Slider Navigation Color', 'computer-repair'),
        'section' => 'computer_Slider_color_section',
        'priority' => 19,
    )));

    //Slider color End

    //Button
    $wp_customize->add_section('computer_Button_section', array(
        'title' => esc_html__('Button Color', 'computer-repair'),
        'priority' => 4,
        'panel' => 'all_styling_panel'
    ));
    $wp_customize->add_setting('computer_services_colors[button_bg_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_bg_color]', array(
        'label' => esc_html__('Button Bg Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('computer_services_colors[button_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_text_color]', array(
        'label' => esc_html__('Button Text Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 2,
    )));

    $wp_customize->add_setting('computer_services_colors[button_text_hover_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_text_hover_color]', array(
        'label' => esc_html__('Button Text Hover Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[button_bg_hover_color]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_bg_hover_color]', array(
        'label' => esc_html__('Button Bg Hover Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 4,
    )));

    $wp_customize->add_setting('computer_services_colors[button_two_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_two_text_color]', array(
        'label' => esc_html__('Button Two Text Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 5,
    )));
    
    $wp_customize->add_setting('computer_services_colors[button_two_bg_color]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_two_bg_color]', array(
        'label' => esc_html__('Button Two Bg Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 6,
    )));

    $wp_customize->add_setting('computer_services_colors[button_two_bg_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_two_bg_hover_color]', array(
        'label' => esc_html__('Button Two Bg Hover Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 7,
    )));

    $wp_customize->add_setting('computer_services_colors[button_two_text_hover_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_two_text_hover_color]', array(
        'label' => esc_html__('Button Two Text Hover Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 8,
    )));

    $wp_customize->add_setting('computer_services_colors[button_three_text_color]', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_three_text_color]', array(
        'label' => esc_html__('Button Three Text Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 9,
    )));

    $wp_customize->add_setting('computer_services_colors[button_three_bg_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[button_three_bg_color]', array(
        'label' => esc_html__('Button Three Bg Color', 'computer-repair'),
        'section' => 'computer_Button_section',
        'priority' => 9,
    )));

    //Other Section Color

    $wp_customize->add_section('computer_other_section', array(
        'title' => esc_html__('Other Section Color', 'computer-repair'),
        'priority' => 5,
        'panel' => 'all_styling_panel'
    ));

    $wp_customize->add_setting('computer_services_colors[testi_quote]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[testi_quote]', array(
        'label' => esc_html__('Testimonials Author Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('computer_services_colors[testi_text_color]', array(
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[testi_text_color]', array(
        'label' => esc_html__('Testimonials text Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 2,
    )));

    $wp_customize->add_setting('computer_services_colors[testi_pagi_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[testi_pagi_color]', array(
        'label' => esc_html__('Testimonials Pagination Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[hexa_icon_color]', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[hexa_icon_color]', array(
        'label' => esc_html__('About Hexa Icon Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 5,
    )));

    $wp_customize->add_setting('computer_services_colors[hexa_icon_bg_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[hexa_icon_bg_color]', array(
        'label' => esc_html__('About Hexa Icon Bg Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 6,
    )));

    $wp_customize->add_setting('computer_services_colors[hexa_icon_border_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[hexa_icon_border_color]', array(
        'label' => esc_html__('About Hexa Icon Border Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 7,
    )));

    $wp_customize->add_setting('computer_services_colors[hexa_icon_hover_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[hexa_icon_hover_color]', array(
        'label' => esc_html__('About Hexa Icon Hover Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 8,
    )));

    $wp_customize->add_setting('computer_services_colors[hexa_icon_bg_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[hexa_icon_bg_hover_color]', array(
        'label' => esc_html__('About Hexa Icon Bg Hover Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 9,
    )));
    

    $wp_customize->add_setting('computer_services_colors[about_team_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[about_team_hover_color]', array(
        'label' => esc_html__('About Team Hover Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 9,
    )));

    $wp_customize->add_setting('computer_services_colors[blog_title_color]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[blog_title_color]', array(
        'label' => esc_html__('Blog Title Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 10,
    )));

    $wp_customize->add_setting('computer_services_colors[blog_title_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[blog_title_hover_color]', array(
        'label' => esc_html__('Blog Title Hover Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 11,
    )));
	
	$wp_customize->add_setting('computer_services_colors[contact_social_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[contact_social_color]', array(
        'label' => esc_html__('Contact page social Color', 'computer-repair'),
        'section' => 'computer_other_section',
        'priority' => 11,
    )));
	
    
    //Footer Color

    $wp_customize->add_section('computer_footer_section', array(
        'title' => esc_html__('Footer Color', 'computer-repair'),
        'priority' => 6,
        'panel' => 'all_styling_panel'
    ));

    $wp_customize->add_setting('computer_services_colors[footer_bg_color]', array(
        'default' => '#444444',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_bg_color]', array(
        'label' => esc_html__('Footer Bg Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('computer_services_colors[footer_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_text_color]', array(
        'label' => esc_html__('Footer Text Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 2,
    )));
	
	$wp_customize->add_setting('computer_services_colors[footer_text_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_text_hover_color]', array(
        'label' => esc_html__('Footer Text Hover Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 3,
    )));

    $wp_customize->add_setting('computer_services_colors[footer_copy_text_color]', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_copy_text_color]', array(
        'label' => esc_html__('Footer Copyright Text Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 4,
    )));
	
	$wp_customize->add_setting('computer_services_colors[footer_tc_text_color]', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_tc_text_color]', array(
        'label' => esc_html__('Footer terms & Condition Text Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 5,
    )));
	
	$wp_customize->add_setting('computer_services_colors[footer_tc_text_hover_color]', array(
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'computer_services_colors[footer_tc_text_hover_color]', array(
        'label' => esc_html__('Footer terms & Condition Text Hover Color', 'computer-repair'),
        'section' => 'computer_footer_section',
        'priority' => 6,
    )));


   //Shop Page Color

    $wp_customize->add_section('shop_color_section', array(
        'title' => esc_html__('Shop Page Color', 'computer-repair'),
        'priority' => 7,
        'panel' => 'all_styling_panel'
    ));

    $wp_customize->add_setting ( 'computer_services_colors[shop_active_icon]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_active_icon]', array(
        'label'        => esc_html__( 'Shop Active Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 1,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_active_bg_icon]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_active_bg_icon]', array(
        'label'        => esc_html__( 'Shop Active Bg Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 1,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[cart_icon]', array (
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[cart_icon]', array(
        'label'        => esc_html__( 'Cart Icon Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 1,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[cart_icon_bg]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[cart_icon_bg]', array(
        'label'        => esc_html__( 'Cart Icon Bg Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 2,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[cart_icon_bg_hover]', array (
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[cart_icon_bg_hover]', array(
        'label'        => esc_html__( 'Cart Icon Bg Hover Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 3,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[cart_icon_hover]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[cart_icon_hover]', array(
        'label'        => esc_html__( 'Cart Icon Hover Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 4,
    )));
    
    $wp_customize->add_setting ( 'computer_services_colors[shop_filter_color]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_filter_color]', array(
        'label'        => esc_html__( 'Shop filter Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 5,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_sale_color]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_sale_color]', array(
        'label'        => esc_html__( 'Shop Sale lavel Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 6,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_sale_text_color]', array (
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_sale_text_color]', array(
        'label'        => esc_html__( 'Shop Sale lavel Text Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 7,
    )));
	
	
	$wp_customize->add_setting ( 'computer_services_colors[shop_text_color]', array (
        'default' => '#292929',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_text_color]', array(
        'label'        => esc_html__( 'Shop Text Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 7,
    )));
	
	$wp_customize->add_setting ( 'computer_services_colors[shop_price_text_color]', array (
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_price_text_color]', array(
        'label'        => esc_html__( 'Shop Price Text Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 7,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_rateing_color]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_rateing_color]', array(
        'label'        => esc_html__( 'Shop Rating Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 8,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_pagination_bg_color]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_pagination_bg_color]', array(
        'label'        => esc_html__( 'Shop Pagination Bg Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 10,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_pagination_text_color]', array (
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_pagination_text_color]', array(
        'label'        => esc_html__( 'Shop Pagination Text Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 11,
    )));

    $wp_customize->add_setting ( 'computer_services_colors[shop_pagination_border_color]', array (
        'default' => '#4d7df0',
        'sanitize_callback' => 'sanitize_hex_color',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'computer_services_colors[shop_pagination_border_color]', array(
        'label'        => esc_html__( 'Shop Pagination Border Color', 'computer-repair' ),
        'section'    => 'shop_color_section',
        'priority'   => 12,
    )));
}

add_action('customize_register', 'computer_repair_theme_customizer');
