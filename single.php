<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Computer_Repair
 */
get_header();
?>
<?php
$computer_repair = computer_repair_options();
$show_breadcrumb = get_post_meta(get_the_ID(), 'framework_show_breadcrumb', true);

if (!is_front_page() && (!$show_breadcrumb || $show_breadcrumb == 'on')) :
    ?>
    <?php
    if ($computer_repair['computer_repair-header-style'] == '1') {
        do_action('computer_repair_breadcrumb');
    } else {
        do_action('computer_repair_breadcrumb_2');
    }
    ?>
<?php endif; ?>
<div id="pageContent">
    <div class="container">
        <div class="row">
        <?php if(is_active_sidebar('left_sideber')){ ?>
                <div class="col-md-9 column-center with-sidebar-blog">
            <?php }else{ ?>
                <div class="col-md-12 column-center">
            <?php } ?>
                <div class="blog-post single">
                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', get_post_format());

                        echo '<div class="divider-line"></div>';
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                    <div id="postPreload"></div>
                    <div class="divider divider-lg"></div>
                </div>
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
