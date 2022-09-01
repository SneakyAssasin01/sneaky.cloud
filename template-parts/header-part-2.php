<?php
$computer_repair = computer_repair_options();


if ( isset( $computer_repair['computer_repair-site-preloader'] ) && $computer_repair['computer_repair-site-preloader'] ) {
	?>
	<?php if ( isset( $computer_repair['computer_repair-site-preloader-image'] ) && $computer_repair['computer_repair-site-preloader-image']['url'] != '' ) { ?>
		<div id="loader-wrapper">
			<div id="loader" class="custom-loader">
				<img src="<?php echo esc_url( $computer_repair['computer_repair-site-preloader-image']['url'] ); ?>">
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
		<?php if ( isset( $computer_repair['computer_repair-site-preloader-text'] ) && $computer_repair['computer_repair-site-preloader-text'] ) { ?>
					<div class="text"><?php echo esc_html( $computer_repair['computer_repair-site-preloader-text'] ); ?></div>
		<?php } ?>
			</div>
		</div>
		<!-- //Loader -->
	<?php } ?>
<?php } ?>
<!-- Header -->
<?php if ( isset( $computer_repair['computer_repair-is_sticky_header'] ) && $computer_repair['computer_repair-is_sticky_header'] == 1 ) { ?>
	<header class="page-header page-header-2 sticky">
<?php } else { ?>
		<header class="page-header page-header-2">
<?php } ?>
	<!-- Fixed navbar -->
	<nav class="navbar" id="slide-nav">
		<div class="container">
			<div class="navbar-header">
				<?php
				if ( isset( $computer_repair['computer_repair-page-header-mobile'] ) && $computer_repair['computer_repair-page-header-mobile'] ) :
					?>
					<div class="header-info-mobile">
						<div class="header-info-mobile-inside">
							<p><i class="icon icon-placeholder-for-map"></i>
								<?php
								if ( isset( $computer_repair['computer_repair-page-header-mobile-location'] ) && $computer_repair['computer_repair-page-header-mobile-location'] != '' ) {
									echo wp_kses_post( $computer_repair['computer_repair-page-header-mobile-location'] );
								}
								?>
							</p>
							<p><i class="icon icon-phone-receiver"></i>
								<?php
								if ( isset( $computer_repair['computer_repair-page-header-mobile-phone'] ) && $computer_repair['computer_repair-page-header-mobile-phone'] != '' ) {
									echo wp_kses_post( $computer_repair['computer_repair-page-header-mobile-phone'] );
								}
								?>
							</p>
							<p><i class="icon icon-mail-black"></i>
								<?php
								if ( isset( $computer_repair['computer_repair-page-header-mobile-email'] ) && $computer_repair['computer_repair-page-header-mobile-email'] != '' ) {
									echo wp_kses_post( $computer_repair['computer_repair-page-header-mobile-email'] );
								}
								?>
							</p>
							<p><i class="icon icon-clock"></i>
								<?php
								if ( isset( $computer_repair['computer_repair-page-header-mobile-hour'] ) && $computer_repair['computer_repair-page-header-mobile-hour'] != '' ) {
									echo wp_kses_post( $computer_repair['computer_repair-page-header-mobile-hour'] );
								}
								?>
							</p>
						</div>
					</div>
				<?php endif; ?>
				<div class="header-info-toggle"><i class="icon-angle-down js-info-toggle"></i></div>
				<div class="header-top">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span class="hidden-xs hidden-sm"><img src="<?php echo esc_url( $computer_repair['computer_repair-logo']['url'] ); ?>" alt="<?php esc_html_e( 'Logo', 'computer-repair' ); ?>"></span>
							<span class="visible-xs visible-sm"><img src="<?php echo esc_url( $computer_repair['computer_repair-logo-mobile']['url'] ); ?>" alt="<?php esc_html_e( 'Logo', 'computer-repair' ); ?>"></span>
						</a>
					</div>
					<div class="header-top-right">
						<div class="header-top-info">
							<i class="icon icon-placeholder-for-map"></i>
							<?php
							if ( isset( $computer_repair['computer_repair-header-map-info'] ) && $computer_repair['computer_repair-header-map-info'] != '' ) {
								echo wp_kses_post( $computer_repair['computer_repair-header-map-info'] );
							}
							?>

						</div>
						<div class="header-top-info">
							<i class="icon icon-clock"></i>
							<?php
							if ( isset( $computer_repair['computer_repair-header-hours-info'] ) && $computer_repair['computer_repair-header-hours-info'] != '' ) {
								echo wp_kses_post( $computer_repair['computer_repair-header-hours-info'] );
							}
							?>
						</div>
						<div class="phone">
							<div class="phone-wrapper">
								<i class="icon icon-phone-receiver"></i>
								<?php if ( isset( $computer_repair['computer_repair-site-contact-info'] ) && $computer_repair['computer_repair-site-contact-info'] ) { ?>
									<div class="above-number">
									<?php
									echo wp_kses_post( $computer_repair['computer_repair-site-contact-info'] );
									?>
									</div>
								<?php } ?>
								<?php if ( isset( $computer_repair['computer_repair-site-contact-no'] ) && $computer_repair['computer_repair-site-contact-no'] ) { ?>
									<div class="number">
										<span>
									<?php
									echo wp_kses_post( $computer_repair['computer_repair-site-contact-no'] );
									?>
										</span>
									</div>
								<?php } ?>                          
							</div>
							<div class="right-text">
								<?php if ( !empty( $computer_repair['computer_repair-call-us-arrow-1-1']['url'] ) ) { ?>
									<div class="item arrow animation hoveranimation" data-animation="rotateInUpRight" data-animation-delay="0.5s">
										<img src="<?php echo esc_url( $computer_repair['computer_repair-call-us-arrow-1-1']['url'] ); ?>" alt="<?php esc_html_e( 'image', 'computer-repair' ); ?>"></div>
								<?php } ?>
								<?php if ( !empty( $computer_repair['computer_repair-call-us-arrow-2-1']['url'] ) ) { ?>
									<div class="item text1 animation hoveranimation" data-animation="fadeInUp" data-animation-delay="0.75s"><img src="
									<?php
									echo esc_url( $computer_repair['computer_repair-call-us-arrow-2-1']['url'] );
									?>
										" alt="<?php esc_html_e( 'image', 'computer-repair' ); ?>">
									</div>
								<?php } ?>
								<?php if ( !empty( $computer_repair['computer_repair-call-us-arrow-3-1']['url'] ) ) { ?>
									<div class="item text2 animation hoveranimation" data-animation="fadeInUp" data-animation-delay="1s">
										<img src="
									<?php
									echo esc_url( $computer_repair['computer_repair-call-us-arrow-3-1']['url'] );
									?>
										" alt="<?php esc_html_e( 'image', 'computer-repair' ); ?>">
									</div>
								<?php } ?>
							</div>
						</div>
						<button type="button" class="navbar-toggle js-navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-wrap">
			<div class="container">
				<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
					<a href="<?php echo esc_url( '#' ); ?>" class="slidemenu-close js-navbar-toggle"><i class="icon icon-cancel"></i><?php echo esc_html__( 'CLOSE MENU', 'computer-repair' ); ?></a>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav navbar-nav',
							'container'      => 'ul',
							'walker'         => new Walker_Computer_Repair_Menu(), // use our custom walker
						)
					);
					?>
				</div>
				<div class="nav-right">
					<div class="social-links-header hidden-sm hidden-xs">
						<ul>
							<?php
							if ( isset( $computer_repair['computer_repair-header_social_facebook'] ) && ! empty( $computer_repair['computer_repair-header_social_facebook'] ) ) {
								?>
								<li>
									<a class="icon icon-facebook" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_facebook'] ); ?>"></a>
								</li>
							<?php } ?>
							<?php
							if ( isset( $computer_repair['computer_repair-header_social_twitter'] ) && ! empty( $computer_repair['computer_repair-header_social_twitter'] ) ) {
								?>
								<li>
									<a class="icon icon-twitter" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_twitter'] ); ?>"></a>
								</li>
							<?php } ?>
							<?php
							if ( isset( $computer_repair['computer_repair-header_social_google_plus'] ) && ! empty( $computer_repair['computer_repair-header_social_google_plus'] ) ) {
								?>
								<li>
									<a class="icon icon-google-plus" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_google_plus'] ); ?>"></a>
								</li>
								<?php
							}

							if ( isset( $computer_repair['computer_repair-header_social_youtube'] ) && ! empty( $computer_repair['computer_repair-header_social_youtube'] ) ) {
								?>
								<li>
									<a class="icon icon-youtube" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_youtube'] ); ?>"></a>
								</li>
								<?php
							}
							if ( isset( $computer_repair['computer_repair-header_social_whatsapp'] ) && ! empty( $computer_repair['computer_repair-header_social_whatsapp'] ) ) {
								?>
								<li>
									<a class="icon icon-whatsapp" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_whatsapp'] ); ?>"></a>
								</li>
								<?php
							}
							if ( isset( $computer_repair['computer_repair-header_social_snapchat'] ) && ! empty( $computer_repair['computer_repair-header_social_snapchat'] ) ) {
								?>
								<li>
									<a class="icon icon-snapchat-ghost" href="<?php echo esc_url( $computer_repair['computer_repair-header_social_snapchat'] ); ?>"></a>
								</li>
								<?php
							}
							if ( isset( $computer_repair['computer_repair-social-widgets'] ) ) {
								$optwidgets = $computer_repair['computer_repair-social-widgets'];
								if ( isset( $optwidgets ) && ! empty( $optwidgets ) ) {
									foreach ( $optwidgets as $val ) {
										?>
									<li>
										<a class="<?php echo esc_attr( $val['description'] ); ?>" href="<?php echo esc_url( $val['url'] ); ?>">
														  <?php
															if ( isset( $val['image'] ) ) {
																echo '<img src="' . $val['image'] . '">';
															}
															?>
										</a>
									</li>
													 <?php

									}
								}
							}

							?>
						</ul>
					</div>
				<?php if ( isset( $computer_repair['computer_repair-page-header-search-icon'] ) && $computer_repair['computer_repair-page-header-search-icon'] == 1 ) { ?>
					<div class="header-search">
						<form class="navbar-form navbar-right navbar-form-search" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="search-form-container hdn" id="search-input-container">
								<div class="search-input-group">
									<button type="button" id="hide-search-input-container"><span class="icon-cancel-music" aria-hidden="true"></span></button>
									<div class="form-group">
										<input type="text" value="" name="s" class="form-control" placeholder="<?php echo esc_attr__( 'Search...', 'computer-repair' ); ?>">
									</div>
								</div>
							</div>
							<button type="submit" id="search-button"><span class="icon-search" aria-hidden="true"></span></button>
						</form>
					</div>
				<?php } ?>

					<?php
					$homepageCart = false;

					if ( isset( $computer_repair['computer_repair-is_cart_in_home'] ) && $computer_repair['computer_repair-is_cart_in_home'] == 0 ) {
						$homepageCart = true;
					}
					$mobileCart = false;
					if ( isset( $computer_repair['computer_repair-is_cart_in_mobile'] ) && $computer_repair['computer_repair-is_cart_in_mobile'] == 0 ) {
						$mobileCart = true;
					}

					$home_cart_class = '';
					if ( is_front_page() ) {
						$home_cart_class = 'home_cart';
					}
					if ( isset( $computer_repair['computer_repair-is_cart_in_all_page'] ) && $computer_repair['computer_repair-is_cart_in_all_page'] != 1 ) {


						if ( class_exists( 'WooCommerce' ) ) {
							?>
							<!-- start mini  cart-->
							<?php
							$count            = WC()->cart->cart_contents_count;
							$conditionarray   = array();
							$conditionarray[] = ( $count > 0 );
							$conditionarray[] = is_shop();
							$conditionarray[] = is_product_category();
							$conditionarray[] = is_product();
							$conditionarray[] = is_cart();
							if ( wp_is_mobile() && count( array_unique( $conditionarray ) ) === 1 && $mobileCart != false ) {

							} else {
								if ( ! $homepageCart && is_front_page() ) {

								} else {
									?>
									<div class="header-cart <?php echo esc_attr( $home_cart_class ); ?>">
										<a class="cart-contents icon icon-shopping-cart" href="<?php echo esc_js( 'javascript:void(0)' ); ?>" title="<?php esc_html_e( 'View your shopping cart', 'computer-repair' ); ?>">

											<span class="badge cart-contents-count"><?php echo esc_html( $count ); ?></span>
										</a>
										<div class="header-cart-dropdown">
									<?php get_template_part( 'woocommerce/cart/mini', 'cart' ); ?>
										</div>
									</div>
									<!--stop mini cart-->
									<?php
								}
							}
						}
					}
					?>

				</div>
			</div>
		</div>
	</nav>
</header>
<!-- // Header -->
