<?php
/**
 * Site header.
 *
 * @package HairFocus
 */

if (!defined('ABSPATH')) {
	exit;
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-section">
		<div class="container">
			<div class="logo">
				<?php if (has_custom_logo()): ?>
					<?php the_custom_logo(); ?>
				<?php else: ?>
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				<?php endif; ?>
			</div>
			<nav class="nav-links">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id' => 'primary-menu',
					)
				);
				?>
			</nav>
			<a class = "btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">
				Book an appointment
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-white.svg" alt="Arrow White">
			</a>
			<div class="menu-toggle">
				<div class="menu-toggle__bar"></div>
				<div class="menu-toggle__bar"></div>
				<div class="menu-toggle__bar"></div>
			</div>
		</div>
		<div class="mobile-nav">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id' => 'primary-menu',
					)
				);
				?>
		</div>
	</header>