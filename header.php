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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blueprint' ); ?></a>

	<header id="masthead" class="site--header">
		<div class="container">
			<div class="nav--wrapper">
				<div class="site-branding">
					<a href="/" class="nav--brand"></a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blueprint' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
		
	</header><!-- #masthead -->

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

  const burger = document.querySelector("#burger");
  burger.addEventListener("click", showMobileMenu);

  function showMobileMenu() {
    "use strict";
    const mobileMenu = document.querySelector(".nav-mobile--menu");
    mobileMenu.classList.toggle("is-shown");
  }
</script>

