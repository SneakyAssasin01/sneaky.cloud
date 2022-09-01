<?php
$computer_repair = computer_repair_options();
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Computer_Repair
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
	   <?php
		if ( function_exists( 'has_site_icon' ) && has_site_icon() ) { // since 4.3.0
			wp_site_icon();
		} else {
			if ( isset( $computer_repair['computer_repair-site-favicon']['url'] ) && ! empty( $computer_repair['computer_repair-site-favicon']['url'] ) ) {
				?>
			<link rel="shortcut icon" href="<?php echo esc_url( $computer_repair['computer_repair-site-favicon']['url'] ); ?>" type="image/x-icon"/>
				<?php
			}
		}
		?>
		<?php wp_head(); ?>
	</head>
	<?php
	$gradient_class = '';
	if ( isset( $computer_repair['computer_repair-gradient_enable'] ) && $computer_repair['computer_repair-gradient_enable'] ) {
		$gradient_class = 'layout-2';
	}
	?>
	<body <?php body_class( $gradient_class ); ?>>
	<?php wp_body_open(); ?>
		<?php
		if ( $computer_repair['computer_repair-header-style'] == '1' ) {
			get_template_part( 'template-parts/header-part-1' );
		} elseif ( $computer_repair['computer_repair-header-style'] == '2' ) {
			get_template_part( 'template-parts/header-part-2' );
		} else {
			get_template_part( 'template-parts/header-part-3' );
		}
		?>
