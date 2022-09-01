<?php
$computer_repair = computer_repair_options();
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Repair
 */

	if (isset($computer_repair['computer_repair-footer-style']) && $computer_repair['computer_repair-footer-style'] == '2') {
		get_template_part('template-parts/footer-part-2');
	} else {
		get_template_part('template-parts/footer-part-1');
	}
   
?>
	<!--================== modal ==================-->
	<?php
	 if ( $computer_repair['is_modal_enable'] == 1) { get_template_part( 'template-parts/modal' ); }
	 if ( $computer_repair['is_modal2_enable'] == 1) { get_template_part( 'template-parts/modal2' ); } 
	 ?>
	<!-- / Modal  -->

<?php wp_footer(); ?>
</body>
</html>