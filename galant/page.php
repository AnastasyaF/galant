<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Galant
 */

get_header();
?>

    <main>

        <section class="navigation">
            <nav class="main-nav">
                <ul class="main-list">
					<li class="list"><a href="#" class="main-link">Главная<span class="triangle-right"></span></a></li>
					<li class="list"><a href="#" class="main-link">Блог<span class="triangle-right"></span></a></li>
                    <li class="list"><a href="#" class="main-link-pick">Декабрь-Пик продаж косметических средств</a></li>
                </ul>
            </nav>
        </section>

        <section class="production">
            <div class="main-production">
				<div class="rectangle"></div>
           		<div class="rectangle2"></div>
                <div class="cosmetic-image">
                    <img src="<?php the_field('one_picture'); ?>" alt="Косметические средства" width="909" height="505">
                </div>
                <div class="main-heading">
					
					<?php
					$one_text_block = get_field('one_text_block');
					if( $one_text_block ): ?>
					
					    <h2 class="heading"><?php echo esc_html( $one_text_block['gen_header'] ); ?></h2>
                        <p class="main-first"><?php echo $one_text_block['first_paragraph']; ?></p>
                        <p class="main-second"><?php echo esc_html( $one_text_block['second_paragraph'] ); ?></p>
						
					<?php endif; ?>
        
                </div>
            </div>
            <div class="section-production">
				<div class="substrate"></div>
            	<div class="substrate2"></div>
                <div class="beauty-image">
                    <img src="<?php the_field('two_picture'); ?>" alt="Косметические средства" width="909" height="505">
                </div>
                <div class="section-heading">
					<?php
					$two_text_block = get_field('two_text_block');
					if( $two_text_block ): ?>
					    <p class="section-first"><?php echo esc_html( $two_text_block['one_paragraph'] ); ?></p>
                        <p class="section-second"><?php echo esc_html( $two_text_block['two_paragraph'] ); ?></p>
					<?php endif; ?>
                    
                    <a href="#" class="more">См.подробнее данные Аналитики «Data Insight»</a>
                </div>
            </div>
        </section>
        <section class="type">
            <a href="#" class="button">
                <img src="<?php bloginfo('template_url'); ?>/img/arrow.svg" class="type-arrow" alt="Стрелка влево" width="21">
                <p class="type-button">Назад к списку</p>
            </a>
        </section>

    </main>

<?php
get_footer();
