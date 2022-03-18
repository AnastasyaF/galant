<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Galant
 */

?>

<footer class="page-footer">
        <div class="footer-container">
            <a href="index.html" class="footer-logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Логотип магазина Golant" width="236" height="41.73">
            </a>
            <nav class="footer-nav">
                <ul class="footer-nav-list">
                    <?php
					$footer_menu = get_field('footer_menu');
					if( $footer_menu ): ?>
					
						<li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_1'] ); ?></a></li>
                        <li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_2'] ); ?></a></li>
						<li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_3'] ); ?></a></li>
						<li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_4'] ); ?></a></li>
						<li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_5'] ); ?></a></li>
						<li class="list-item"><a href="#" class="item-link"><?php echo esc_html( $footer_menu['no_6'] ); ?></a></li>
					<?php endif; ?>
                </ul>
            </nav>
            <div class="footer-contacts">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt="Телефон" width="24" height="24">
                <a class="footer-phone" href="tel:+4951337591"><?php the_field('telephone'); ?></a>
                <img src="<?php bloginfo('template_url'); ?>/img/email.svg" alt="Почта" width="24" height="24">
                <a class="footer-email" href="mailto:info@galant-cosmetic.ru"><?php the_field('email'); ?></a>
            </div>
        </div>
    </footer>

</body>

</html>