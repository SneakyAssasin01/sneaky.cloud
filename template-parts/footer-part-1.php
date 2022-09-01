<?php
$computer_repair = computer_repair_options();
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Repair
 */
?>
	<!-- Footer -->
	<div class="page-footer">
		<div class="footer-content">
			<div class="back-to-top">
				<a href="#top">
					<?php if ( isset( $computer_repair['computer_repair-backTo_tor'] ) && $computer_repair['computer_repair-backTo_tor']['url'] != '' ) { ?>
								<img src="<?php echo esc_url( $computer_repair['computer_repair-backTo_tor']['url'] ); ?>" alt="<?php esc_html_e( 'image', 'computer-repair' ); ?>" />
					<?php } else { ?>
						<span class="icon icon-mouse-scroll"></span>
					<?php } ?>
				</a>
			</div>
			<div class="container">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'container'      => 'ul',
						'menu_class'     => 'footer-menu',
						'fallback_cb'    => false,
						'walker'         => new Walker_Computer_Repair_Menu(), // use our custom walker
					)
				);
				?>
				<div class="social-links">
			 
					<ul>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_facebook'] ) && ! empty( $computer_repair['computer_repair-footer_social_facebook'] ) ) {
							?>
						<li>
							<a class="icon icon-facebook" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_facebook'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_twitter'] ) && ! empty( $computer_repair['computer_repair-footer_social_twitter'] ) ) {
							?>
						<li>
							<a class="icon icon-twitter" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_twitter'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_google_plus'] ) && ! empty( $computer_repair['computer_repair-footer_social_google_plus'] ) ) {
							?>
						<li>
							<a class="icon icon-google-plus" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_google_plus'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_pinterest'] ) && ! empty( $computer_repair['computer_repair-footer_social_pinterest'] ) ) {
							?>
						<li>
							<a class="icon icon-pinterest" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_pinterest'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_linkedin'] ) && ! empty( $computer_repair['computer_repair-footer_social_linkedin'] ) ) {
							?>
						<li>
							<a class="icon icon-linkedin" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_linkedin'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_instagram'] ) && ! empty( $computer_repair['computer_repair-footer_social_instagram'] ) ) {
							?>
						<li>
							<a class="icon icon-instagram" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_instagram'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_tumblr'] ) && ! empty( $computer_repair['computer_repair-footer_social_tumblr'] ) ) {
							?>
						<li>
							<a class="icon icon-tumblr" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_tumblr'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_vimeo'] ) && ! empty( $computer_repair['computer_repair-footer_social_vimeo'] ) ) {
							?>
						<li>
							<a class="icon icon-vimeo" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_vimeo'] ); ?>"></a>
						</li>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_youtube'] ) && ! empty( $computer_repair['computer_repair-footer_social_youtube'] ) ) { ?>
							<li>
							<a class="icon icon-youtube" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_youtube'] ); ?>"></a>
							</li>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_whatsapp'] ) && ! empty( $computer_repair['computer_repair-footer_social_whatsapp'] ) ) { ?>
							<li>
							<a class="icon icon-whatsapp" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_whatsapp'] ); ?>"></a>
							</li>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_snapchat'] ) && ! empty( $computer_repair['computer_repair-footer_social_snapchat'] ) ) { ?>
							<li>
							<a class="icon icon-snapchat-ghost" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_snapchat'] ); ?>"></a>
							</li>
						<?php } ?>
					</ul>
				</div>
				<?php if ( ( isset( $computer_repair['computer_repair-footer_contact_info'] ) && $computer_repair['computer_repair-footer_contact_info'] ) && ( isset( $computer_repair['computer_repair-footer_contact_phone'] ) && $computer_repair['computer_repair-footer_contact_phone'] ) ) { ?>
				<div class="footer-phone">
					<i class="icon icon-phone-receiver"></i>
					<?php
					if ( isset( $computer_repair['computer_repair-footer_contact_info'] ) && $computer_repair['computer_repair-footer_contact_info'] ) {
						echo wp_kses_post( $computer_repair['computer_repair-footer_contact_info'] );
					}
					?>
					<span class="number">
					<?php
					if ( isset( $computer_repair['computer_repair-footer_contact_phone'] ) && $computer_repair['computer_repair-footer_contact_phone'] ) {
						echo wp_kses_post( $computer_repair['computer_repair-footer_contact_phone'] );
					}
					?>
					</span>
				</div>
				<?php } ?>
				<div class="row footer-columns">
					<div class="col-lg-2 visible-lg"></div>
					<?php if ( isset( $computer_repair['computer_repair-footer_contact_location'] ) && $computer_repair['computer_repair-footer_contact_location'] ) { ?>
					<div class="col-md-4 col-lg-3 col-sm-4">

						<div class="contact-info"><i class="icon icon-placeholder-for-map"></i>
						<?php
						echo wp_kses_post( $computer_repair['computer_repair-footer_contact_location'] );
						?>
						</div>
					
					</div>
					<?php } ?>
					<?php if ( isset( $computer_repair['computer_repair-footer_business_hours'] ) && $computer_repair['computer_repair-footer_business_hours'] ) { ?>
					<div class="col-md-4 col-lg-3 col-sm-4">
						<div class="contact-info"><i class="icon icon-clock"></i>
						<?php
						echo wp_kses_post( $computer_repair['computer_repair-footer_business_hours'] );
						?>
						</div>
					</div>
					<?php } ?>
					<div class="col-lg-2 visible-lg"></div>
					<?php if ( isset( $computer_repair['computer_repair-footer_email'] ) && $computer_repair['computer_repair-footer_email'] ) { ?>
						<div class="col-md-4 col-lg-3 col-sm-4">
						   <div class="contact-info last-item"><i class="icon icon-mail-black"></i>
							<a href="mailto:<?php echo esc_attr( $computer_repair['computer_repair-footer_email'] ); ?>"><?php echo wp_kses_post( $computer_repair['computer_repair-footer_email'] ); ?></a>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php
				if ( isset( $computer_repair['computer_repair-footer_copyright'] ) && $computer_repair['computer_repair-footer_copyright'] ) :
					?>
				<div class="copyright">
				
					<?php
					echo wp_kses_post( $computer_repair['computer_repair-footer_copyright'] );
					?>
				</div>
				<?php endif; ?>
			<?php
			if ( ( isset( $computer_repair['computer_repair-footer_link_one_url'] ) && ! empty( $computer_repair['computer_repair-footer_link_one_url'] ) )
				|| ( isset( $computer_repair['computer_repair-footer_link_two_url'] ) && ! empty( $computer_repair['computer_repair-footer_link_two_url'] ) )
			) :
				?>
				<div class="footer-links text-center">
						<a href="
				<?php
				if ( isset( $computer_repair['computer_repair-footer_link_one_url'] ) && $computer_repair['computer_repair-footer_link_one_url'] ) {
					echo esc_url( $computer_repair['computer_repair-footer_link_one_url'] );
				}
				?>
						">
				<?php
				if ( isset( $computer_repair['computer_repair-footer_link_one_text'] ) && $computer_repair['computer_repair-footer_link_one_text'] ) {
					echo wp_kses_post( $computer_repair['computer_repair-footer_link_one_text'] );
				}
				?>
						  </a>
						<a href="
				<?php
				if ( isset( $computer_repair['computer_repair-footer_link_two_url'] ) && $computer_repair['computer_repair-footer_link_two_url'] ) {
					echo esc_url( $computer_repair['computer_repair-footer_link_two_url'] );
				}
				?>
						">
				<?php
				if ( isset( $computer_repair['computer_repair-footer_link_two_text'] ) && $computer_repair['computer_repair-footer_link_two_text'] ) {
					echo wp_kses_post( $computer_repair['computer_repair-footer_link_two_text'] );
				}
				?>
						  </a>
				</div>
			<?php endif; ?>
			</div>
		</div>
		<?php do_action( 'computer_repair_after_footer' ); ?>
	</div>
	<!-- //Footer -->
