<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Computer_Repair
 */

get_header();
?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main col-md-9 column-center" role="main">
		<section class="error-404 not-found">
			<header class="blog-page-header">
			<?php if ( have_posts() ) : ?>
				<h1 class="text-center"><?php printf( esc_html__( 'Search Results for: %s', 'computer-repair' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php else : ?>
				<h1 class="text-centere"><?php esc_html__( 'Nothing Found', 'computer-repair' ); ?></h1>
			<?php endif; ?>
			</header><!-- .page-header -->
			<div class="page-content">
				<div class="container-fluid ">

		<?php
		if ( have_posts() ) :
			?>

			<div class="post_loop_cont_wrap">
				<div class="post_loop_cont">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
					?>
				</div>
			</div>
			<?php
			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
	<div class="col-md-3 column-right">
		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->
<?php
get_footer();
