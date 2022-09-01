<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Repair
 */

if(is_active_sidebar('pagesidebar')){
    ?>
        <?php dynamic_sidebar('pagesidebar')?>

    <?php
}