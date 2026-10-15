<?php

/**
 * Site footer.
 *
 * @package HairFocus
 */

if(!defined('ABSPATH')) {
    exit;
}

?>

<footer class = "footer-section">
    <div class="container footer-content">
        <div class="footer-logo">
            <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
        </div>
        <div class="footer-nav">
            <div class = "footer-nav-links">
                <p>Explore</p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'menu_id' => 'footer-menu',
                    )
                );
                ?>
            </div>
            <div class="footer-nav-links">
                <p>Support</p>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Book an Appointment</a></li>
                </ul>
            </div>
        </div>
        <div class = "footer-social">
            <p class="footer-social__title">Follow us</p>
            <p class="footer-social__description">Stay updated on salon news, styling inspiration and behind-the-scenes moments.</p>
            <div class="footer-social__icons-wrapper">
                <a href="#" accesskey="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram.svg" alt="Instagram Icon">
                    Instagram
                </a>
                <a href="#" accesskey="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook.svg" alt="Facebook Icon">
                    Facebook
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <p class = "footer-bottom-text">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        <p class = "footer-bottom-text">Designed by <span><a href = "https://complexbrains.com" target="_blank">Complex Brains Software Engineers</a></span></p>
    </div>

</footer>
<?php wp_footer(); ?>
</body>