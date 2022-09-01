<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Repair
 */

if(is_active_sidebar('left_sideber')){
    ?>
        <?php dynamic_sidebar('left_sideber')?>

    <?php
}