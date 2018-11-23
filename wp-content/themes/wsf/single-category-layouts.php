<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
get_header(); ?>

<div id="single_layout-open">
        <div class="w">
            <section class="top flex">
                <div class="sb flex flex-sa">
                    <a href="tel:0442283898" class="tel">+38 (044) 228-38-98</a>
                </div>
                <div class="inner_info">
                    <ul class="breadcrumbs">
                        <li><a href="/"><?= __(' [:ua]Головна[:ru]Главная[:en]Main[:]'); ?></a></li>
                        <li>
                            <?php
                            if (in_category('23')) : echo '<a href="/category/layouts/one-room">' . __(' [:ua]Планування[:ru]Планировки[:en]Layouts[:]') . '</a>';
                            elseif (in_category('24')) : echo '<a href="/category/layouts/two-room">' . __(' [:ua]Планування[:ru]Планировки[:en]Layouts[:]') . '</a>';
                            elseif (in_category('25')) : echo '<a href="/category/layouts/three-room">' . __(' [:ua]Планування[:ru]Планировки[:en]Layouts[:]') . '</a>';
                            endif;
                            function status()  {
                                echo (get_field('status') == 'true') ? ('sold') : null;
                            } ?>
                        </li>
                        <li><span>Квартира <?php echo esc_html(get_the_title());?></span></li>
                    </ul>
                    <h1 class="title"><span><?php echo esc_html( get_the_title() ); ?></span>
                        <?php
                        if ( in_category('23') ) : echo __(' [:ua]Однокімнатна квартира[:ru]Однокомнатная квартира[:en]One room[:]');
                        elseif ( in_category('24') ) : echo __(' [:ua]Двохкімнатна квартира[:ru]Двухкомнатная квартира[:en]Two room[:]');
                        elseif ( in_category('25') ) : echo __(' [:ua]Трьохкімнатна квартира[:ru]Трехкомнатная квартира[:en]Three room[:]');
                        endif; ?></h1>
                    <h2 class="area_top"><?php the_field('total_area'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></h2>
                    <div class="location flex">
                        <p><?php the_field('section'); ?><?php echo ' '. __('[:ua]секція[:ru]секция[:en]section[:]'); ?></p>
                        <p><?php the_field('floors'); ?><?php echo ' '. __('[:ua]поверх[:ru]этаж[:en]floor[:]'); ?></p>
                    </div>
                    <div class="nav">
                        <?php
                        if (in_category('23')) : $hideCat = '24 and 25';
                        elseif (in_category('24')) : $hideCat = '23 and 25';
                        elseif (in_category('25')) : $hideCat = '23 and 24';
                        endif;
                        $prev_title = __('[:ua]Попередня квартира[:ru]Предыдущая квартира[:en]Previous apartment[:]');
                        $next_title = __('[:ua]Наступна квартира[:ru]Следующая квартира[:en]Next apartment[:]');
                        previous_post_link('%link', $prev_title, 1, $hideCat);
                        next_post_link('%link', $next_title, 1, $hideCat); ?>
                    </div>
                </div>
            </section>
            <section class="main">
                <div class="cnt flex flex-sa">
                    <div class="l_bl">
                        <div class="compass"></div>
                        <?php $img = get_field('img'); ?>
                        <a href="<?php echo $img['url']; ?>" data-fancybox="group_11" class="<?php status(); ?>">
                            <img class="layout-img" src="<?php echo $img['url']; ?>" alt="Схема планировки">
                        </a>
                    </div>
                    <div class="r_bl">
                        <div class="info">
                            <?php if ( get_field('hallway') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Передпокій[:ru]Прихожая[:en]Dwelling place[:]'); ?></p>
                                    <p><?php the_field('hallway'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('dressing_room') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Гардеробна[:ru]Гардеробная[:en]Dressing room[:]'); ?></p>
                                    <p><?php the_field('dressing_room'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('bathroom_1') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Ванна кімната[:ru]Ванная комната[:en]Bathroom[:]'); ?></p>
                                    <p><?php the_field('bathroom_1'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('bathroom_2') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Ванна кімната[:ru]Ванная комната[:en]Bathroom[:]'); ?></p>
                                    <p><?php the_field('bathroom_2'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('wc') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Санвузол[:ru]Санузел[:en]WC[:]'); ?></p>
                                    <p><?php the_field('wc'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('kitchen') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Кухня[:ru]Кухня[:en]Kitchen[:]'); ?></p>
                                    <p><?php the_field('kitchen'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('larder') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Комора[:ru]Кладовая[:en]Larder[:]'); ?></p>
                                    <p><?php the_field('larder'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('hall') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Хол[:ru]Холл[:en]Hall[:]'); ?></p>
                                    <p><?php the_field('hall'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('l_room-1') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Житлова кімната[:ru]Жилая комната[:en]Living room[:]'); ?></p>
                                    <p><?php the_field('l_room-1'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('l_room-2') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Житлова кімната[:ru]Жилая комната[:en]Living room[:]'); ?></p>
                                    <p><?php the_field('l_room-2'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('l_room-3') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Вітальня[:ru]Гостинная[:en]Living room[:]'); ?></p>
                                    <p><?php the_field('l_room-3'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('studio_room') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Кухня-вітальня[:ru]Кухня-гостинная[:en]Studio room[:]'); ?></p>
                                    <p><?php the_field('studio_room'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('balcony') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Балкон[:ru]Балкон[:en]Balcony[:]'); ?></p>
                                    <p><?php the_field('balcony'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('terrace') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Тераса[:ru]Терраса[:en]Terrace[:]') . ' '; ?></p>
                                    <p><?php the_field('terrace'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('loggia') ): ?>
                                <div class="info_item">
                                    <p><?php echo __('[:ua]Лоджія[:ru]Лоджия[:en]Loggia[:]');?></p>
                                    <p><?php the_field('loggia'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="basic_info flex flex-sb">
                            <div>
                                <p><?php echo __('[:ua]Житлова площа[:ru]Жилая площадь[:en]Dwelling place[:]'); ?>
                                    <span><?php the_field('dwelling_place');
                                        echo ' ' . __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></span></p>
                                <p><?php echo __('[:ua]Загальна площа[:ru]Общая квадратура[:en]Total area[:]'); ?>
                                    <span><?php the_field('total_area');
                                        echo ' ' . __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></span></p>
                            </div>
                            <div class="btn_w_line btn_b">
                                <button class="btn fp" data-subject="Запрос цены «<?= esc_html( get_the_title() ); ?>»">
                                    <?php echo __(' [:ua]Залишити заявку[:ru]Оставить заявку[:en]Price[:]'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="random">
                <div class="cnt">
                    <h2><?php echo __('[:ua]Інші квартири[:ru]Другие квартиры[:en]Other apartments[:]'); ?></h2>
                    <?php
                    if (in_category('23')) : $cat = 23;
                    elseif (in_category('24')) : $cat = 24;
                    elseif (in_category('25')) : $cat = 25;
                    endif;
                    $rand = new WP_Query(array(
                        'cat' => $cat,
                        'posts_per_page' => 3,
                        'orderby' => 'rand'
                    )); ?>
                    <div class="flex flex-sa">
                        <?php
                        if (have_posts()) :
                            while ($rand->have_posts()) :
                                $rand->the_post(); ?>
                                <div class="box">
                                    <a href="<?php echo get_permalink(); ?>" class="img_w flex"><?php the_post_thumbnail(); ?></a>
                                    <h3>
                                        <?php
                                        if ( in_category('23') ) : echo __(' [:ua]1-кімнатна квартира[:ru]1-комнатная квартира[:en]1 room[:]' .' (' . esc_html( get_the_title()) . ')' );
                                        elseif ( in_category('24') ) : echo __(' [:ua]2-кімнатна квартира[:ru]2-комнатная квартира[:en]2 room[:]'.' (' . esc_html( get_the_title()) . ')' );
                                        elseif ( in_category('25') ) : echo __(' [:ua]3-кімнатна квартира[:ru]3-комнатная квартира[:en]3 room[:]'.' (' . esc_html( get_the_title()) . ')' );
                                        endif; ?>
                                    </h3>
                                    <div class="info">
                                        <div class="inner_info flex flex-sb">
                                            <p><?php echo __('[:ua]Загальна:[:ru]Общая:[:en]Total:[:]') . ' '; ?><?php the_field('total_area'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                            <p>|</p>
                                            <p><?php echo __('[:ua]Житлова:[:ru]Жилая:[:en]Dwelling:[:]') . ' '; ?><?php the_field('dwelling_place'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></p>
                                        </div>
                                        <div class="location flex">
                                            <p><?php the_field('section'); ?><?php echo ' '. __('[:ua]секція[:ru]секция[:en]section[:]'); ?></p>
                                            <p>-</p>
                                            <p><?php the_field('floors'); ?><?php echo ' '. __('[:ua]поверх[:ru]этаж[:en]floor[:]'); ?></p>
                                        </div>
                                    </div>
                                    <div class="btn_w_line btn_b">
                                        <button class="btn">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            <?php endwhile;
                        else :
                            get_template_part('content', 'none');
                        endif;
                        ?>
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
                    <?php echo __('[:ua]Купівля квартири в Києві – важливий етап в житті кожної людини! Якщо Ви 
                    вирішили придбати апартаменти, в обов\'язковому порядку потрібно ознайомитися, що пропонує 
                    забудовник. Не зайвою буде інформація, щодо технології будівництва і застосовуваних в ній 
                    матеріалів. <br>
                    Придивившись до ЖК Хенесi Хаус, можна звернути увагу на досить широкий вибір планувальних 
                    рішень і якісні будівельні матеріали. Життя тут поєднує все найкраще воєдино! <br>
                    Якщо у Вас невеликий бюджет, квартира в 26 м2 стане ідеальним осередком затишку і комфорту. 
                    Виберіть собі двокімнатне житло площею від 61 до 106,8 кв.м, якщо Вам до душі простір. Для сім\'ї 
                    з діточками є квартири трьох кімнат, де можна інвестувати як у 73,4 "квадрата", так і в 122,3. 
                    Якщо Ви хочете щось ексклюзивне, дворівневі апартаменти тут створені саме для Вас! <br>
                    3 секції, 21 поверх і 230 унікальних квартир зі стелями в 3,2 метра – це "Хенесi Хаус" на 
                    вул. Нагірна, 18/16!
                    [:ru]Покупка квартиры в Киеве – важный этап в жизни каждого человека! 
                    Если Вы решили приобрести апартаменты, в обязательном порядке нужно ознакомиться, что 
                    предлагает застройщик. Не лишней будет информация, касательно технологии строительства и 
                    применяемых в ней материалов. <br>
                    Присмотревшись к ЖК Хенеси Хаус, можно обратить внимание на довольно широкий выбор планировочных 
                    решений и качественные строительные материалы. Жизнь здесь сочетает все самое лучшее воедино! <br>
                    Если у Вас небольшой бюджет, квартира в 26 м2 станем идеальным очагом уюта и комфорта. 
                    Выберите себе двухкомнатное жилье площадью от 61 до 106,8 кв.м, если Вам по душе пространство. 
                    Для семьи с детишками есть квартиры трех комнат, где можно инвестировать как в 73,4 “квадрата”, 
                    так и в 122,3. Если Вы хотите что-то эксклюзивное, двухуровневые апартаменты здесь созданы именно 
                    для Вас! <br>
                    3 секции, 21 этаж и 230 уникальных квартир с потолками в 3,2 метра – это “Хенеси Хаус” на 
                    ул. Нагорная, 18/16!
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