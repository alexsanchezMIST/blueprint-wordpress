<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blueprint
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	<script src="//unpkg.com/alpinejs" defer></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'blueprint' ); ?>
	</a>

	<header id="masthead" class="site--header">
		<div class="container">
			<div class="nav--wrapper">
				<div class="site-branding">
					<a href="/" class="nav--brand"></a>
				</div>

				<nav id="site-navigation" class="main-navigation" x-data="{ open: false }" x-cloak>
					<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" @click="open = ! open">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hamburger.svg" class="hamburger" />
					</button>
					<div class="mobile-navigation" x-show="open">
						<button class="close" aria-controls="primary-menu" @click="open = false">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/close.svg" alt="" class="close">
						</button>
						<div class="mobile-menu-wrapper">
							<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu-mobile', 'menu_class' => 'mobile-menu', 'container_class' => "mobile-menu-container")); ?>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

<script>
  window.onscroll = function () {
    "use strict";
    const header = document.querySelector("#masthead");

    if (window.scrollY > 1) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };
</script>

