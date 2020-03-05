<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frankfilms
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="top" class="wrapper">
	<header class="main-header">
        <div class="header-wrap">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php $brandlogo = get_field('site_logo', 'options');
                    echo wp_get_attachment_image( $brandlogo, 'full', false );?>
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <a class="menu-toggle" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav>
        </div>
	</header>

	<div id="content" class="site-content">
