<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Computer_Repair
 */
get_header();


$show_sidebar = get_post_meta(get_the_ID(), 'framework_show_service_sidebar', true);



if(empty($show_sidebar) ||($show_sidebar=='')){
   $show_sidebar= 'on';
}


$show_title = get_post_meta(get_the_ID(), 'framework_show_service_title', true);
$show_breadcrumb = get_post_meta(get_the_ID(), 'framework_show_service_breadcrumb', true);

$computer_repair = computer_repair_options();

if ($computer_repair['computer_repair-header-style'] == '2') {
    if ($show_breadcrumb != 'off') {
        do_action('computer_repair_breadcrumb_2');
    }
}

?>
<div id="pageContent">
    <?php

    if ($computer_repair['computer_repair-header-style'] == '1' || $computer_repair['computer_repair-header-style'] == '3') {
        if ($show_breadcrumb != 'off') {
            do_action('computer_repair_breadcrumb');
        }
    }

    ?>
    <div class="block margin-top-less-42">
        <div class="container">
             <?php if ($show_sidebar == 'on' && isset($show_sidebar)) : ?>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <?php get_sidebar('services'); ?>
                </div>
                <?php endif; ?>
                <?php if ($show_sidebar == 'on' && isset($show_sidebar)) : ?>
                <div class="divider-lg visible-xs"></div>
                <div class="col-md-8 col-lg-9">
                <?php endif; ?>
                    <?php
                    if($show_title != 'off') :
                        $title = get_the_title();
                        $pieces = explode(' ', $title);
                        $last_word = array_pop($pieces);
                        $final_title = str_replace($last_word, '<span class="color">' . $last_word . '<span>', $title);
                        echo '<h1>' . $final_title . '</h1>';
                    endif;
                    ?>
                    <?php the_post_thumbnail('computer-repair-service-full') ?>
                    <?php
                    while (have_posts()) : the_post();
                        ?>

                        <div id="post-<?php the_ID(); ?>" <?php post_class('blog-post single'); ?>>

                            <div class="post-image">

                                <div class="post-teaser">
                                    <?php
                                    the_content();
                                    ?>
                                </div>

                            </div>
                        </div>
                        <?php
                    endwhile; // End of the loop.
                    ?>
                <?php if ($show_sidebar == 'on' && isset($show_sidebar)) : ?>     
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
