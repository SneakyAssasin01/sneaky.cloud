<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

defined( 'ABSPATH' ) || exit;

$computer_repair = computer_repair_options();

get_header( 'shop' ); 

if (isset($computer_repair['computer_repair-header-style']) && $computer_repair['computer_repair-header-style'] == '2') {

    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 5);

}
?>

<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action( 'woocommerce_before_main_content' );
?>

<header class="woocommerce-products-header">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
    <?php endif; ?>
    <?php
        /**
         * woocommerce_archive_description hook.
         *
         * @hooked woocommerce_taxonomy_archive_description - 10
         * @hooked woocommerce_product_archive_description - 10
         */
        do_action( 'woocommerce_archive_description' );
    ?>
</header>
<div id="pageContent">
    <div class="block">
    	<div class="container">
    		<div class="col-md-4 col-lg-3 column-left column-filters sidebar-div">
			<?php
                /**
                 * woocommerce_sidebar hook.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                do_action( 'woocommerce_sidebar' );
            ?>
            </div>
            <div class="col-md-8 col-lg-9 column-center tt">
        <?php if ( woocommerce_product_loop() ) { ?>
            <div class="filters-row">
                <div class="filters-row-left">
                <?php
                /**
                * woocommerce_before_shop_loop hook.
                *
                * @hooked wc_print_notices - 10
                * @hooked woocommerce_result_count - 20
                * @hooked woocommerce_catalog_ordering - 30
                */
                do_action( 'woocommerce_before_shop_loop' );
                ?>
                </div>
                <div class="filters-row-right">
                <?php  do_action( 'woocommerce_after_shop_loop',true ); ?>
                </div>
            </div>
        
            <?php woocommerce_product_loop_start();
            if ( wc_get_loop_prop( 'total' ) ) { 
                while ( have_posts() ) { 
                    the_post(); 
                    /**
                    * woocommerce_shop_loop hook.
                    *
                    * @hooked WC_Structured_Data::generate_product_data() - 10
                    */
                    do_action( 'woocommerce_shop_loop' );
                    wc_get_template_part( 'content', 'product' ); 
                } 
            } 
            woocommerce_product_loop_end();
        
        /**
        * woocommerce_after_shop_loop hook.
        *
        * @hooked woocommerce_pagination - 10
        */
            do_action( 'woocommerce_after_shop_loop' );
        }else{ 
            /**
            * woocommerce_no_products_found hook.
            *
            * @hooked wc_no_products_found - 10
            */
            do_action( 'woocommerce_no_products_found' );
        }
        /**
        * woocommerce_after_main_content hook.
        *
        * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
        */
        do_action( 'woocommerce_after_main_content' );
        ?>
        </div>
    	</div>
	</div>
</div>
	
<?php get_footer( 'shop' ); ?>
