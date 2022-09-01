<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */
get_header();
$computer_repair = computer_repair_options();

$show_breadcrumb = get_post_meta( get_the_ID(), 'framework_show_breadcrumb', true );
$show_sidebar    = get_post_meta( get_the_ID(), 'framework_show_sidebar', true );

if ( $computer_repair['computer_repair-header-style'] == '2' ) {
	if ( ! is_front_page() && ( $show_breadcrumb != 'off' ) ) {
		do_action( 'computer_repair_breadcrumb_2' );
	}
}
?>

<div id="primary" class="content-area container">
	<?php
	if ( $computer_repair['computer_repair-header-style'] == '1' || $computer_repair['computer_repair-header-style'] == '3' ) {
		if ( ! is_front_page() && ( $show_breadcrumb != 'off' ) ) {
			do_action( 'computer_repair_breadcrumb' );
		}
	}
	?>
	<div id="pageContent" class="content-area">
		<div class="block">
			<?php if ( $show_sidebar == 'on' ) : ?>
				<div class="row">
					<div class="col-md-9 column-center">
					<?php endif; ?>
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<?php if ( $show_sidebar == 'on' ) : ?>
					<div class="col-md-3 column-right">
						<?php get_sidebar( 'page' ); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div><!-- #pageContent -->
</div>
<?php
get_footer();
