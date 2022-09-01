<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */

?>
<section class="no-results not-found">
		<header class="blog-page-header">
			<h1 class="page-title text-center"><?php esc_html_e( 'Nothing Found', 'computer-repair' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'computer-repair' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>
				<div class="search_404_form">
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'computer-repair' ); ?></p>
				<?php
					get_search_form();
				?>
				</div>
			<?php else : ?>
				<div class="search_404_form">
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'computer-repair' ); ?></p>
				<?php
					get_search_form();
				?>
				</div>
			<?php endif; ?>
		</div><!-- .page-content -->
	</section><!-- .no-results -->