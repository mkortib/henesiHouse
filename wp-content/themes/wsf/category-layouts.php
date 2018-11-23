<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
get_header(); ?>

<div id="type_flats-open">
    <div class="w">
        <section class="top flex">
            <div class="sb flex flex-sa">
                <a href="tel:0442283898">+38 (044) 228-38-98</a>
            </div>
            <div class="filters cnt flex flex-sb">
                <div class="l_bl">
                    <h2><?php echo __('[:ua]Квартири[:ru]Квартиры[:en]Flats[:]'); ?></h2>
                    <?php
                    wp_nav_menu( array(
                        'container'      => false,
                        'echo'           => true,
                        'depth'          => 0,
                        'items_wrap'     => '%3$s',
                        'menu'           => 'layouts'
                    ) );
                    ?>
                </div>
                <div class="r_bl">
                    <h2><?php echo __('[:ua]Площа[:ru]Площадь[:en]Square[:]'); echo ' '. __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup></h2>
                    <form>
                        <input type="number" name="min_square" placeholder="від" value="<?php if (isset($_GET['min_square'])) { echo $_GET['min_square']; } ?>">
                        <input type="number" name="max_square" placeholder="до" value="<?php if (isset($_GET['max_square'])) { echo $_GET['max_square']; } ?>">
                        <div class="wrapper">
                            <a href="/category/layouts/" class="reset">
                                <?php echo __('[:ua]Відключити фiльтр[:ru]Сбросить фильтр[:en]Reset filter[:]'); ?>
                            </a>
                            <div class="btn_w_line btn_w">
                                <input type="submit" value="<?php echo __('[:ua]Показати[:ru]Показать[:en]Show[:]'); ?>" class="btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="layouts_border">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $flats = new WP_Query( array (
                'cat'            => array(23,24,25),
                'posts_per_page' => 9,
                'paged'          => $paged,
                'order'          => 'ASC',
                'orderby'        => 'date'
            ) );
            function status()  {
                echo (get_field('status') == 'true') ? ('sold') : null;
            }
            ?>
            <div class="cnt flex flex-sa">
                <?php
                if ($_GET && !empty($_GET)) : go_filter(); endif;
                if ( have_posts() ) :
                    while ( $flats->have_posts() ) :
                        $flats->the_post();
                ?>
                <div class="single_layout-bl">
                    <a href="<?php echo get_permalink(); ?>" class="img_w flex <?php status(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h3><?php
                        if ( in_category('23') ) : echo __(' [:ua]1-кімнатна квартира[:ru]1-комнатная квартира[:en]1 room[:]' .' (' . esc_html( get_the_title()) . ')' );
                        elseif ( in_category('24') ) : echo __(' [:ua]2-кімнатна квартира[:ru]2-комнатная квартира[:en]2 room[:]'.' (' . esc_html( get_the_title()) . ')' );
                        elseif ( in_category('25') ) : echo __(' [:ua]3-кімнатна квартира[:ru]3-комнатная квартира[:en]3 room[:]'.' (' . esc_html( get_the_title()) . ')' );
                        endif;
                        ?></h3>
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
                            <a href="<?php echo get_permalink(); ?>" class="btn_inner">
                                <?php echo __('[:ua]Детальніше[:ru]Детальнее[:en]More[:]'); ?>
                            </a>
                        </button>
                    </div>
                </div>
                <?php endwhile;
                    else : ?>
                        <p class="e_message"><?php echo __('[:ua]Вибачте, таких планувань немає[:ru]Извините, таких планировок нет[:en]Sorry, there are no such plans[:]'); ?></p>
                <?php endif;
                if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(array('query' => $flats));
                endif;
                wp_reset_postdata();?>
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
                <?php echo __('[:ua]Квартири в центрі на будь-який смак доступні в Хенесi Хаус. На відповідному 
                розділі є актуальні апартаменти, де вказано не тільки поверх і загальний метраж, але і докладні 
                характеристики. Виберіть собі кращий варіант і придбайте однокімнатну, двокімнатну, трикімнатну 
                квартиру або дворівневу нерухомість. <br>
                Площа передпокою, ванної кімнати, санвузла, кухні, лоджії і навіть вбиральні просто необхідна, 
                щоб підібрати оптимальний для себе метраж. На фотографіях зображені планувальні рішення, де Ви 
                можете переглянути детальний план житла і вибрати те, яке Вам найбільше сподобалося.
                [:ru]Квартиры в центре на любой вкус доступны в Хенеси Хаус. На соответствующем разделе есть 
                актуальные апартаменты, где указан не только этаж и общий метраж, но и подробные характеристики. 
                Выберите себе лучший вариант и купите однокомнатную, двухкомнатную, трехкомнатную квартиру или 
                двухуровневую недвижимость. <br>
                Площадь прихожей, ванной комнаты, санузла, кухни, лоджии и даже гардеробной просто необходима, 
                чтоб подобрать оптимальный для себя метраж. На фотографиях изображены планировочные решения, где 
                Вы можете просмотреть детальный план жилья и выбрать то, которое Вам больше всего понравилось.
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
