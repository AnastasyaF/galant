<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Galant
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <title>Galant</title>
</head>

<body>

    <header class="page-header">
        <div class="info-container">
            <div class="address-container">
                <div class="address">
                    <p class="address-location"><img src="<?php bloginfo('template_url'); ?>/img/location.svg" alt="Адрес" class="location" align="left">
                    <?php the_field('address'); ?></p>
                </div>
                <div class="schedule">
                    <p class="schedule-time"><img src="<?php bloginfo('template_url'); ?>/img/time.svg" alt="График работы" class="time" align="left">
                    <?php the_field('график_работы'); ?></p>
                </div>
            </div>
            <ul class="social-list">
                <li>
                    <a href="#" class="social-link-vk">
                        <img src="<?php bloginfo('template_url'); ?>/img/vk.svg" alt="Иконка Вконтакте" width="22" height="22">
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link-inst">
                        <img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="Иконка инстаграмм" width="24" height="24">
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link-fb">
                        <img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="Иконка фейсбука" width="24" height="24">
                    </a>
                </li>
            </ul>
        </div>
        <div class="header-container">
            <a href="index.html" class="logo">
                <img src="<?php the_field('logo'); ?>" alt="Логотип магазина Golant" width="236" height="41.73">
            </a>
			
			<nav class="header-nav">
				<ul class="header-nav-list">

					<?php
                    $main_menu = get_field('main_menu');
                    if( $main_menu ): ?>
			
                    <li class="list-item"><a href="#"><?php echo esc_html( $main_menu['number_1'] ); ?><span class="triangle-down"></span></a></li>
                    <li class="list-link"><a href="#"><?php echo esc_html( $main_menu['number_2'] ); ?><span class="triangle-down"></span></a></li>
                    <li><a href="#"><?php echo esc_html( $main_menu['number_3'] ); ?></a></li>
                    <li><a href="#"><?php echo esc_html( $main_menu['number_4'] ); ?></a></li>
                    <li><a href="#"><?php echo esc_html( $main_menu['number_5'] ); ?></a></li>
                    <li><a href="#"><?php echo esc_html( $main_menu['number_6'] ); ?></a></li>
                
                    <?php endif; ?>
				</ul>
			</nav>

	
            <div class="header-contacts">
                <img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt="Телефон" width="24" height="24">
                <a class="header-phone" href="tel:+4951337591">+7 (495) 133-75-91</a>
                <img src="<?php bloginfo('template_url'); ?>/img/email.svg" alt="Почта" width="24" height="24">
                <a class="header-email" href="mailto:info@galant-cosmetic.ru">info@galant-cosmetic.ru</a>
            </div>
            
        </div>
    </header>