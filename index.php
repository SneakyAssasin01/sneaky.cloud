<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Computer_Repair
 */
$computer_repair = computer_repair_options();
get_header();

if ($computer_repair['computer_repair-header-style'] == '2') {
    do_action('computer_repair_breadcrumb_2');
} else {
    do_action('computer_repair_breadcrumb');
}
?>

<div id="pageContent">
    <div class="container">

        <?php if (is_home() && !is_front_page()) { ?>
            <h1 class="text-center color blog-page-title">
                <?php echo single_post_title(); ?>
            </h1>
        <?php } ?>
        <div class="row">
        <?php if(is_active_sidebar('left_sideber')){ ?>
                <div class="col-md-9 column-center with-sidebar-blog">
            <?php }else{ ?>
                <div class="col-md-12 column-center">
            <?php } ?>

                <?php
                if (have_posts()) :
                    ?>
                    <div class="post_loop_cont_wrap">
                        <?php if (is_home() && !is_front_page()) : ?>
                            <?php
                        endif;
                        ?>

                        <div class="post_loop_cont">
                            <?php
                            while (have_posts()) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_format());

                            endwhile;
                            ?>

                        </div>
                        <div class="clearfix"></div>
                        <?php
                        if (isset($computer_repair['blogpost_pagination_load']) && $computer_repair['blogpost_pagination_load'] == 'navigation') {
                            the_posts_navigation();
                        } elseif (isset($computer_repair['blogpost_pagination_load']) && $computer_repair['blogpost_pagination_load'] == 'ajax_load') {
                            ?>
                            <div id="postPreload"></div>
                            <div class="text-center"><a class="btn btn-lg view-more-post ajax_load_post_btn" data-post_per_load="<?php echo get_option('posts_per_page'); ?>" data-load="post-more-ajax-card.txt" ><?php esc_html_e('More Posts', 'computer-repair'); ?></a>
                                <img class="ajax_load_post_img" alt="<?php esc_html_e('Load posts via AJAX', 'computer-repair'); ?>" src="<?php echo COMPUTER_REPAIR_IMG_URL; ?>/ajax-loader.gif" />
                            </div>
                            <div class="divider divider-lg"></div>
                            <?php
                        } else {
                            the_posts_pagination();
                        }
                        ?>
                    </div>
                    <?php
                else :

                    get_template_part('template-parts/content', 'none');

                endif;
                ?>

            </div><!-- .col-md-9 column-center -->
            <!-- sidebar -->
            <?php if(is_active_sidebar('left_sideber')){ ?>
            <div class="col-md-3 column-right">
                <?php get_sidebar(); ?>
            </div>
            <?php } ?>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #pageContent -->

<?php
get_footer();
