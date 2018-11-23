<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */

get_header(); ?>

	<div id="news" class="content-area">
        <div class="w">
            <section class="top flex">
                <div class="sb flex flex-sa">
                    <a href="tel:0442283898">+38 (044) 228-38-98</a>
                </div>
                <div class="top_cnt">
                    <h1 class="cat_n"><?php the_archive_title(); ?></h1>
                    <div class="btn_filter-w">
                        <?php
                        wp_nav_menu( array(
                            'container'      => false,
                            'echo'           => true,
                            'depth'          => 0,
                            'items_wrap'     => '%3$s',
                            'menu'           => 'news filters'
                        ) );
                        ?>
                    </div>
                </div>
            </section>
            <section class="news_bl">
                <div class="readiness">
                    <div class="wrap flex flex-sb">
                        <p>
                            <?php echo __('[:ua]Готовність:
                                [:ru]Готовность:
                                [:en]Readiness:[:]'); ?>
                        </p>
                        <div>
                            <p>&#8544;
                                <?php echo __('[:ua]секція
                                [:ru]секция
                                [:en]section[:]'); ?> -
                                <?php echo __('[:ua]побудовано
                                [:ru]построено
                                [:en][:]'); ?>
                                <span class="count">14</span>
                                <?php echo __('[:ua]поверхів з
                                [:ru]этажей с
                                [:en]floors[:]'); ?>
                                14
                            </p>
                            <p>&#8545;
                                <?php echo __('[:ua]секція
                                [:ru]секция
                                [:en]section[:]'); ?> -
                                <?php echo __('[:ua]побудовано
                                [:ru]построено
                                [:en][:]'); ?>
                                <span class="count">16</span>
                                <?php echo __('[:ua]поверхів з
                                [:ru]этажей с
                                [:en]floors[:]'); ?>
                                23
                            </p>
                            <p>&#8546;
                                <?php echo __('[:ua]секція
                                [:ru]секция
                                [:en]section[:]'); ?> -
                                <?php echo __('[:ua]побудовано
                                [:ru]построено
                                [:en][:]'); ?>
                                <span class="count">12</span>
                                <?php echo __('[:ua]поверхів з
                                [:ru]этажей с
                                [:en]floors[:]'); ?>
                                15
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;
                $news = new WP_Query( array (
                        'cat'            => $cat_id,
                        'posts_per_page' => 7,
                        'paged'          => $paged,
                        'order'          => 'DESC',
                        'orderby'        => 'date'
                ) ); ?>
                <div class="cnt flex flex-sb">
                    <?php
                        if ( have_posts() ) :
                            while ( $news->have_posts() ) :
                                $news->the_post();
                        get_template_part('content', get_post_format());
                        endwhile;
                        else :
                            get_template_part( 'content', 'none' );
                        endif;
                        if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(array('query' => $news));
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </section>
            <section class="progress_bl">
                <div class="cnt">
                    <h2><?php echo __('[:ru]Хронология строительства[:ua]Хронологія будівництва[:]') ?></h2>
                    <div class="owl-carousel progress_gallery">
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-6-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-6-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-6-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-4-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-4-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-4-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-3-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-3-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-3-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/IMG_2633-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_IMG_2633-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/IMG_2633-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-2-100-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-2-100-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/%D0%9C%D0%BE%D0%BD%D1%82%D0%B0%D0%B6%D0%BD%D0%B0%D1%8F-%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C-1-%D0%BA%D0%BE%D0%BF%D0%B8%D1%8F-2-100-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/IMG_2656-min.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/thumbs/thumbs_IMG_2656-min.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.11.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/07-11-khod-stroytelstva/IMG_2656-min.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1916.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1916.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1916.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1937.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1937.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1937.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1966.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1966.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1966.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1962.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1962.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1962.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1958.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1958.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1958.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1956.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1956.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1956.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1943.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1943.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1943.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1976.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1976.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1976.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1983.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1983.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1983.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1985.jpg" class="crop" data-fancybox="group_7">
                                <img src="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/thumbs/thumbs_IMG_1985.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">22.10.2018</p>
                            <a href="https://henesi-house.com.ua/wp-content/gallery/22-10-khod-stroytelstva/IMG_1985.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/6.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/6.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/6.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/5.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/5.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/5.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/12.09.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/12.09.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">12.09.2018</p>
                            <a href="/img/progress/12.09.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/11.09.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/11.09.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">11.09.2018</p>
                            <a href="/img/progress/11.09.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/07.09.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/07.09.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">07.09.2018</p>
                            <a href="/img/progress/07.09.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/07.09.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/07.09.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">07.09.2018</p>
                            <a href="/img/progress/07.09.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/09.08.2018/5.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/09.08.2018/5.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">09.08.2018</p>
                            <a href="/img/progress/09.08.2018/5.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/09.08.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/09.08.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">09.08.2018</p>
                            <a href="/img/progress/09.08.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/09.08.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/09.08.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">09.08.2018</p>
                            <a href="/img/progress/09.08.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/09.08.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/09.08.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">09.08.2018</p>
                            <a href="/img/progress/09.08.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/09.08.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/09.08.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">09.08.2018</p>
                            <a href="/img/progress/09.08.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/7.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/7.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/7.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/6.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/6.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/6.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/5.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/5.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/5.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.07.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.07.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.07.2018</p>
                            <a href="/img/progress/19.07.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/03.07.2018/3.JPG" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/03.07.2018/3.JPG" alt="Хронология строительства">
                            </a>
                            <p class="date">03.07.2018</p>
                            <a href="/img/progress/03.07.2018/3.JPG" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/03.07.2018/2.JPG" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/03.07.2018/2.JPG" alt="Хронология строительства">
                            </a>
                            <p class="date">03.07.2018</p>
                            <a href="/img/progress/03.07.2018/2.JPG" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/03.07.2018/1.JPG" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/03.07.2018/1.JPG" alt="Хронология строительства">
                            </a>
                            <p class="date">03.07.2018</p>
                            <a href="/img/progress/03.07.2018/1.JPG" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/02.07.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/02.07.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">02.07.2018</p>
                            <a href="/img/progress/02.07.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/02.07.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/02.07.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">02.07.2018</p>
                            <a href="/img/progress/02.07.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/27.06.2018/1.JPG" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/27.06.2018/1.JPG" alt="Хронология строительства">
                            </a>
                            <p class="date">27.06.2018</p>
                            <a href="/img/progress/27.06.2018/1.JPG" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.06.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.06.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.06.2018</p>
                            <a href="/img/progress/19.06.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/19.06.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/19.06.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">19.06.2018</p>
                            <a href="/img/progress/19.06.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/18.06.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/18.06.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">18.06.2018</p>
                            <a href="/img/progress/18.06.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/18.06.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/18.06.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">18.06.2018</p>
                            <a href="/img/progress/18.06.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/18.06.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/18.06.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">18.06.2018</p>
                            <a href="/img/progress/18.06.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/18.06.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/18.06.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">18.06.2018</p>
                            <a href="/img/progress/18.06.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/21.05.2018/5.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/21.05.2018/5.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">21.05.2018</p>
                            <a href="/img/progress/21.05.2018/5.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/21.05.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/21.05.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">21.05.2018</p>
                            <a href="/img/progress/21.05.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/21.05.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/21.05.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">21.05.2018</p>
                            <a href="/img/progress/21.05.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/21.05.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/21.05.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">21.05.2018</p>
                            <a href="/img/progress/21.05.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/21.05.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/21.05.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">21.05.2018</p>
                            <a href="/img/progress/21.05.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/08.05.2018/5.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/08.05.2018/5.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.05.2018</p>
                            <a href="/img/progress/08.05.2018/5.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/08.05.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/08.05.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.05.2018</p>
                            <a href="/img/progress/08.05.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/08.05.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/08.05.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.05.2018</p>
                            <a href="/img/progress/08.05.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/08.05.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/08.05.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.05.2018</p>
                            <a href="/img/progress/08.05.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/08.05.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/08.05.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">08.05.2018</p>
                            <a href="/img/progress/08.05.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/27.04.2018/4.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/27.04.2018/4.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">27.04.2018</p>
                            <a href="/img/progress/27.04.2018/4.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/27.04.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/27.04.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">27.04.2018</p>
                            <a href="/img/progress/27.04.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/27.04.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/27.04.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">27.04.2018</p>
                            <a href="/img/progress/27.04.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/27.04.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/27.04.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">27.04.2018</p>
                            <a href="/img/progress/27.04.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/23.04.2018/3.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/23.04.2018/3.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">23.04.2018</p>
                            <a href="/img/progress/23.04.2018/3.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/23.04.2018/2.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/23.04.2018/2.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">23.04.2018</p>
                            <a href="/img/progress/23.04.2018/2.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                        <div class="box">
                            <a href="/img/progress/23.04.2018/1.jpg" class="crop" data-fancybox="group_7">
                                <img src="/img/progress/23.04.2018/1.jpg" alt="Хронология строительства">
                            </a>
                            <p class="date">23.04.2018</p>
                            <a href="/img/progress/23.04.2018/1.jpg" data-fancybox="group_8" class="open">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cb_bl">
                <div class="cnt flex flex-sb">
                    <div class="txt">
                        <h3>
                            <?php echo __('[:ua]Щоб дізнатися всі деталі про квартири, ви можете:
                            [:ru]Чтобы узнать все детали о квартирах можно:
                            [:en]To find out all the details of the apartment you can:[:]'); ?>
                        </h3>
                        <div>
                            <p><a href="tel:0442283898" class="tel">(044) 228-38-98</a></p>
                            <p class="address">
                                <?php echo __('[:ua]м. Київ, вул. Нагірна, 18/16
                                [:ru]г. Киев, ул. Нагорная, 18/16
                                [:en]Kiev, Nagornaya st. 18/16[:]'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="btns">
                        <div class="btn_w_line btn_w">
                            <button class="btn e" data-subject="Онлайн заявка">
                                <?php echo __('[:ua]Заповнити онлайн-заявку
                                [:ru]Заполнить онлайн-заявку
                                [:en]Fill in an online application[:]'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.62 201">
                                    <path d="M9.1,137H172v54.8a9.26,9.26,0,0,0,9.4,9.1,9.39,9.39,0,0,0,6.3-2.6l91.4-91.4a9.69,9.69,0,0,0,0-13.1L188,2.91A11,11,0,0,0,181.1,0a8.74,8.74,0,0,0-9.1,8.4V64H9.1A9.22,9.22,0,0,0,0,73.11v54.8a9.09,9.09,0,0,0,2.7,6.4A8.69,8.69,0,0,0,9.1,137Z"/>                                    </svg>
                            </button>
                        </div>
                        <div class="btn_w_line btn_w">
                            <button class="btn cb" data-subject="Обратный звонок call traction">
                                <?php echo __('[:ua]Замовити дзвінок
                            [:ru]Заказать звонок
                            [:en]Order a call[:]'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.11 577.73">
                                    <path d="M577.83,455.94q1.84,14.08-8.57,24.48l-81.4,80.78a45.81,45.81,0,0,1-14.38,10.4A59.43,59.43,0,0,1,456,577.11q-.61,0-3.68.31t-8,.31q-11.63,0-37.64-4t-63.64-19.58q-37.64-15.61-85.38-46.82T156.16,421.67q-42.84-42.23-71-80.78t-45.29-71.3q-17.14-32.74-25.7-59.36T2.55,164.32Q-.51,145,.1,134t.61-12.24a59.49,59.49,0,0,1,5.51-17.44A45.86,45.86,0,0,1,16.63,90L98,8.57Q106.59,0,117.61,0a22.83,22.83,0,0,1,14.08,4.59,42.55,42.55,0,0,1,10.4,11.32l65.48,124.24a29.78,29.78,0,0,1,3.06,21.42,38.15,38.15,0,0,1-10.4,19.58l-30,30a10.21,10.21,0,0,0-2.14,4,15.1,15.1,0,0,0-.92,4.59q2.45,12.85,11,29.38,7.34,14.69,22.64,35.8t43.45,48.65q27.54,28.15,49,43.76t35.8,22.95q14.38,7.34,22,8.87l7.65,1.53a14.59,14.59,0,0,0,4-.92,10.22,10.22,0,0,0,4-2.14l34.88-35.5a37.49,37.49,0,0,1,25.7-9.79q10.41,0,16.52,3.67h.61l118.12,69.77Q575.38,443.7,577.83,455.94Z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="btn_w_line btn_w">
                            <a href="/contacts.html" class="btn">
                                <?php echo __('[:ua]Приїхати в офіс продажів
                            [:ru]Приехать в офис продаж
                            [:en]Come to the sales office[:]'); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.29 547.25">
                                    <path d="M327.18,56.14a191.65,191.65,0,0,0-271,0c-67,67-75.32,193-18,269.36L191.66,547.25,345,325.81C402.5,249.14,394.17,123.12,327.18,56.14ZM193.43,259.85a70,70,0,1,1,70-70A70,70,0,0,1,193.43,259.85Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="add_descr">
                <div class="cnt txt close">
                    <?php echo __('[:ua]Найсвіжіші новини з будівельного майданчика, офісу продажів так необхідні 
                    для тих, хто планує купити або вже придбав квартиру в житловому комплексі Хенесi Хаус. Тому в 
                    розділі "Новини" можна докладно дізнатися, на якому етапі зведення знаходиться та чи інша секція, 
                    що з себе представляє зона рецепції, консьєрж-сервіс, служба охорони.
                    Не пропустіть з виду актуальні акції та пропозиції! Подивіться, як буде виглядати дитячий 
                    майданчик, прибудинкова територія або інші, не менш важливі для Вас місця в комплексі. <br>
                    Ознайомтеся з навколишнюю інфраструктурою, дорожніми розв\'язками і місцями для відпочинку. 
                    Преса не обходить нас стороною і пише про наші заслуги. Дізнайтеся більше у відповідному розділі. 
                    До речі, ми перемогли в номінації "Проект року", а це означає, що нас обирають і рекомендують іншим.
                    Запорука успішної новобудови - якісні матеріали та відповідальний підхід у всьому. Чому варто 
                    придивитися до Хенесi Хаус і вигідно придбати квартиру в центрі, почитайте на нашому сайті і 
                    робіть тільки правильний вибір!
                    [:ru]Самые свежие новости со строительной площадки, офиса продаж так необходимы для тех, кто 
                    планирует купить или уже приобрел квартиру в жилищном комплексе Хенеси Хаус. Поэтому в 
                    разделе “Новости” можно подробно узнать, на каком этапе возведения находится та или иная 
                    секция, что из себя представляет зона рецепции, консьерж-сервис, служба охраны. 
                    Не упустите из виду актуальные акции и предложения! Посмотрите, как будет выглядеть детская 
                    площадка, придомовая территория или другие, не менее важные для Вас места в комплексе. <br>
                    Ознакомьтесь с окружающей инфраструктурой, дорожными развязками и местами для отдыха. 
                    Пресса не обходит нас стороной и пишет о наших заслугах. Узнайте больше в соответствующем 
                    разделе. Кстати, мы победили в номинации “Проект года”, а это означает, что нас выбирают и 
                    рекомендуют другим.
                    Залог успешной новостройки – качественные материалы и ответственный подход во всем. Почему 
                    стоит присмотреться к Хенеси Хаус и выгодно купить квартиру в центре, почитайте на нашем 
                    сайте и делайте только правильный выбор!
                    [:en][:]'); ?>
                </div>
                <div class="btn">
                    <p class="btn_n">
                        <?php echo __('[:ua]Розгорнути
                                [:ru]Развернуть
                                [:en]More[:]'); ?>
                    </p>
                    <p class="btn_n hidden">
                        <?php echo __('[:ua]Згорнути
                                [:ru]Свернуть
                                [:en]Hide[:]'); ?>
                    </p>
                </div>
            </section>
        </div>
	</div>

<?php get_footer(); ?>