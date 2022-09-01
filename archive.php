<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */
get_header();
$computer_repair = computer_repair_options();
?>

<div id="pageContent" class="content-area">
    <?php
    $show_breadcrumb = get_post_meta(get_the_ID(), 'framework_show_breadcrumb', true);
    if (!is_front_page()) :
        ?>
        <?php
        if ($computer_repair['computer_repair-header-style'] == '2') {
            do_action('computer_repair_breadcrumb_2');
        } else {
            do_action('computer_repair_breadcrumb');
        }
        ?>
    <?php endif; ?>
    <div class="block">
        <div id="primary" class="container">
            <?php if (have_posts()) : ?>
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="archive-description">', '</div>');
                ?>
                <div class="col-md-9 column-center">
                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part('template-parts/content', 'none');

                endif;
                ?>
            </div>
            <div class="col-md-3 column-right">
                <?php
                get_sidebar();
                ?>
            </div>
        </div><!-- #primary -->
    </div>
</div><!-- #pageContent -->
<?php
get_footer();
