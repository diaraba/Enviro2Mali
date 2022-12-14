<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta name="google-site-verification" content="R0lpkfvwdLxMbVmzF9H_jwL5l-2xYsuukTBfKBX0KFQ" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
	

<body <?php body_class('envira envira-btn'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'envira' ); ?></a>
	
	<?php get_template_part('sections/envira','header');  ?>
	
	<div id="content">