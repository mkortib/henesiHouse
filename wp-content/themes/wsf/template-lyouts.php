<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 * Template Name: Планировки
 */
get_header(); ?>

<div id="layouts">
    <div class="w">
        <section class="top flex">
            <div class="sb flex flex-sa">
                <a href="tel:0442283898">+38 (044) 228-38-98</a>
                <a class="scrolling"><?php echo __('[:ua]Донизу[:ru]Вниз[:en]Scroll[:]'); ?></a>
            </div>
            <div class="types cnt flex">
                <div class="type rooms-1">
                    <p class="range">
                        <?php echo __('[:ua]від[:ru]от[:en]from[:]'); ?>
                        26,2 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                        <?php echo __('[:ua]до[:ru]до[:en]to[:]'); ?>
                        67,5 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                    </p>
                    <h2>1 - <?php echo __('[:ua]кімнатні[:ru]комнатные[:en]room[:]'); ?></h2>
                    <p class="add">24 <?php echo __('[:ua]типи[:ru]типа[:en]types[:]'); ?></p>
                    <a href="/layouts/one-room/" class="hidden_bl">
                        <span>
                            <?php echo __('[:ua]Дивитись усі[:ru]Смотреть все[:en]See all[:]'); ?>
                        </span>
                    </a>
                </div>
                <div class="type rooms-2">
                    <p class="range">
                        <?php echo __('[:ua]від[:ru]от[:en]from[:]'); ?>
                        55,2 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                        <?php echo __('[:ua]до[:ru]до[:en]to[:]'); ?>
                        107,8 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                    </p>
                    <h2>2 - <?php echo __('[:ua]кімнатні[:ru]комнатные[:en]room[:]'); ?></h2>
                    <p class="add">24 <?php echo __('[:ua]типи[:ru]типа[:en]types[:]'); ?></p>
                    <a href="/layouts/two-room/" class="hidden_bl">
                        <span>
                            <?php echo __('[:ua]Дивитись усі[:ru]Смотреть все[:en]See all[:]'); ?>
                        </span>
                    </a>
                </div>
                <div class="type rooms-3">
                    <p class="range">
                        <?php echo __('[:ua]від[:ru]от[:en]from[:]'); ?>
                        69,3 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                        <?php echo __('[:ua]до[:ru]до[:en]to[:]'); ?>
                        178,1 <?php echo __('[:ua]м[:ru]м[:en]m[:]'); ?><sup>2</sup>
                    </p>
                    <h2>3 - <?php echo __('[:ua]кімнатні[:ru]комнатные[:en]room[:]'); ?></h2>
                    <p class="add">24 <?php echo __('[:ua]типи[:ru]типа[:en]types[:]'); ?></p>
                    <a href="/layouts/three-room/" class="hidden_bl">
                        <span>
                            <?php echo __('[:ua]Дивитись усі[:ru]Смотреть все[:en]See all[:]'); ?>
                        </span>
                    </a>
                </div>
                <form>
                    <h2>
                        <?php echo __('[:ua]Замовити підбір квартири
                        [:ru]Заказать подбор квартиры
                        [:en]Order an apartment selection[:]'); ?>
                    </h2>
                    <div class="flex flex-sb">
                        <div class="rb flex flex-sb">
                            <p>
                                <?php echo __('[:ua]Хочу
                                [:ru]Хочу
                                [:en]I want[:]'); ?></p>
                            <p>
                                <input name="type" id="1-room" class="radio" type="radio" value="Однокомнатная">
                                <label for="1-room">
                                    <?php echo __('[:ua]Одно[:ru]Одно[:en]One[:]'); ?>
                                </label>
                            </p>
                            <p>
                                <input name="type" id="2-room" type="radio" class="radio" value="Двухкомнатная">
                                <label for="2-room">
                                    <?php echo __('[:ua]Двох[:ru]Двух[:en]Two[:]'); ?>
                                </label>
                            </p>
                            <p>
                                <input name="type" id="3-room" type="radio" class="radio" value="Трехкомнатная">
                                <label for="3-room">
                                    <?php echo __('[:ua]Трьох[:ru]Трёх[:en]Three[:]'); ?>
                                </label>
                            </p>
                            <p>
                                <?php echo __('[:ua]Кімнатну квартиру[:ru]Комнатную квартиру[:en]Rooms apartment[:]'); ?>
                            </p>
                        </div>
                        <div class="square flex flex-sb">
                            <p>
                                <label for="min_square">
                                    <?php echo __('[:ua]Метраж від
                                    [:ru]Метраж от
                                    [:en]Area from[:]'); ?>
                                </label>
                                <input name="min_square" type="number" id="min_square"  placeholder="26,2 м">
                            </p>
                            <p>
                                <label for="max_square">
                                    <?php echo __('[:ua]до
                                    [:ru]до
                                    [:en]to[:]'); ?>
                                </label>
                                <input name="max_square" type="number" id="max_square" placeholder="178,1 м">
                            </p>
                        </div>
                        <div class="budget">
                            <p>
                                <label for="money">
                                    <?php echo __('[:ua]Бюджет до
                                    [:ru]Бюджет до
                                    [:en]Budget to[:]'); ?>
                                </label>
                                <input name="money" type="number" id="money" placeholder="$ 130 000">
                            </p>
                        </div>
                        <div class="send">
                            <p>
                                <label for="num">
                                    <?php echo __('[:ua]Ваш телефон
                                    [:ru]Ваш телефон
                                    [:en]Your num[:]'); ?>
                                </label>
                                <input name="phone" class="phone" type="text" id="num" required placeholder="+3 80 (--) --- -- --">
                            </p>
                            <div class="btn_w_line btn_w">
                                <input name="type" class="btn" type="submit"
                                       value="<?php echo __('[:ua]Замовити[:ru]Заказать[:en]Order[:]'); ?>">
                            </div>
                        </div>
                    </div>
                </form>
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
                    <div class="btn_w_line btn_b">
                        <button class="btn e" data-subject="Онлайн заявка">
                            <?php echo __('[:ua]Заповнити онлайн-заявку
                            [:ru]Заполнить онлайн-заявку
                            [:en]Fill in an online application[:]'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.62 201">
                                <path d="M9.1,137H172v54.8a9.26,9.26,0,0,0,9.4,9.1,9.39,9.39,0,0,0,6.3-2.6l91.4-91.4a9.69,9.69,0,0,0,0-13.1L188,2.91A11,11,0,0,0,181.1,0a8.74,8.74,0,0,0-9.1,8.4V64H9.1A9.22,9.22,0,0,0,0,73.11v54.8a9.09,9.09,0,0,0,2.7,6.4A8.69,8.69,0,0,0,9.1,137Z"/>                                    </svg>
                        </button>
                    </div>
                    <div class="btn_w_line btn_b">
                        <button class="btn cb" data-subject="Обратный звонок call traction">
                            <?php echo __('[:ua]Замовити дзвінок
                            [:ru]Заказать звонок
                            [:en]Order a call[:]'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.11 577.73">
                                <path d="M577.83,455.94q1.84,14.08-8.57,24.48l-81.4,80.78a45.81,45.81,0,0,1-14.38,10.4A59.43,59.43,0,0,1,456,577.11q-.61,0-3.68.31t-8,.31q-11.63,0-37.64-4t-63.64-19.58q-37.64-15.61-85.38-46.82T156.16,421.67q-42.84-42.23-71-80.78t-45.29-71.3q-17.14-32.74-25.7-59.36T2.55,164.32Q-.51,145,.1,134t.61-12.24a59.49,59.49,0,0,1,5.51-17.44A45.86,45.86,0,0,1,16.63,90L98,8.57Q106.59,0,117.61,0a22.83,22.83,0,0,1,14.08,4.59,42.55,42.55,0,0,1,10.4,11.32l65.48,124.24a29.78,29.78,0,0,1,3.06,21.42,38.15,38.15,0,0,1-10.4,19.58l-30,30a10.21,10.21,0,0,0-2.14,4,15.1,15.1,0,0,0-.92,4.59q2.45,12.85,11,29.38,7.34,14.69,22.64,35.8t43.45,48.65q27.54,28.15,49,43.76t35.8,22.95q14.38,7.34,22,8.87l7.65,1.53a14.59,14.59,0,0,0,4-.92,10.22,10.22,0,0,0,4-2.14l34.88-35.5a37.49,37.49,0,0,1,25.7-9.79q10.41,0,16.52,3.67h.61l118.12,69.77Q575.38,443.7,577.83,455.94Z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="btn_w_line btn_b">
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
                <?php echo __('[:ua]Купівля квартири в Києві – важливий етап в житті кожної людини! Якщо Ви вирішили
                    придбати апартаменти, в обов\'язковому порядку потрібно ознайомитися, що пропонує забудовник. Не 
                    зайвою буде інформація, щодо технології будівництва і застосовуваних в ній матеріалів.
                    Придивившись до ЖК Хенесi Хаус, можна звернути увагу на досить широкий вибір планувальних рішень 
                    і якісні будівельні матеріали. Життя тут поєднує все найкраще воєдино! <br>
                    Якщо у Вас невеликий бюджет, квартира в 26 м<sup>2</sup> стане ідеальним 
                    осередком затишку і комфорту. Виберіть собі двокімнатне житло площею від 61 до 106,8 кв.м, якщо 
                    Вам до душі простір. Для сім\'ї з діточками є квартири трьох кімнат, де можна інвестувати як у 
                    73,4 "квадрата", так і в 122,3. Якщо Ви хочете щось ексклюзивне, дворівневі апартаменти тут 
                    створені саме для Вас!
                    3 секції, 21 поверх і 230 унікальних квартир зі стелями в 3,2 метра – це "Хенесi Хаус" на 
                    вул. Нагірна, 18/16!
                    [:ru]Покупка квартиры в Киеве – важный этап в жизни каждого человека! Если Вы решили приобрести 
                    апартаменты, в обязательном порядке нужно ознакомиться, что предлагает застройщик. Не лишней будет 
                    информация, касательно технологии строительства и применяемых в ней материалов.
                    Присмотревшись к ЖК Хенеси Хаус, можно обратить внимание на довольно широкий выбор планировочных 
                    решений и качественные строительные материалы. Жизнь здесь сочетает все самое лучшее воедино! <br>
                    Если у Вас небольшой бюджет, квартира в 26 м<sup>2</sup> станем идеальным 
                    очагом уюта и комфорта. Выберите себе двухкомнатное жилье площадью от 61 до 106,8 кв.м, если 
                    Вам по душе пространство. Для семьи с детишками есть квартиры трех комнат, где можно инвестировать 
                    как в 73,4 “квадрата”, так и в 122,3. Если Вы хотите что-то эксклюзивное, двухуровневые апартаменты 
                    здесь созданы именно для Вас!
                    3 секции, 21 этаж и 230 уникальных квартир с потолками в 3,2 метра – это “Хенеси Хаус” на 
                    ул. Нагорная, 18/16!
                    [:en]SEO text[:]'); ?>
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