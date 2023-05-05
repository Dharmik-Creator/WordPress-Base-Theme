<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	$faviconIcon = get_field('favicon_icon', 'options');
	$faviconIcon = $faviconIcon ? $faviconIcon :  get_template_directory_uri().'/assets/img/favicon.ico';
	?>
	<link rel="shortcut icon" href="<?php echo $faviconIcon; ?>" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


