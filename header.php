<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crunchy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
				<div class="top-bar">
			        <div class="top-bar-left">
			          <ul class="menu">
			            <li class="brand">
			            						<?php
							if ( is_front_page() && is_home() ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php else : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php
							endif; ?>
			           </li>
			           </ul>
			         </div>

                <!-- The WordPress Menu goes here -->
        			<div class="top-bar-left">	
			                <?php wp_nav_menu(
			                                    array(
			                                        'theme_location' => 'primary',
			                                        'container' => false,                           // Remove nav container
											        'menu_class' => 'vertical medium-horizontal menu',       // Adding custom nav class
											        'items_wrap' => '<ul id="%1$s" class="dropdown menu" data-dropdown-menu>%3$s</ul>',
			                                        'fallback_cb' => '',
			                                        'menu_id' => 'main-menu',
			                                        'walker' => new Foundationpress_Top_Bar_Walker()
			                                    )
			                ); ?>
			        </div>
                </div>

		</header><!-- #masthead -->

	<div id="content" class="row site-content">
