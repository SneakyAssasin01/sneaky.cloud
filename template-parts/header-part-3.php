<?php
$computer_repair = computer_repair_options();

if (isset($computer_repair['computer_repair-site-preloader']) && $computer_repair['computer_repair-site-preloader']) {
    ?>

    <?php if (isset($computer_repair['computer_repair-site-preloader-image']) && $computer_repair['computer_repair-site-preloader-image']['url'] != '') { ?>
        <div id="loader-wrapper">
            <div id="loader" class="custom-loader">
                <img src="<?php echo esc_url($computer_repair['computer_repair-site-preloader-image']['url']); ?>">
            </div>
        </div>		

    <?php } else { ?>
        <!-- Loader -->
        <div id="loader-wrapper" class="loader-on">
            <div id="loader">
                <div class="battery">
                    <span class="battery_item"></span>
                    <span class="battery_item"></span>
                    <span class="battery_item"></span>
                </div>
                <?php if (isset($computer_repair['computer_repair-site-preloader-text']) && $computer_repair['computer_repair-site-preloader-text']) { ?>
                    <div class="text"><?php echo esc_html($computer_repair['computer_repair-site-preloader-text']); ?></div>
                <?php } ?>
            </div>
        </div>
        <!-- //Loader -->
    <?php } ?>
<?php } ?>
<!-- Header -->
<?php if (isset($computer_repair['computer_repair-is_sticky_header']) && $computer_repair['computer_repair-is_sticky_header'] == 1) { ?>
    <header class="page-header page-header-1 page-header--style2 sticky">
    <?php } else { ?>
        <header class="page-header">
        <?php } ?>
        <!-- Fixed navbar -->
        <nav class="navbar" id="slide-nav">
            <div class="container">
                <div class="navbar-header">
                    <?php if (isset($computer_repair['computer_repair-page-header-mobile']) && $computer_repair['computer_repair-page-header-mobile']):
                        ?>
                        <div class="header-info-mobile">
                            <div class="header-info-mobile-inside">
                                <p><i class="icon icon-placeholder-for-map"></i>
                                    <?php
                                    if (isset($computer_repair['computer_repair-page-header-mobile-location']) && $computer_repair['computer_repair-page-header-mobile-location'] != '') {
                                        echo wp_kses_post($computer_repair['computer_repair-page-header-mobile-location']);
                                    }
                                    ?>
                                </p>
                                <p><i class="icon icon-phone-receiver"></i>
                                    <?php
                                    if (isset($computer_repair['computer_repair-page-header-mobile-phone']) && $computer_repair['computer_repair-page-header-mobile-phone'] != '') {
                                        echo wp_kses_post($computer_repair['computer_repair-page-header-mobile-phone']);
                                    }
                                    ?>
                                </p>
                                <p><i class="icon icon-mail-black"></i>
                                    <?php
                                    if (isset($computer_repair['computer_repair-page-header-mobile-email']) && $computer_repair['computer_repair-page-header-mobile-email'] != '') {
                                        echo wp_kses_post($computer_repair['computer_repair-page-header-mobile-email']);
                                    }
                                    ?>
                                </p>
                                <p><i class="icon icon-clock"></i>
                                    <?php
                                    if (isset($computer_repair['computer_repair-page-header-mobile-hour']) && $computer_repair['computer_repair-page-header-mobile-hour'] != '') {
                                        echo wp_kses_post($computer_repair['computer_repair-page-header-mobile-hour']);
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="header-info-toggle"><i class="icon-angle-down js-info-toggle"></i></div>
                    <div class="mobile-topline hidden-xs hidden-sm">
                        <div class="phone-number">
                            <span>
                                <?php
                                if (isset($computer_repair['computer_repair-site-contact-no']) && $computer_repair['computer_repair-site-contact-no']) {
                                    echo wp_kses_post($computer_repair['computer_repair-site-contact-no']);
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <?php 
                        /*
                        since version 2.6
                        */
                        do_action('compute_repair_before_header_top');
                    ?>
                    <?php 
                        /*
                        since version 2.6
                        */
                        do_action('computer_repair_header_top');
                    ?>
                    <?php 
                        /*
                        since version 2.6
                        */
                        do_action('compute_repair_after_header_top');
                    ?>
                </div>
            </div>
                <div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
                    <div class="container">
                    <a href="<?php echo esc_url('#') ?>" class="slidemenu-close js-navbar-toggle"><i class="icon icon-cancel"></i><?php echo esc_html__('CLOSE MENU','computer-repair'); ?></a>

                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav',
                                'container' => 'ul',
                                'walker' => new Walker_Computer_Repair_Menu() //use our custom walker
                            )
                        );
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- // Header -->
