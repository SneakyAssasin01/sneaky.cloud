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
	<div class="page-footer page-footer--style2">
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
			<div class="footer-menu-line">
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
			</div>
			<div class="container">
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
					
					<div class="col-md-4 col-lg-3 col-sm-4">
						<?php if ( isset( $computer_repair['computer_repair-footer_business_hours'] ) && $computer_repair['computer_repair-footer_business_hours'] ) { ?>
						<div class="contact-info"><i class="icon icon-clock"></i>
							<?php
							echo wp_kses_post( $computer_repair['computer_repair-footer_business_hours'] );
							?>
						</div>
						<?php } ?>

					</div>
					
					<div class="col-lg-2 visible-lg"></div>
					
						<div class="col-md-4 col-lg-3 col-sm-4">
							<?php if ( isset( $computer_repair['computer_repair-footer_email'] ) && $computer_repair['computer_repair-footer_email'] ) { ?>
						   <div class="contact-info last-item"><i class="icon icon-mail-black"></i>
							<a href="mailto:<?php echo esc_attr( $computer_repair['computer_repair-footer_email'] ); ?>"><?php echo wp_kses_post( $computer_repair['computer_repair-footer_email'] ); ?></a>
							</div>
							<?php } ?>
							<div class="social-sm">
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_facebook'] ) && ! empty( $computer_repair['computer_repair-footer_social_facebook'] ) ) {
							?>
							<a class="icon icon-facebook" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_facebook'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_twitter'] ) && ! empty( $computer_repair['computer_repair-footer_social_twitter'] ) ) {
							?>
							<a class="icon icon-twitter" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_twitter'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_google_plus'] ) && ! empty( $computer_repair['computer_repair-footer_social_google_plus'] ) ) {
							?>
							<a class="icon icon-google-plus" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_google_plus'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_pinterest'] ) && ! empty( $computer_repair['computer_repair-footer_social_pinterest'] ) ) {
							?>
							<a class="icon icon-pinterest" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_pinterest'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_linkedin'] ) && ! empty( $computer_repair['computer_repair-footer_social_linkedin'] ) ) {
							?>
							<a class="icon icon-linkedin" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_linkedin'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_instagram'] ) && ! empty( $computer_repair['computer_repair-footer_social_instagram'] ) ) {
							?>
							<a class="icon icon-instagram" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_instagram'] ); ?>"></a>/
						<?php } ?>
						<?php
						if ( isset( $computer_repair['computer_repair-footer_social_tumblr'] ) && ! empty( $computer_repair['computer_repair-footer_social_tumblr'] ) ) {
							?>
							<a class="icon icon-tumblr" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_tumblr'] ); ?>"></a>/
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_vimeo'] ) && ! empty( $computer_repair['computer_repair-footer_social_vimeo'] ) ) { ?>
							<a class="icon icon-vimeo" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_vimeo'] ); ?>"></a>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_youtube'] ) && ! empty( $computer_repair['computer_repair-footer_social_youtube'] ) ) { ?>
							<a class="icon icon-youtube" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_youtube'] ); ?>"></a>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_whatsapp'] ) && ! empty( $computer_repair['computer_repair-footer_social_whatsapp'] ) ) { ?>
							<a class="icon icon-whatsapp" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_whatsapp'] ); ?>"></a>
						<?php } ?>
						<?php if ( isset( $computer_repair['computer_repair-footer_social_snapchat'] ) && ! empty( $computer_repair['computer_repair-footer_social_snapchat'] ) ) { ?>
							<a class="icon icon-snapchat-ghost" href="<?php echo esc_url( $computer_repair['computer_repair-footer_social_snapchat'] ); ?>"></a>
						<?php } ?>
							</div>    
						</div>
					
				</div>
			</div>
				<?php if ( isset( $computer_repair['computer_repair-footer_copyright'] ) && $computer_repair['computer_repair-footer_copyright'] ) : ?>
				<div class="footer-bot-line">
				<div class="copyright">
					<?php
					echo wp_kses_post( $computer_repair['computer_repair-footer_copyright'] );
					?>
				</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- //Footer -->
	
