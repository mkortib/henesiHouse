<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 * Template Name: Условия покупки
 */
get_header(); ?>

<div id="purchase">
    <div class="w">
        <section class="top flex">
            <div class="sb flex flex-sa">
                <a href="tel:0442283898">+38 (044) 228-38-98</a>
                <a class="scrolling"><?php echo __('[:ua]Донизу[:ru]Вниз[:en]Scroll[:]'); ?></a>
            </div>
            <div class="last_ac cnt flex flex-sb">
                <?php
                $action = new WP_Query( array (
                    'cat'            => 15,
                    'posts_per_page' => 1,
                    'order'          => 'DESC',
                    'orderby'        => 'date'
                ) );

                if ( have_posts() ) : while ( $action->have_posts() ) : $action->the_post(); ?>
                <div class="w_img">
                    <p class="n_bl"><?php echo __('[:ua]Акція[:ru]Акция[:en]Action[:]'); ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="w_img-crop"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="txt_bl">
                    <h2><?php the_title();?></h2>

                    <div class="btn_w_line btn_b">
                        <a href="<?php echo get_permalink(); ?>" class="btn"><?php echo __('[:ua]Детальніше[:ru]Подробнее[:en]Read more[:]'); ?></a>
                    </div>
                    <?php endwhile;
                        else :
                            echo 'На жаль акцій немає';
                        endif;
                        ?>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="cnt">
                <h2>
                    <?php echo __('[:ua]Для того щоб придбати квартиру вам потрібно
                    [:ru]Для того чтобы приобрести квартиру вам нужно
                    [:en]In order to purchase an apartment you need[:]'); ?>:</h2>
                <table class="order_table">
                    <tr>
                        <td class="table_item">
                            <p class="order_num">1.</p>
                            <img src="/img/i/layouts.svg" alt="Иконка планировки">
                            <p class="descr">
                                <?php echo __('[:ua]Вибрати планування[:ru]Выбрать планировку[:en]Choose Planning[:]'); ?>
                            </p>
                        </td>
                        <td class="table_item">
                            <p class="order_num">2.</p>
                            <img src="/img/i/documents.svg" alt="Иконка документов">
                            <p class="descr">
                                <?php echo __('[:ua]Укласти договір[:ru]Заключить договор[:en]Conclude a contract[:]'); ?>
                            </p>
                        </td>
                        <td class="table_item">
                            <p class="order_num">3.</p>
                            <img src="/img/i/money.svg" alt="Иконка денег">
                            <p class="descr">
                                <?php echo __('[:ua]Оплатити перший внесок[:ru]Оплатить первый взнос[:en]Pay the first installment[:]'); ?>
                            </p>
                        </td>
                        <td class="table_item">
                            <p class="order_num">4.</p>
                            <img src="/img/i/smile.svg" alt="Смайлик">
                            <p class="descr">
                                <?php echo __('[:ua]Радіти новій квартирі[:ru]Радоваться новой квартире[:en]Rejoice in new apartment[:]'); ?>
                            </p>
                        </td>
                    </tr>
                </table>
                <div class="btns">
                    <div class="btn_w_line btn_b">
                        <a href="/about.html#docs" class="btn">
                            <?php echo __('[:ua]Документи[:ru]Документы[:en]Documents[:]'); ?>
                            <img src="/img/doc.svg" alt="ico">
                        </a>
                    </div>
                    <div class="btn_w_line btn_b">
                        <a href="/about.html" class="btn">
                            <?php echo __('[:ua]Як буде виглядати ваш будинок[:ru]Как будет выглядеть ваш дом[:en][:]'); ?>
                        </a>
                    </div>
                    <div class="btn_w_line btn_b">
                        <a href="/contacts.html" class="btn t" data-subject="Заказать шаблон договора">
                            <?php echo __('[:ua]Замовити шаблон договору[:ru]Заказать шаблон договора[:en][:]'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="all_ac">
            <h2>
                <?php echo __('[:ua]Не пропустіть наші акції[:ru]Не пропустите наши акции[:en]Do not miss our promotions[:]'); ?>:
            </h2>
            <div class="owl-carousel all_actions">
                <?php
                    $news = new WP_Query( array (
                        'cat'            => 15,
                        'posts_per_page' => 9,
                        'order'          => 'DESC',
                        'orderby'        => 'date'
                     ) );
                    if ( have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
                <div class="box">
                    <a href="<?= esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                    <h3 class="title">
                        <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );?>
                    </h3>
                    <div class="short_txt"><?php the_excerpt(); ?></div>

                    <div class="btn_w_line btn_b">
                        <a href="<?= esc_url( get_permalink() ); ?>" class="btn"><?php echo __('[:ua]Детальніше[:ru]Подробнее[:en]More[:]'); ?></a>
                    </div>
                </div>
                <?php endwhile;
                    else : get_template_part( 'content', 'none' );
                    endif;
                ?>
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
                <?php echo __('[:ua]Умови покупки житла у кожного забудовника різні. Якщо Вас зацікавив житловий 
                    комплекс Хенесi Хаус, ознайомтеся докладніше, як купити квартиру в Києві без посередників. З нами 
                    це можна зробити просто, швидко і без прихованих платежів.
                    Все дуже легко: на сайті або у відділі продажів Ви обираєте одну з вподобаних квартир, укладаєте 
                    договір, оплачуєте перший внесок і радієте новій квартирі :) Яке житло краще, вибирати Вам. Комусь 
                    по душі "однушки", а хтось любить просторі дворівневі пентхауси. <br>
                    У нас є, чим Вас здивувати і це не тільки ціна квадратного метра, а й вигідні 
                    умови інвестування і розстрочка. Фотографії ліцензії, договору оренди і передачі землі, контракта 
                    на воду і тепло є на нашому сайті, а це ще один факт надійності та відкритості.
                    Відвідайте офіс продажів на вулиці Нагірна, 18/16 для більш докладної інформації про ЖК. Також є 
                    можливість замовити зворотний дзвінок, вказавши своє ім\'я та номер мобільного телефону. Для 
                    консультації, задайте питання нашим фахівцям через форму онлайн-зв\'язку.
                    [:ru]Условия покупки жилья у каждого застройщика разные. Если Вас заинтересовал 
                    жилищный комплекс Хенеси Хаус, ознакомьтесь подробнее, как купить квартиру в Киеве без посредников. 
                    С нами это можно сделать просто, быстро и без скрытых платежей.
                    Все очень легко: на сайте или в отделе продаж Вы выбираете одну из понравившихся квартир, заключаете
                    договор, оплачиваете первый взнос и радуетесь новой квартире :) Какое жилье лучше, выбирать Вам.
                    Кому-то по душе “однушки”, а кто-то любит просторные двухуровневые пентхаусы. <br>
                    У нас есть, чем Вас удивить и это не только цена квадратного метра, но и выгодные условия 
                    инвестирования, и рассрочка. Фотографии лицензии, договора аренды и передачи земли, контракта на 
                    воду и тепло есть на нашем сайте, а это еще один факт надежности и открытости.
                    Посетите офис продаж на улице Нагорная, 18/16 для более подробной информации о ЖК. Также есть 
                    возможность заказать обратный звонок, указав свое имя и номер мобильного телефона. Для консультации,
                    задайте интересующий вопрос нашим специалистам через форму онлайн-связи.
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