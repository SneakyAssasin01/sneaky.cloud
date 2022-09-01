<?php
/*
 * print css with cheking value is empty or not
 *
 */

function computer_repair_print_css($props = '', $values = array(), $vkey = '', $pre_fix = '', $post_fix = '') {

    if (isset($values[$vkey]) && !empty($values[$vkey])) {
        print wp_kses_post($props . ":" . $pre_fix . $values[$vkey] . $post_fix . ";\n");
    }
}

function hex2rgba($color, $opacity = false) {
 
    $default = 'rgb(0,0,0)';
 
    //Return default if no color provided
    if(empty($color))
          return $default; 
 
    //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity >= 0 ){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

function computer_repair_color_brightness($colourstr, $steps, $darken = false) {
    $colourstr = str_replace('#', '', $colourstr);
    $rhex = substr($colourstr, 0, 2);
    $ghex = substr($colourstr, 2, 2);
    $bhex = substr($colourstr, 4, 2);

    $r = hexdec($rhex);
    $g = hexdec($ghex);
    $b = hexdec($bhex);

    if ($darken) {
        $steps = $steps * -1;
    }

    $r = max(0, min(255, $r + $steps));
    $g = max(0, min(255, $g + $steps));
    $b = max(0, min(255, $b + $steps));

    $hex = "#";
    $hex .= str_pad(dechex($r), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($g), 2, "0", STR_PAD_LEFT);
    $hex .= str_pad(dechex($b), 2, "0", STR_PAD_LEFT);

    return $hex;
}

function computer_repair_get_custom_styles() {
    global $computer_repair_opt;
    $computer_repair_colors = get_theme_mod('computer_services_colors', array());
    $computer_repair_css = get_theme_mod('computer_repair_css', array());
    ob_start();
    ?>
    body{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-body_typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-body_typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-body_typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-body_typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-body_typography'], 'color');
    ?>
    }
    h1, h2.h-lg{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-1-2-lg-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-1-2-lg-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-1-2-lg-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-1-2-lg-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-1-2-lg-typography'], 'color');
    ?>
    }
    h2{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-2-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-2-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-2-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-2-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-2-typography'], 'color');
    ?>
    }
    h3{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-3-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-3-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-3-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-3-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-3-typography'], 'color');
    ?>
    }
    h4{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-4-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-4-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-4-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-4-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-4-typography'], 'color');
    ?>
    }
    h5{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-5-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-5-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-5-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-5-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-5-typography'], 'color');
    ?>
    }
    h6{
    <?php
    computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-heading-6-typography'], 'font-family');
    computer_repair_print_css('font-weight', $computer_repair_opt['computer_repair-heading-6-typography'], 'font-weight');
    computer_repair_print_css('font-size', $computer_repair_opt['computer_repair-heading-6-typography'], 'font-size');
    computer_repair_print_css('line-height', $computer_repair_opt['computer_repair-heading-6-typography'], 'line-height');
    computer_repair_print_css('color', $computer_repair_opt['computer_repair-heading-6-typography'], 'color');
    ?>
    }
<?php
  $gradient_primary_color = isset($computer_repair_colors['theme_gradient_primary_color'])?$computer_repair_colors['theme_gradient_primary_color']:'';	
  $gradient_secondary_color = isset($computer_repair_colors['theme_gradient_secondary_color'])?$computer_repair_colors['theme_gradient_secondary_color']:'';	

?>
    <?php
    if (isset($computer_repair_opt['computer_repair-header-transparent']) && ($computer_repair_opt['computer_repair-header-transparent'] == 1)):
        ?>
        /*--------   2.2 Header          --------*/
        body.home header.page-header {
            position: absolute;
            top: 0;
            background: none;
        }
        @media (min-width: 992px) {
            body:not(.home) header.page-header {
                margin-bottom: 38px;
            }
            body:not(.home) header.page-header #slidemenu {
                margin-bottom: -38px;
            }
        }

        header.page-header {
            position: relative;
            width: 100%;
        <?php
         if(isset($computer_repair_opt['computer_repair-page-header-bg']) && !empty($computer_repair_opt['computer_repair-page-header-bg']['url'])) : ?>
       
                background: url(<?php  echo esc_url($computer_repair_opt['computer_repair-page-header-bg']['url']) ; ;?>) no-repeat center top;
        <?php else: ?>
                background: url(<?php echo COMPUTER_REPAIR_IMG_URL; ?>header-bg.jpg) no-repeat center top;
        <?php  endif;?>

            z-index: 1000;
            padding: 0;
            margin: 0;
            border: 0;
            font-weight: normal;
        }
        @media (min-width: 992px){
            body:not(.home) header.page-header-2 {
                margin-bottom: 0;
            }
        }
        @media (min-width: 992px){
            body:not(.home) header.page-header-2 #slidemenu {
                margin-bottom: 0;
            }
        }

        header.page-header-2 {
            background: none;
        }
        header .header-top {
        padding: 20px 0;
        }
        body.home header.page-header-2 {
            position: static;
            background: none;
        }
        @media (min-width: 992px){
            body:not(.home) header.page-header--style2 {
                margin-bottom: 0 !important;
            }
        }
        @media (min-width: 992px){
            body:not(.home) header.page-header--style2 #slidemenu {
                margin-bottom: 0 !important;
            }
        }
        body.home header.page-header--style2 {
            position: static;
            background: none;
        }
        <?php else: ?>
        body.home header.page-header {
            background-size: cover;
            position: static;
            top: 0;
        }
         header.page-header {
        <?php
         if(isset($computer_repair_opt['computer_repair-page-header-bg']) && !empty($computer_repair_opt['computer_repair-page-header-bg']['url'])) : ?>
       
                background: url(<?php  echo esc_url($computer_repair_opt['computer_repair-page-header-bg']['url']) ; ;?>) no-repeat center top;
        <?php else: ?>
                background: url(<?php echo COMPUTER_REPAIR_IMG_URL; ?>header-bg.jpg) no-repeat center top;
        <?php  endif;?>
        }
    <?php endif;
    ?>
    a{ <?php computer_repair_print_css('color', $computer_repair_colors, 'lnk_color'); ?> }
    a:hover{ <?php computer_repair_print_css('color', $computer_repair_colors, 'lnk_color_hover'); ?> }
    .computer_repair_wc_products_tab.vc_tta.vc_tta-style-classic .vc_tta-tab a{ <?php computer_repair_print_css('font-family', $computer_repair_opt['computer_repair-body_typography'], 'font-family'); ?> }
    .comment-list .comment  a.comment-reply-link:hover, .edit-link a:hover{ 
    <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    <?php
    if (!class_exists('ReduxFramework')) {
        ?>
        body.home header.page-header {
        background: url(<?php echo COMPUTER_REPAIR_IMG_URL; ?>header-bg.jpg) no-repeat center top;
        }
        .home .block {
        margin-bottom: 92px;
        }
        body.home header.page-header {
        position: relative;
        }
        #primary{
        margin-top: 80px;
        }
        <?php
    }
    ?>
    /* Section Color */
    body {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'body_color'); ?>
    }

    .row-icon:hover .row-icon-text,.grey-box-inside:hover .grey-box-title,.computer-faq-text h4:hover{
         <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
    }

	.color {
	    <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
	}


    .h-box-text,.contact-box-row,.posted-on a,.author.vcard a,.testimonials-single{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'body_color'); ?>
    }
    h1, h2, h3, h4, h5, h6, h2.h-lg,.h-box-title{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'heading_color'); ?>
    }
    .vc_custom_1496739347622,
    .vc_custom_1494326401625,
    .tagcloud a:hover, .tags-list a:hover,
    .service-list li a:hover, .service-list li > span:hover{
       <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_bg_color'); ?>
    }

    .block.bg-1 h1, 
    .block.bg-2 h1, 
    .block.bg-1 h2, 
    .block.bg-2 h2, 
    .block.bg-1 h3, 
    .block.bg-2 h3,
    .category-block .caption .name.white,
    .category-block .caption p.white{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'heading_white_color', '', '!important'); ?>
    }
    .text-icon .title,
    .text-icon-squared .read-more,.text-icon .read-more,.block.bg-1, .block.bg-2,
    .text-icon-squared:hover .read-more,
    .service-list li a:hover, .service-list li > span:hover{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'body_white_color'); ?>
    }
    .color,.h-phone .color a,.category-block .caption .name,.tags-list a:hover,
    .category-list > li:after,
    .marker-list-sm > li:after,.marker-list > li:after,
    .grey-box-icon,.text-icon-squared .read-more,.text-icon .read-more,.marker-list-md > li:after, 
    .marker-list-md-1 > li:after,.price-box-price span,
    .side-block .menu.category-list li.current-menu-item a, 
    .navbar-nav > li.current-menu-parent a,.category-list > li a:hover , .back-to-top a {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    @media (max-width: 991px) {
    .header-info-mobile p > [class*='icon-'] {
      <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    }
    .category-block .image_hover.light .btn,.battery .battery_item{
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    .page-footer .footer-phone .number {
        <?php computer_repair_print_css('-webkit-text-fill-color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    .icon-big .icon,
    .text-icon-squared .icon-big .icon,.price-box-icon i,
    .contact-info .icon,.contact-box [class*='icon-'],
    .text-icon:hover .icon-wrapper span i.icon,
    .page-footer.page-footer--style2 .contact-info .icon
    {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_big_icon'); ?>
    }
    .icon-wrapper span,.row-icon-icon i,.services-number-span .box-number-icon,
    .services-number-span .row-number-icon,.calendar .selected {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'services_icon_bg'); ?>
    }

    
    <?php
    
    if(isset($computer_repair_colors['services_icon_bg'])){ ?>
        
    .icon-wrapper span {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
    }
   .icon-wrapper .icon-hover {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
    }
    .text-icon:hover .icon-wrapper span {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0) . ";\n");?>
    }
    .text-icon:hover .icon-wrapper .icon-hover {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
    }

    .social-links.rounded ul li a:hover {
        <?php print wp_kses_post("border-color:" . hex2rgba($computer_repair_colors['services_icon_bg'], 0.25) . ";\n");?>
    }
        
   <?php }
    ?>
    

    .icon-wrapper .icon-hover{
       <?php computer_repair_print_css('background-color', $computer_repair_colors, 'services_icon_bg_hover'); ?>
    }
    .icon-wrapper span i.icon,.row-icon-icon i,.services-number-span .box-number-icon,
    .services-number-span .row-number-icon {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'services_icon'); ?>
    }
    .phone-content-number i {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
    }

    .social-links.rounded ul.contact-list li a{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'contact_social_color'); ?>
    }

    /* Header Color */

    header .phone .under-number,
    header .phone .number{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'header_text_color');  ?>
    }
    header .phone .number{
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'header_text_bg_color', '', '!important'); ?>
    }
    header .header-top-info [class*='icon-'], header .phone [class*='icon-']{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'header_icon_color'); ?>
    }
    /* Menu Color*/

    #slidemenu, body.home header.page-header.is-sticky, .page-header.is-sticky ,.menu-wrap{
        <?php computer_repair_print_css('background', $computer_repair_colors, 'mainmenu_bg_color'); ?>
    }
    header.page-header-2 #slidemenu, body.home header.page-header-2.is-sticky, .page-header-2.is-sticky {
        background:transparent;
    }
    .navbar-nav > li > a {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'menu_text_color'); ?>
    }
    .navbar-nav li.current-menu-item > a,
    .navbar-nav > li > a:hover, 
    .navbar-nav > li > a:focus,
    .navbar-nav > li > a.shadow-effect:hover {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'menu_text_hover_color'); ?>     
    }
    @media (min-width: 992px){
        .navbar-nav li.current-menu-item > a {
            <?php computer_repair_print_css('border-bottom-color', $computer_repair_colors, 'menu_text_hover_color'); ?>     
        }
    }
    .navbar-nav > li > a.shadow-effect:hover {
        <?php computer_repair_print_css('text-shadow', $computer_repair_colors, 'menu_text_hover_color','0 0 0 '); ?>
    }
    .navbar-nav .dropdown .dropdown-menu {
        <?php computer_repair_print_css('border-top', $computer_repair_colors, 'submenu_border_top', '4px solid'); ?>
    }

    .navbar-nav .dropdown .dropdown-menu li > a{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'submenu_text_color'); ?> 
    }
    #navbar-height-col, .slidemenu-close {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'mob_menu_bg_color'); ?> 
    }
    .dropdown-menu {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'sub_menu_bg_color'); ?> 
    }

    @media (min-width: 992px){
        .navbar-nav .dropdown .dropdown-menu li > a:hover, .navbar-nav .dropdown .dropdown-menu li > a:focus {
            <?php computer_repair_print_css('background-color', $computer_repair_colors, 'sub_menu_hover_bg_color'); ?> 
            <?php computer_repair_print_css('color', $computer_repair_colors, 'submenu_text_hover_color'); ?> 
        }
    }


    @media (max-width: 991px){

        #slidemenu {
           background:transparent;
        }
    }

    /* Slider Color */

    #mainSlider .slide-content h3,
    #mainSlider .slide-content h4,
    #mainSlider .slide-content p{
       <?php computer_repair_print_css('color', $computer_repair_colors, 'nivo_slider_color'); ?>
    }

    #mainSlider .slide-content h3 span{
       <?php computer_repair_print_css('color', $computer_repair_colors, 'nivo_slider_span_color'); ?>
    }
    #mainSlider .slick-prev:before, 
    #mainSlider .slick-next:before{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'nivo_slider_navigation_color', '', ' !important'); ?>
    }
    
    /* Button Color */
 
        body.woocommerce .widget_price_filter .price_slider_amount .button,
    .btn:not(.btn-white):not(.btn-invert):not(:hover),input.wpcf7-submit {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'button_text_color'); ?>
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_bg_color'); ?>
        <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    }

    body.woocommerce .widget_price_filter .price_slider_amount .button:hover,
    .btn:hover, .btn.active, .btn:active, .btn.btn-white:hover,input.wpcf7-submit:hover {
     <?php computer_repair_print_css('color', $computer_repair_colors, 'button_text_hover_color'); ?>
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_bg_hover_color'); ?>
     <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_hover_color'); ?>
    }
    .vc_toggle_default.panel-heading1 .vc_toggle_icon,
    .vc_toggle_color_white.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'button_text_color'); ?>
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_bg_color'); ?>
    }

    .btn.btn-invert {

     <?php computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_color'); ?>
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_color'); ?>
    }
    .btn-invert:hover, .btn-invert.active, .btn-invert:active, .btn.btn-invert-alt {
     <?php computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_hover_color'); ?>
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_hover_color'); ?>
    }
    .btn-invert:hover, .btn-invert.active, .btn-invert:active, .btn.btn-invert-alt {
     <?php computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_hover_color'); ?>
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_hover_color'); ?>
    }

    .btn.btn-white, .btn.btn-invert-alt:hover {
     <?php computer_repair_print_css('color', $computer_repair_colors, 'button_three_text_color'); ?>
     <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_three_bg_color'); ?>
    }

    .block.bg-dark .btn-white:hover {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_hover_color'); ?>
    }

    .btn.form-popup-link{
        <?php // computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_color'); ?>
        <?php // computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_color'); ?>
    }
    .btn.form-popup-link:hover, .btn.form-popup-link.active{
        <?php // computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_hover_color'); ?>
        <?php // computer_repair_print_css('background-color', $computer_repair_colors, 'button_two_bg_hover_color'); ?>

    }
       
    /* Button Color End */

    /* Other Section Color*/

    .testimonials-item .inside:before,
    .testimonials-item .inside .rating i,
    .testimonials-item .inside .username,.rating i,
    .testimonials-single .username,
    .slick-prev:hover:before {
         <?php computer_repair_print_css('color', $computer_repair_colors, 'testi_quote'); ?>
    }
    .slick-dots li.slick-active button, 
    .slick-dots li.slick-active button:hover{
    <?php computer_repair_print_css('background-color', $computer_repair_colors, 'testi_pagi_color') ?>
    }

    .testimonials-item .inside h5,
    .testimonials-item .inside,.testimonials-single .inside h5, .testimonials-single .inside{
        <?php computer_repair_print_css('color', $computer_repair_colors, 'testi_text_color'); ?>
    }
    .hexagon-icon i{
      <?php computer_repair_print_css('color', $computer_repair_colors, 'hexa_icon_color') ?>
      <?php computer_repair_print_css('background-color', $computer_repair_colors, 'hexa_icon_bg_color') ?>
      <?php computer_repair_print_css('border', $computer_repair_colors, 'hexa_icon_border_color', '4px solid') ?>
    }
    .hexagon-icon i:hover{
      <?php computer_repair_print_css('color', $computer_repair_colors, 'hexa_icon_hover_color') ?>
      <?php computer_repair_print_css('background-color', $computer_repair_colors, 'hexa_icon_bg_hover_color') ?>
    }
    @media (min-width: 768px) {
        .hexagon-box:before {
            <?php computer_repair_print_css('border-top-color', $computer_repair_colors, 'hexa_icon_border_color') ?>
            <?php computer_repair_print_css('border-right-color', $computer_repair_colors, 'hexa_icon_border_color') ?>
        }
        .hexagon-box {
            <?php computer_repair_print_css('border-left-color', $computer_repair_colors, 'hexa_icon_border_color') ?>
            <?php computer_repair_print_css('border-right-color', $computer_repair_colors, 'hexa_icon_border_color') ?>            
        }
        .hexagon-box:after {
            <?php computer_repair_print_css('border-bottom-color', $computer_repair_colors, 'hexa_icon_border_color') ?>
            <?php computer_repair_print_css('border-left-color', $computer_repair_colors, 'hexa_icon_border_color') ?>            
        }
    }
    .blog-post .post-title a{
    <?php computer_repair_print_css('color', $computer_repair_colors, 'blog_title_color') ?>
    }
    .blog-post .post-title a:hover{
     <?php computer_repair_print_css('color', $computer_repair_colors, 'blog_title_hover_color') ?>
    }

    /* Other Section Color*/
    /* Footer Color*/
    .page-footer{
    <?php computer_repair_print_css('background-color', $computer_repair_colors, 'footer_bg_color') ?>
    }
    .page-footer a {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_text_color') ?>
    }
    .page-footer ul.footer-menu li a,
    .page-footer .footer-phone,
    .page-footer,.page-footer .social-links ul li a,.page-footer a{
    <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_text_color') ?>
    }

    .page-footer ul.footer-menu li a:hover,.page-footer ul.footer-menu li a:active,.page-footer ul.footer-menu li a:focus
    {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_text_hover_color') ?>
    }

    .page-footer .copyright{
    <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_copy_text_color') ?>
    }

    .footer-links a{
         <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_tc_text_color') ?>
    }


    .footer-links a:hover,.footer-links a:active,.footer-links a:focus{
         <?php computer_repair_print_css('color', $computer_repair_colors, 'footer_tc_text_hover_color') ?>
    }

    /*End Footer Color*/
   
   /*Shop Color*/

     .title-aside::after{
       <?php computer_repair_print_css('background-color', $computer_repair_colors, 'shop_active_bg_icon', '', ' !important'); ?>
     }
     .woocommerce .category-list > li:after,
     .woocommerce .star-rating span::before{
       <?php computer_repair_print_css('color', $computer_repair_colors, 'shop_active_icon', '', ' !important'); ?>
     }
     body header .header-cart:hover a.icon, body header .header-cart.opened a.icon {
      <?php computer_repair_print_css('color', $computer_repair_colors, 'cart_icon', '', '!important'); ?>
     }
     .header-cart .badge{
       <?php computer_repair_print_css(' background-color', $computer_repair_colors, 'cart_icon_bg'); ?>
     }
     header.page-header-2 .header-cart a.icon {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'cart_icon'); ?>
     }
     header .header-cart:hover .badge, 
     header .header-cart.opened .badge{
       <?php computer_repair_print_css('color', $computer_repair_colors, 'cart_icon_hover', '', '!important'); ?>
       <?php computer_repair_print_css('background-color', $computer_repair_colors, 'cart_icon_bg_hover', '', '!important'); ?>
     }
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
     <?php computer_repair_print_css(' background-color', $computer_repair_colors, 'shop_filter_color'); ?>
    }
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
        <?php computer_repair_print_css(' background-color', $computer_repair_colors, 'shop_filter_color'); ?>
    }
    .woocommerce span.onsale{
        <?php computer_repair_print_css('background', $computer_repair_colors, 'shop_sale_color'); ?>
        <?php computer_repair_print_css('color', $computer_repair_colors, 'shop_sale_text_color'); ?>
    }
    .woocommerce .star-rating span::before {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'shop_rateing_color'); ?>
    }
    .woocommerce nav.woocommerce-pagination ul li a:focus, 
    .woocommerce nav.woocommerce-pagination ul li a:hover, 
    body.woocommerce nav.woocommerce-pagination ul li span.current{
    
        <?php computer_repair_print_css('background', $computer_repair_colors, 'shop_pagination_bg_color' ,'', '!important'); ?>
        <?php computer_repair_print_css('color', $computer_repair_colors, 'shop_pagination_text_color','',' !important'); ?>
    
    
        <?php
        if(isset($computer_repair_colors['shop_pagination_border_color'])){
        echo "border:1px solid" . $computer_repair_colors['shop_pagination_border_color']." !important";
        }
        ?>        
    }
    .prd-info h4{
    	<?php computer_repair_print_css('color', $computer_repair_colors, 'shop_text_color','',' !important'); ?>
    }
    .woocommerce div.product p.price, .woocommerce div.product span.price{
    	<?php computer_repair_print_css('color', $computer_repair_colors, 'shop_price_text_color','',' !important'); ?>
    }
    .dropdowns-box-item > a:before {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    .dropdowns-box-item > a:after {
        <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color','',' !important'); ?>
    }
    .dropdowns-box-item > a i {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
    }    
    .dropdowns-box-item > a:hover:before, .dropdowns-box-item > a.active:before {
        <?php computer_repair_print_css('border-top-color', $computer_repair_colors, 'theme_active_color'); ?>
    }
    .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
       <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?>     
       <?php computer_repair_print_css('border-color', $computer_repair_colors, 'theme_active_color'); ?>     
    }

    .services-nav-pills > li.active > a, .services-nav-pills > li.active > a:focus, .services-nav-pills > li.active > a:hover {
       <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color','',' !important'); ?>      
    }
    .services-tab-list li a span.icon {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>      
    }

    .services-tab-list li.hovered a > span.icon, .services-tab-list li a:hover > span.icon {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>     
        <?php computer_repair_print_css('box-shadow', $computer_repair_colors, 'theme_active_color','0 0 10px '); ?>  
    }
    .service-tip > span [class*='icon-'] {
      <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>   
    }

    @media (min-width: 768px){
        .service-tip:hover > span [class*='icon-'], .service-tip.hovered > span [class*='icon-'] {
            <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>   
            <?php computer_repair_print_css('box-shadow', $computer_repair_colors, 'theme_active_color','0 0 10px '); ?>  
        }
    }

    .step-item:hover .step-item-icon, .step-item.active .step-item-icon {
        <?php computer_repair_print_css('border-color', $computer_repair_colors, 'theme_active_color'); ?>   
    }
    .advantages-num-number {
        <?php computer_repair_print_css('background-color', $computer_repair_colors, 'theme_active_color'); ?>   
        <?php computer_repair_print_css('box-shadow', $computer_repair_colors, 'theme_active_color','0 0 5px '); ?>  
    }
    .faq-item .panel-heading a > span.caret-toggle {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>   
    }
    .faq-item .panel-heading .panel-title > a:hover {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>   
    }
    .h-phone [class*='icon-'] {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>   
    }
    .experience-item:hover, .experience-item.active {
        <?php computer_repair_print_css('border-color', $computer_repair_colors, 'theme_active_color'); ?>   
    }
    .address-link [class*='icon'] {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
    }
    .read-more-color {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
    }
    .services-tab-list-wrap.closed .services-tab-toggle {
        <?php computer_repair_print_css('box-shadow', $computer_repair_colors, 'theme_active_color','3px 0 10px '); ?>  
    }
   .slick-next:hover:before,.testimonials-single-carousel-layout2 .testimonials-single:before {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
   }
    #mainSliderWrapper .scroll-bottom:hover {
       <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
    }
    .mfp-close-btn-in .mfp-close {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
    }

       <?php
    
    if(isset($computer_repair_colors['about_team_hover_color'])){ ?>
.person .image img {
    <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.2) . ";\n");?>
    <?php print wp_kses_post("-moz-box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.2) . ";\n");?>
    <?php print wp_kses_post("box-shadow: 0 0 0 0 " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.2) . ";\n");?>
}
.person:hover .image img {
    <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.0) . ";\n");?>
    <?php print wp_kses_post("-moz-box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.0) . ";\n");?>
    <?php print wp_kses_post("box-shadow: 0 0 0 20px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.0) . ";\n");?>
}
.person .image .hover {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 0" . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 0" . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 0" . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
}
.person:hover .image .hover {
        <?php print wp_kses_post("-webkit-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
        <?php print wp_kses_post("-moz-box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
        <?php print wp_kses_post("box-shadow: 0 0 0 8px " . hex2rgba($computer_repair_colors['about_team_hover_color'], 0.25) . ";\n");?>
}

   <?php }
    ?>


   <?php
    
    if(isset($computer_repair_colors['theme_active_color'])){ ?>
.price-box:hover .price-box-icon i {
   <?php print wp_kses_post("border-color: " . hex2rgba($computer_repair_colors['theme_active_color'], 0.5) . ";\n");?>
}
@media (max-width: 992px){
    .header-info-toggle [class*='icon-']:hover {
        <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
    }
}
.tab-pane .cols-wrap ul a:hover {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
}
.tab-dropdown ul a:hover {
     <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>  
}

   <?php }
    ?>
.layout-2 .btn {
     <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
}
.layout-2 .btn:hover, .layout-2 .btn.active, .layout-2 .btn:active {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-end', endColorstr='@custom-color-gradient-start', GradientType=1);
    color: #ffffff;
}

        body.woocommerce .widget_price_filter .price_slider_amount .button,
    .btn:not(.btn-white):not(.btn-invert):not(:hover),input.wpcf7-submit {
     <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
    }

    body.woocommerce .widget_price_filter .price_slider_amount .button:hover,
    .btn:hover, .btn.active, .btn:active, .btn.btn-white:hover,input.wpcf7-submit:hover {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-end', endColorstr='@custom-color-gradient-start', GradientType=1);
    color: #ffffff;
    }

.layout-2 .btn-white:hover, .layout-2 .btn-white.active:hover, .layout-2 .btn-white:active:hover {
     <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-end', endColorstr='@custom-color-gradient-start', GradientType=1);
    color: #fff !important;	
}
.layout-2 .testimonials-item .inside:before {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?>  
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
body.layout-2 .row-icon-icon i {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?> 
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
}
@media (min-width: 768px){
body.layout-2 .hexagon-icon:hover i {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?> 
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
    color: #fff;
}
}
body.layout-2 .grey-box-icon {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?> 
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
    display: inline-block;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.layout-2 .vc_toggle_default.panel-heading1 .vc_toggle_icon, .layout-2 .vc_toggle_color_white.vc_toggle_default .vc_toggle_title:hover .vc_toggle_icon {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?> 
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
}
body.layout-2 .back-to-top a {
 	<?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?> 
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-start', endColorstr='@custom-color-gradient-end', GradientType=1);
    display: inline-block;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.experience-item-title span {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
}
blockquote .quote-author {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
}
blockquote::before {
   <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color','',' !important'); ?>
}
.header-cart-dropdown{
     <?php computer_repair_print_css('border-color', $computer_repair_colors, 'theme_active_color','',' !important'); ?>
}
.page-header--style2 .header-cart a.icon {
   <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
}
body.layout-2  .btn.btn-invert {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'button_two_text_color'); ?>
    <?php computer_repair_print_css('background', $computer_repair_colors, 'button_two_bg_color',' ','!important'); ?>
}
body.layout-2 .btn-invert:hover, body.layout-2 .btn-invert.active, body.layout-2 .btn-invert:active, .btn.btn-invert-alt {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'button_bg_color'); ?>
    background: -moz-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: -webkit-linear-gradient(-45deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    background: linear-gradient(135deg, <?php echo sprintf(__('%s','computer-repair'), $gradient_primary_color) ?> 0%, <?php echo sprintf(__('%s','computer-repair'), $gradient_secondary_color) ?> 100%) !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='@custom-color-gradient-end', endColorstr='@custom-color-gradient-start', GradientType=1);
    color: #ffffff;
}
.box-number:hover .box-number-text {
    <?php computer_repair_print_css('color', $computer_repair_colors, 'theme_active_color'); ?>
}
.upload:hover {
    <?php computer_repair_print_css('background', $computer_repair_colors, 'theme_active_color'); ?>
}
    <?php
    if (isset($computer_repair_opt['extra_css'])) {
        echo sprintf(__('%s', 'computer-repair'), $computer_repair_opt['extra_css']);
       
    }

    $computer_repair_custom_css = ob_get_clean();
    return $computer_repair_custom_css;
}
