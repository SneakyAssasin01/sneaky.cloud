<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */
$show_title = get_post_meta( get_the_ID(), 'framework_show_page_title', true );



?>

<div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( $show_title != 'off' ) : ?>
		<?php if ( ! is_home() && ! is_front_page() ) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title h-lg text-center">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<?php endif; ?>
	<?php endif; ?>
	<!-- Block -->
	<div class="block offset-sm">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'computer-repair' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<!-- //Block -->
</div>
