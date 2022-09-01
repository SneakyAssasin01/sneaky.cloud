<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Computer_Repair
 */

get_header(); ?>
<div id="primary" class="content-area container">
	<div class="block bottom-sm-1">
			<div class="container">
				<?php do_action('computer_repair_breadcrumb'); ?>
			</div>
	</div>
	<div id="pageContent" class="content-area">
		<main id="main" class="site-main col-md-9 column-center" role="main">
			<section class="error-404 not-found">
				<header class="blog-page-header">
					<h1 class="text-center color"><?php esc_html_e( '404!', 'computer-repair' ); ?></h1>
					<h3 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'computer-repair' ); ?></h3>
				</header><!-- .page-header -->
				<div class="page-content">
					<div class="container-fluid search_404_form">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'computer-repair' ); ?></p>
					<?php
						get_search_form();
					?>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
		<div class="col-md-3 column-right">
			<?php get_sidebar();?>
		</div>
	</div>
</div><!-- #primary -->
<?php
get_footer();