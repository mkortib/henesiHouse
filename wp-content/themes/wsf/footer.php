    <footer id="footer">
        <div class="w_f">
            <div class="f_1">
                <h3><?php echo __('[:ua]Навігація[:ru]Навигация[:en]Navigation[:]'); ?></h3>
                <div class="menu_f">
                    <?php
                    wp_nav_menu( array(
                            'menu' => 'footer menu',
                            'container'      => false,
                            'echo'           => true,
                            'depth'          => 0,
                            'items_wrap'     => '%3$s',
                    ) );
                    ?>
                </div>
            </div>
            <div class="f_2">
                <h3><?php echo __('[:ua]Контакти[:ru]Контакты[:en]Contacts[:]'); ?></h3>
                <div class="info">
                    <p>
                        <span>
                            <?php echo __('[:ua]м. Київ, вул. Нагірна, 18/16[:ru]г. Киев, ул. Нагорная, 18/16[:en]Kiev, Nagornaya st. 18/16[:]'); ?>
                        </span>
                        <span>
                            <a href="tel:0442283898">+38 (044) 228-38-98</a>
                        </span>
                    </p>
                    <p>
                        <span>
                            <?php echo __('[:ua]Понеділок - П\'ятниця[:ru]Понедельник - Пятница[:en]Monday - Friday[:]'); ?> 10:00 - 20:00
                        </span>
                        <span>
                            <?php echo __('[:ua]Субота - Неділя[:ru]Суббота - Воскресенье[:en]Sunday - Saturday[:]'); ?>  10:00 - 18:00
                        </span>
                    </p>
                </div>
            </div>
            <div class="f_3">
                <p>
                    <?php echo __('[:ua]Залишилися питання?[:ru]Остались вопросы?[:en]Are there any questions?[:]'); ?>
                </p>
                <div class="btn_w_line btn_w">
                    <button class="btn q" data-subject="Задать вопрос футер">
                        <?php echo __('[:ua]Задайте їх менеджеру[:ru]Задайте их менеджеру[:en]Ask the manager[:]'); ?>
                    </button>
                </div>
            </div>
            <div class="f_4">
                <div href="/" class="developer"></div>
                <a href="<?php echo __('[:ua]/docs/HHouse(ua).pdf[:ru]/docs/HHouse(ru).pdf[:]') ?>" class="presentation" target="_blank">
                    <?php echo __('[:ua]Завантажити презентацію[:ru]Скачать презентацию[:en]Download the presentation[:]'); ?>
                </a>
                <a href="https://wsf.com.ua/" class="wsf" target="_blank"></a>
            </div>
        </div>
    </footer>
</div>

    <div class="popup_overlay">
        <div class="popup popup_cb">
            <div class="close">
                <?php echo __('[:ua]Закрити[:ru]Закрыть[:en]Close[:]'); ?>
            </div>
            <div class="wrap">
                <div class="caption">
                    <?php echo __('[:ua]Замовити дзвінок[:ru]Заказать звонок[:en]Request a call[:]'); ?>
                </div>
                <form autocomplete="off">
                    <div class="inputs_w">
                        <div class="input_bl">
                            <input type="text" name="name" class="name" id="name_cb" placeholder="<?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>">
                            <label for="name_cb">
                                <?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="tel" name="phone" id="phone_cb" class="phone" placeholder="<?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>" required>
                            <label for="phone_cb">
                                <?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="btn_w_line btn_b">
                        <div class="btn">
                            <input type="submit" value="<?php echo __('[:ua]Замовити[:ru]Заказать[:en]Order[:]'); ?>" class="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="message caption">
                <?php echo __('[:ua]Заявка успішно відправлена![:ru]Заявка успешно отправлена![:en]The application has been sent successfully![:]'); ?>
            </div>
        </div>
        <div class="popup popup_fp">
            <div class="close">
                <?php echo __('[:ua]Закрити[:ru]Закрыть[:en]Close[:]'); ?>
            </div>
            <div class="wrap">
                <div class="caption">
                    <?php echo __('[:ua]Отримати розрахунок[:ru]Получить расчет[:en]Get Settlement[:]'); ?>
                </div>
                <div class="contact_types">
                    <div class="choice">
                        <?php echo __('[:ua]Виберіть зручний вид зв\'язку
                    [:ru]Выберите удобный вид связи
                    [:en]Choose a convenient form of communication[:]'); ?>
                    </div>
                    <img src="/img/viber.svg" alt="viber" data-contact-type="viber">
                    <img src="/img/mail.svg" alt="mail" data-contact-type="mail">
                    <img src="/img/phone.svg" alt="phone" data-contact-type="phone" class="active">
                </div>
                <form autocomplete="off">
                    <div class="inputs_w">
                        <div class="input_bl">
                            <input type="text" name="name" class="name" id="name_cb" placeholder="<?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>">
                            <label for="name_cb"><?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?></label>
                        </div>
                        <div class="input_bl" style="display: none;">
                            <input type="email" name="mail" id="mail_fp" class="e" placeholder="<?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>">
                            <label for="mail">
                                <?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="tel" name="phone" id="phone_cb" class="phone" placeholder="<?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>" required>
                            <label for="phone_cb">
                                <?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="btn_w_line btn_b">
                        <div class="btn">
                            <input type="submit" value="<?php echo __('[:ua]Отримати[:ru]Получить[:en]Get[:]'); ?>" class="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="message caption">
                <?php echo __('[:ua]Заявка успішно відправлена![:ru]Заявка успешно отправлена![:en]The application has been sent successfully![:]'); ?>
            </div>
        </div>
        <div class="popup popup_question">
            <div class="close">
                <?php echo __('[:ua]Закрити[:ru]Закрыть[:en]Close[:]'); ?>
            </div>
            <div class="wrap">
                <div class="caption">
                    <?php echo __('[:ua]Задати запитання[:ru]Задать вопрос[:en]Ask a Question[:]'); ?>
                </div>
                <form autocomplete="off">
                    <div class="inputs_w">
                        <div class="input_bl">
                            <input type="text" name="name" class="name" id="name_q" placeholder="<?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>">
                            <label for="name_q">
                                <?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="tel" name="phone" id="phone_q" class="phone" placeholder="<?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>" required>
                            <label for="phone_q">
                                <?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <textarea name="question" id="question" class="question" placeholder="<?php echo __("[:ua]Питання[:ru]Вопрос[:en]Question[:]"); ?>" rows="1"></textarea>
                            <label for="question">
                                <?php echo __("[:ua]Питання[:ru]Вопрос[:en]Question[:]"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="btn_w_line btn_b">
                        <div class="btn">
                            <input type="submit" value="<?php echo __('[:ua]Замовити[:ru]Заказать[:en]Order[:]'); ?>" class="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="message caption">
                <?php echo __('[:ua]Заявка успішно відправлена![:ru]Заявка успешно отправлена![:en]The application has been sent successfully![:]'); ?>
            </div>
        </div>
        <div class="popup popup_email">
            <div class="close">
                <?php echo __('[:ua]Закрити[:ru]Закрыть[:en]Close[:]'); ?>
            </div>
            <div class="wrap">
                <div class="caption">
                    <?php echo __('[:ua]Заповнити онлайн-заявку
                [:ru]Заполнить онлайн-заявку
                [:en]Fill in the online application form[:]'); ?>
                </div>
                <form autocomplete="off">
                    <div class="inputs_w">
                        <div class="input_bl">
                            <input type="text" name="name" class="name" id="name_email" placeholder="<?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>">
                            <label for="name_email">
                                <?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="tel" name="phone" id="phone_email" class="phone" placeholder="<?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>" required>
                            <label for="phone_email">
                                <?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="email" name="mail" id="mail" class="email" placeholder="<?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>">
                            <label for="mail">
                                <?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <textarea name="question" id="question_email" class="question" placeholder="<?php echo __("[:ua]Питання[:ru]Вопрос[:en]Question[:]"); ?>" rows="1"></textarea>
                            <label for="question_email">
                                <?php echo __("[:ua]Питання[:ru]Вопрос[:en]Question[:]"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="btn_w_line btn_b">
                        <div class="btn">
                            <input type="submit" value="<?php echo __('[:ua]Замовити[:ru]Заказать[:en]Order[:]'); ?>" class="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="message caption">
                <?php echo __('[:ua]Заявка успішно відправлена![:ru]Заявка успешно отправлена![:en]The application has been sent successfully![:]'); ?>
            </div>
        </div>
        <div class="popup popup_template">
            <div class="close">
                <?php echo __('[:ua]Закрити[:ru]Закрыть[:en]Close[:]'); ?>
            </div>
            <div class="wrap">
                <div class="caption">
                    <?php echo __('[:ua]Замовити шаблон договору' .
                        '[:ru]Заказать шаблон договора' .
                        '[:en]Order contract template[:]'); ?>
                </div>
                <form autocomplete="off">
                    <div class="inputs_w">
                        <div class="input_bl">
                            <input type="text" name="name" class="name" id="name_email" placeholder="<?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>">
                            <label for="name_email">
                                <?php echo __("[:ua]Ім'я[:ru]Имя[:en]Name[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="tel" name="phone" id="phone_email" class="phone" placeholder="<?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>" required>
                            <label for="phone_email">
                                <?php echo __("[:ua]Номер телефону[:ru]Номер телефона[:en]Phone number[:]"); ?>
                            </label>
                        </div>
                        <div class="input_bl">
                            <input type="email" name="mail" id="mail" class="email" placeholder="<?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>">
                            <label for="mail">
                                <?php echo __("[:ua]Електронна пошта[:ru]Электронная почта[:en]Email[:]"); ?>
                            </label>
                        </div>
                    </div>
                    <div class="btn_w_line btn_b">
                        <div class="btn">
                            <input type="submit" value="<?php echo __('[:ua]Замовити[:ru]Заказать[:en]Order[:]'); ?>" class="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="message caption">
                <?php echo __('[:ua]Заявка успішно відправлена![:ru]Заявка успешно отправлена![:en]The application has been sent successfully![:]'); ?>
            </div>
        </div>
    </div>

    <div id="preloader">
        <div class="logo">
            <svg version="1.1" id="main-logo"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 385 155" style="enable-background:new 0 0 385 155;" xml:space="preserve">
                <g>
                    <g>
                        <path class="st0" d="M367.1,108.9l-5.3,0c-0.5,0-0.9-0.3-0.9-0.7l0-1.6c0-0.4,0.4-0.7,0.9-0.7l3.1,0c0.5,0,0.9-0.3,0.9-0.7l0-3.7
			c0-0.4-0.4-0.7-0.9-0.7l-3.1,0c-0.5,0-1.3,0-1.8,0l-1,0c-0.5,0-1.3,0-1.8,0l-4,0c-0.5,0-0.9,0.3-0.9,0.7l0,1.4l-2.7,0
			c-0.1-22.4-0.2-46-0.2-57.3c-1.8,0.1-3.7,0.1-5.5,0.1c-0.7,0-1.5,0-2.2-0.1c0.1,18.7,0.2,55.7,0.3,71.9c0,2.6,1.7,4.7,3.9,4.7
			c2.1,0,3.9-2.1,3.8-4.7v0l2.7,0l0,3.9c0,0.4,0.4,0.7,0.9,0.7l4,0c0.5,0,1.3,0,1.8,0l1,0c0.5,0,1.3,0,1.8,0l3.4,0
			c0.5,0,0.9-0.3,0.9-0.7l0-3.7c0-0.4-0.4-0.7-0.9-0.7l-3.4,0c-0.5,0-0.9-0.3-0.9-0.7l0-1.6c0-0.4,0.4-0.7,0.9-0.7l5.3,0
			c0.5,0,0.9-0.3,0.9-0.7l0-3.7C368,109.2,367.6,108.9,367.1,108.9z"/>
                    </g>
                    <g>
                        <path class="st0" d="M348.8,50.1c0.3-1.7,4.2-3.5,6.9-4.5c9.7-1.5,20.5-5.8,20.5-18.2c-0.1-17.2-24.6-18.4-30.7-18.4
			c-6.2,0-30.7,1.4-30.6,18.6c0,12.4,10.9,16.7,20.6,18.1c2.8,1.1,7,2.9,7,4.7c0,0,0,0.1,0,0.1C344.5,50.2,346.6,50.1,348.8,50.1z
			 M345.6,41.4c-7.3,0-23.8-3.3-23.8-13.2c0-5.9,4.9-10.7,11.9-11.4c7.5-0.8,8.2,4.7,11.8,4.7c3.7,0,4.3-5.5,11.8-4.8
			c7,0.7,11.9,5.4,12,11.3C369.3,37.9,352.9,41.3,345.6,41.4z"/>
                    </g>
                    <path class="st1" d="M72.4,116.7h2c1.2,0,1.9-0.1,2.3-0.4c0.4-0.3,0.7-0.9,1-1.8c0.1-0.3,0.2-1.5,0.2-3.6
		c0.1-2.1,0.2-4.6,0.2-7.8c0.1-3.1,0.1-6.6,0.2-10.5c0-3.9,0.1-7.8,0.1-11.8c0-4,0.1-7.9,0.1-11.6c0-3.7,0-7.1,0-10
		c0-3.9,0-8.3-0.1-12.9c0-4.7-0.1-9.1-0.1-13.3c0-4.2-0.1-7.8-0.2-10.8c-0.1-3-0.3-4.8-0.4-5.3c-0.2-0.9-0.6-1.5-1-1.8
		c-0.4-0.3-1.2-0.5-2.3-0.5h-2V8.9h24v5.5h-2.6c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.8,0.9-1.1,1.8c-0.2,0.5-0.3,2-0.4,4.4
		c-0.1,2.5-0.2,5.5-0.2,9c-0.1,3.5-0.1,7.4-0.1,11.5c0,4.1,0,8.2,0,12h24.5c0-3.9,0-7.9-0.1-12c0-4.1-0.1-8-0.1-11.5
		c0-3.5-0.1-6.5-0.2-9c-0.1-2.5-0.2-3.9-0.3-4.4c-0.3-0.9-0.7-1.5-1.1-1.8c-0.4-0.3-1.2-0.5-2.2-0.5h-2.6V8.9h24v5.5h-2
		c-1.2,0-1.9,0.2-2.3,0.5c-0.4,0.3-0.7,0.9-1,1.8c-0.2,0.5-0.3,2.3-0.4,5.3c-0.1,3-0.2,6.7-0.3,10.8c-0.1,4.2-0.1,8.6-0.1,13.3
		c0,4.7,0,9,0,12.9c0,2.9,0,6.2,0,10c0,3.8,0,7.7,0.1,11.7c0,4,0.1,8,0.1,11.8c0,3.9,0.1,7.4,0.2,10.5c0.1,3.1,0.2,5.7,0.2,7.8
		c0.1,2.1,0.2,3.2,0.2,3.6c0.2,0.9,0.6,1.5,1,1.8c0.4,0.3,1.2,0.4,2.3,0.4h2v5.7h-24v-5.7h2.6c1.1,0,1.8-0.1,2.2-0.4
		c0.4-0.3,0.8-0.9,1.1-1.8c0.1-0.3,0.2-1.5,0.2-3.6c0.1-2.1,0.1-4.6,0.2-7.8c0-3.1,0.1-6.6,0.1-10.5c0-3.9,0.1-7.8,0.1-11.8
		c0-4,0.1-7.9,0.1-11.6c0-3.7,0-7.1,0-10H89.8c0,2.9,0,6.2,0,10c0,3.8,0,7.7,0.1,11.7c0,4,0.1,8,0.1,11.8c0,3.9,0.1,7.4,0.1,10.5
		c0,3.1,0.1,5.7,0.2,7.8c0.1,2.1,0.2,3.2,0.2,3.6c0.3,0.9,0.7,1.5,1.1,1.8c0.4,0.3,1.2,0.4,2.2,0.4h2.6v5.7h-24V116.7z"/>
                    <path class="st1" d="M7.7,116.7h2c1.2,0,1.9-0.1,2.3-0.4c0.4-0.3,0.7-0.9,1-1.8c0.1-0.3,0.2-1.5,0.2-3.6
		c0.1-2.1,0.2-4.6,0.2-7.8c0.1-3.1,0.1-6.6,0.2-10.5c0-3.9,0.1-7.8,0.1-11.8c0-4,0.1-7.9,0.1-11.6c0-3.7,0-7.1,0-10
		c0-3.9,0-8.3-0.1-12.9c0-4.7-0.1-9.1-0.1-13.3c0-4.2-0.1-7.8-0.2-10.8c-0.1-3-0.3-4.8-0.4-5.3c-0.2-0.9-0.6-1.5-1-1.8
		c-0.4-0.3-1.2-0.5-2.3-0.5h-2V8.9h24v5.5h-2.6c-1.1,0-1.8,0.2-2.2,0.5c-0.4,0.3-0.8,0.9-1.1,1.8c-0.2,0.5-0.3,2-0.4,4.4
		c-0.1,2.5-0.2,5.5-0.2,9c-0.1,3.5-0.1,7.4-0.1,11.5c0,4.1,0,8.2,0,12h24.5c0-3.9,0-7.9-0.1-12c0-4.1-0.1-8-0.1-11.5
		c0-3.5-0.1-6.5-0.2-9c-0.1-2.5-0.2-3.9-0.3-4.4c-0.3-0.9-0.7-1.5-1.1-1.8c-0.4-0.3-1.2-0.5-2.2-0.5H43V8.9h24v5.5h-2
		c-1.2,0-1.9,0.2-2.3,0.5c-0.4,0.3-0.7,0.9-1,1.8c-0.2,0.5-0.3,2.3-0.4,5.3c-0.1,3-0.2,6.7-0.3,10.8c-0.1,4.2-0.1,8.6-0.1,13.3
		c0,4.7,0,9,0,12.9c0,2.9,0,6.2,0,10c0,3.8,0,7.7,0.1,11.7c0,4,0.1,8,0.1,11.8c0,3.9,0.1,7.4,0.2,10.5c0.1,3.1,0.2,5.7,0.2,7.8
		c0.1,2.1,0.2,3.2,0.2,3.6c0.2,0.9,0.6,1.5,1,1.8c0.4,0.3,1.2,0.4,2.3,0.4h2v5.7H43v-5.7h2.6c1.1,0,1.8-0.1,2.2-0.4
		c0.4-0.3,0.8-0.9,1.1-1.8c0.1-0.3,0.2-1.5,0.2-3.6c0.1-2.1,0.1-4.6,0.2-7.8c0-3.1,0.1-6.6,0.1-10.5c0-3.9,0.1-7.8,0.1-11.8
		c0-4,0.1-7.9,0.1-11.6c0-3.7,0-7.1,0-10H25.1c0,2.9,0,6.2,0,10c0,3.8,0,7.7,0.1,11.7c0,4,0.1,8,0.1,11.8c0,3.9,0.1,7.4,0.1,10.5
		c0,3.1,0.1,5.7,0.2,7.8c0.1,2.1,0.2,3.2,0.2,3.6c0.3,0.9,0.7,1.5,1.1,1.8c0.4,0.3,1.2,0.4,2.2,0.4h2.6v5.7h-24V116.7z"/>
                    <path class="st1" d="M157.3,60.7c2.5,0,4.8,0.4,7,1.3c2.2,0.9,4.2,2.1,6,3.8c1.2,1.2,2.4,2.4,3.4,3.7s1.9,3,2.7,4.9
		c0.7,2,1.3,4.4,1.7,7.3c0.4,2.9,0.6,6.5,0.6,10.7c0,3.4-0.2,6.3-0.5,8.7c-0.3,2.5-0.8,4.6-1.4,6.5c-0.6,1.8-1.4,3.5-2.3,4.9
		c-0.9,1.4-1.9,2.7-3,3.8c-1.9,2.1-4,3.6-6.4,4.6c-2.4,1-4.9,1.5-7.6,1.5c-2.9,0-5.5-0.6-8-1.7c-2.5-1.1-4.6-2.8-6.5-4.9
		c-1-1.1-1.9-2.4-2.7-3.6c-0.8-1.3-1.5-2.8-2.1-4.6c-0.6-1.8-1-3.9-1.3-6.4c-0.3-2.5-0.4-5.5-0.4-9c0-3.8,0.2-7,0.6-9.7
		c0.4-2.7,0.9-5.1,1.5-7.1c0.7-2,1.5-3.7,2.4-5.2c0.9-1.4,2-2.7,3.3-3.9c1.8-1.7,3.8-3.1,6.1-4.1C152.3,61.1,154.7,60.7,157.3,60.7z
		 M157.3,66.2c-2.4,0-4.4,0.9-5.9,2.7c-0.4,0.4-0.8,1-1,1.7c-0.3,0.7-0.5,1.8-0.7,3.5c-0.2,1.6-0.4,3.8-0.5,6.7
		c-0.1,2.9-0.2,6.7-0.2,11.3c0,4.4,0.1,7.9,0.2,10.5c0.1,2.7,0.3,4.8,0.5,6.3c0.2,1.6,0.5,2.7,0.7,3.4c0.3,0.7,0.6,1.3,1,1.8
		c0.7,0.9,1.6,1.6,2.7,2.1c1,0.5,2.1,0.7,3.3,0.7c2.5,0,4.4-0.9,5.8-2.7c0.4-0.5,0.8-1.1,1-1.8c0.3-0.7,0.5-1.8,0.7-3.4
		c0.2-1.6,0.4-3.7,0.5-6.3c0.1-2.7,0.2-6.2,0.2-10.7c0-4.7-0.1-8.4-0.2-11.3c-0.1-2.8-0.3-5.1-0.4-6.7c-0.2-1.6-0.4-2.8-0.7-3.5
		c-0.3-0.7-0.7-1.3-1-1.7C161.6,67.1,159.6,66.2,157.3,66.2z"/>
                    <path class="st1" d="M232.3,67.6h-1.5c-1.6,0-2.6,0.5-3.2,1.6c-0.2,0.3-0.4,0.8-0.6,1.4s-0.2,1.7-0.2,3.3
		c0,1.6-0.1,4-0.1,7.1c0,3.1-0.1,7.3-0.1,12.6c0,3.5-0.1,6.3-0.2,8.7c-0.1,2.3-0.3,4.3-0.5,5.9c-0.2,1.6-0.5,2.9-0.9,4
		c-0.4,1.1-0.8,2-1.3,2.8c-2.9,4.9-8,7.4-15.3,7.4c-3.7,0-7-0.5-9.9-1.5c-2.9-1-5.2-2.5-7-4.7c-0.7-0.8-1.4-1.8-1.8-3
		c-0.5-1.1-0.9-2.7-1.2-4.5c-0.3-1.8-0.5-4.1-0.7-6.8c-0.2-2.7-0.2-6-0.2-10c0-5,0-9-0.1-12c0-3-0.1-5.2-0.1-6.8
		c0-1.6-0.1-2.6-0.2-3.1c-0.1-0.5-0.3-0.9-0.4-1.2c-0.3-0.5-0.8-0.8-1.5-1c-0.7-0.2-1.8-0.3-3.3-0.3V62h23.9v5.5h-1.8
		c-1.2,0-2.1,0.4-2.8,1.2c-0.3,0.3-0.6,0.7-0.7,1.2c-0.2,0.5-0.3,1.5-0.4,2.9c-0.1,1.4-0.2,3.5-0.2,6.2c0,2.7-0.1,6.4-0.1,11.2
		c0,4.3,0,7.7,0.1,10.3c0.1,2.6,0.2,4.6,0.3,6.2c0.1,1.5,0.3,2.7,0.5,3.5c0.2,0.8,0.5,1.5,0.8,2.2c0.8,1.6,1.8,2.8,2.8,3.4
		c1.1,0.6,2.5,0.9,4.4,0.9c1.6,0,3-0.3,4.1-1c1.1-0.7,2.1-1.8,2.9-3.3c0.3-0.7,0.6-1.4,0.8-2.2c0.2-0.8,0.4-1.9,0.5-3.4
		c0.1-1.5,0.2-3.4,0.2-5.9c0-2.4,0.1-5.7,0.1-9.8c0-4.3,0-7.7-0.1-10.3c0-2.6-0.1-4.7-0.1-6.2c0-1.6-0.1-2.7-0.2-3.4
		c-0.1-0.7-0.3-1.3-0.4-1.7c-0.4-1.3-1.7-2-3.9-2h-1V62h20.7V67.6z"/>
                    <path class="st1" d="M253.3,60.7c2.1,0,4.2,0.4,6.2,1.2c2,0.8,3.6,2.3,4.8,4.6v-5.8h4.9V78h-4.9v-1.1
		c0-1.2-0.1-2.4-0.4-3.4c-0.2-1-0.7-2.1-1.5-3.3c-0.9-1.4-2-2.5-3.1-3.2c-1.2-0.7-2.7-1.1-4.6-1.1c-2.3,0-4,0.6-5.2,1.8
		c-1.2,1.2-1.7,3-1.7,5.2c0,1.6,0.4,3,1.1,4.2c0.7,1.2,1.9,2.3,3.4,3.3c1.2,0.7,2.5,1.5,3.9,2.2c1.5,0.7,3.2,1.6,5.2,2.6
		c3.1,1.5,5.5,3.3,7.1,5.5c1.4,1.7,2.4,3.5,2.9,5.2c0.5,1.8,0.8,3.8,0.8,6.1c0,3.4-0.5,6.3-1.6,8.8c-1.1,2.5-2.5,4.6-4.4,6.3
		c-1.8,1.7-4,3-6.5,3.8c-2.5,0.9-5.1,1.3-7.9,1.3c-2.2,0-4.4-0.4-6.4-1c-2.1-0.7-3.9-1.8-5.5-3.2c-1.6-1.4-2.9-3.2-4-5.2
		c-1.1-2.1-1.7-4.4-1.8-7.1l3.7-1c0.5,3.8,2.1,6.8,4.7,8.9c2.7,2.2,5.6,3.3,8.9,3.3c2.8,0,5.1-0.8,6.9-2.5c1.8-1.7,2.7-4.1,2.7-7.3
		c0-1.9-0.2-3.4-0.7-4.4c-0.5-1.1-1.3-2.2-2.5-3.5c-0.8-0.8-2-1.7-3.4-2.6c-1.4-0.9-3-1.8-4.6-2.7c-1.6-0.9-3.2-1.8-4.7-2.8
		c-1.5-0.9-2.8-1.9-3.8-2.9c-1.7-1.7-3-3.6-3.8-5.5c-0.8-2-1.2-4-1.2-6.2c0-4.8,1.6-8.7,4.7-11.6C244.4,62.1,248.4,60.7,253.3,60.7z
		"/>
                    <path class="st1" d="M317.1,107.1c-3.1,10.2-9.3,15.3-18.6,15.3c-3.5,0-6.7-0.9-9.5-2.8c-2.8-1.8-5.1-4.3-7-7.5
		c-1.5-2.4-2.6-5.2-3.4-8.5c-0.8-3.3-1.2-7.2-1.2-11.7c0-6.2,0.6-11.1,1.8-14.9c1.2-3.8,2.9-6.9,5-9.4c1.9-2.1,4-3.8,6.5-5.1
		c2.4-1.3,5-1.9,7.8-1.9c5.7,0,10.1,1.4,13.4,4.3c3.2,2.9,4.9,7.2,4.9,13.1c0,1.2-0.1,2.3-0.4,3.3c-0.2,0.9-0.7,1.8-1.5,2.7
		c-0.7,0.8-1.7,1.6-3,2.3c-1.3,0.7-2.9,1.6-5,2.5l-16.8,7.4c0,3.3,0.1,6,0.2,8.1c0.1,2.1,0.3,3.8,0.6,5.1c0.2,1.3,0.6,2.3,0.9,3
		c0.4,0.7,0.8,1.4,1.2,1.8c1.6,1.9,3.5,2.8,5.5,2.8c4.2,0,7.6-1.1,10.2-3.3c2.6-2.2,4.3-4.6,5.1-7.3L317.1,107.1z M307.7,77.3
		c0-3.7-0.6-6.5-1.9-8.3c-1.3-1.8-3.7-2.8-7.3-2.8c-1.2,0-2.4,0.3-3.4,0.9c-1,0.6-2,1.4-2.8,2.4c-0.4,0.5-0.7,1.1-1,1.7
		c-0.2,0.7-0.5,1.7-0.7,3.1c-0.2,1.4-0.3,3.3-0.4,5.7c-0.1,2.4-0.1,5.5-0.1,9.4l14.4-5.9c1.2-0.4,2-1.1,2.5-2
		C307.5,80.6,307.7,79.2,307.7,77.3z"/>
                </g>
                <g>
                    <path class="st1" d="M82.9,139.7h-1v4.6h-0.5v-4.6h-1l-4.3,4.6h-0.6l0,0l4.4-4.7l-3.8-4.5l0,0h0.5l3.7,4.3h1.1
		v-4.3h0.5v4.3H83l3.7-4.3h0.5l0,0l-3.8,4.5l4.4,4.7l0,0.1h-0.5L82.9,139.7z"/>
                    <path class="st1" d="M97.7,134.9h0.5v9.3h-0.5v-8.4l-0.1,0l-5.7,8.4h-0.5v-9.3h0.5v8.4l0.1,0L97.7,134.9z"/>
                    <path class="st1" d="M109.7,135.4H106v8.9h-0.5v-8.9h-3.5v-0.5h7.6V135.4z"/>
                    <path class="st1" d="M119.9,134.9v9.3h-0.5v-8.9h-4.6v3.8c0,1.8-0.2,3.1-0.6,3.9s-1,1.2-1.9,1.2h-0.3v-0.5h0.3
		c0.7,0,1.1-0.3,1.5-1c0.3-0.7,0.5-1.9,0.5-3.6v-4.2H119.9z"/>
                    <path class="st1" d="M123.9,139.4c0-1.4,0.4-2.5,1.1-3.4c0.8-0.9,1.7-1.3,2.9-1.3c1.2,0,2.2,0.4,3,1.3
		c0.8,0.9,1.1,2,1.1,3.4v0.4c0,1.4-0.4,2.5-1.1,3.4c-0.8,0.9-1.7,1.3-2.9,1.3c-1.2,0-2.2-0.4-3-1.3c-0.8-0.9-1.1-2-1.1-3.4V139.4z
		 M124.3,139.7c0,1.2,0.3,2.2,1,3c0.7,0.8,1.5,1.2,2.6,1.2c1.1,0,2-0.4,2.6-1.2c0.7-0.8,1-1.8,1-3v-0.4c0-1.1-0.3-2.1-1-3
		c-0.7-0.8-1.5-1.2-2.6-1.2c-1.1,0-2,0.4-2.6,1.2c-0.7,0.8-1,1.8-1,3V139.7z"/>
                    <path class="st1" d="M136.1,144.2v-9.3h3.2c1.1,0,2,0.2,2.6,0.6c0.6,0.4,0.9,1,0.9,1.8c0,0.5-0.2,1-0.5,1.4
		c-0.3,0.4-0.8,0.6-1.4,0.8h0c0.6,0.1,1.2,0.3,1.6,0.8c0.4,0.4,0.6,0.9,0.6,1.5c0,0.8-0.3,1.4-0.9,1.9c-0.6,0.4-1.4,0.7-2.4,0.7
		H136.1z M136.6,139.3h2.9c0.9,0,1.6-0.2,2.1-0.5c0.5-0.3,0.7-0.8,0.7-1.5c0-0.7-0.3-1.1-0.8-1.4c-0.5-0.3-1.3-0.5-2.3-0.5h-2.7
		V139.3z M136.6,139.7v4h3.3c0.9,0,1.6-0.2,2.1-0.5c0.5-0.4,0.8-0.9,0.8-1.5c0-0.6-0.3-1.1-0.8-1.4c-0.5-0.4-1.2-0.5-2.1-0.5H136.6z
		"/>
                    <path class="st1" d="M153.7,134.9h0.5v9.3h-0.5v-8.4l-0.1,0l-5.7,8.4h-0.5v-9.3h0.5v8.4l0.1,0L153.7,134.9z"/>
                    <path class="st1" d="M165.1,134.9h0.5v9.3h-0.5v-8.4l-0.1,0l-5.7,8.4h-0.5v-9.3h0.5v8.4l0.1,0L165.1,134.9z
		 M164.5,131.3L164.5,131.3c0,0.7-0.2,1.2-0.6,1.6c-0.4,0.4-1,0.6-1.7,0.6c-0.7,0-1.3-0.2-1.8-0.6c-0.4-0.4-0.6-0.9-0.6-1.5l0-0.1
		h0.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.8,0.5,1.5,0.5c0.6,0,1.1-0.2,1.4-0.5c0.3-0.3,0.5-0.7,0.5-1.2H164.5z"/>
                    <path class="st1" d="M179.7,134.7c1.2,0,2.2,0.4,3,1.3c0.8,0.9,1.1,2,1.1,3.4v0.4c0,1.4-0.4,2.5-1.1,3.4
		c-0.8,0.9-1.7,1.3-2.9,1.3c-1.2,0-2.2-0.4-3-1.3c-0.8-0.9-1.1-2-1.1-3.4v-3.2c0-1.5,0.4-2.6,1.3-3.3c0.9-0.8,2.1-1.2,3.7-1.2
		c0.9,0,1.5-0.1,2-0.3c0.4-0.2,0.7-0.5,0.7-0.8h0.4l0,0.1c0,0.6-0.2,0.9-0.7,1.2c-0.5,0.2-1.3,0.4-2.3,0.4c-1.5,0-2.6,0.4-3.4,1.1
		c-0.8,0.7-1.2,1.7-1.2,3v0.5c0.3-0.7,0.8-1.3,1.4-1.7C178.2,134.9,178.9,134.7,179.7,134.7z M179.7,135.2c-1.1,0-2,0.4-2.6,1.2
		c-0.7,0.8-1,1.8-1,3v0.4c0,1.2,0.3,2.2,1,3c0.7,0.8,1.5,1.2,2.6,1.2c1.1,0,2-0.4,2.6-1.2c0.7-0.8,1-1.8,1-3v-0.4c0-1.1-0.3-2.1-1-3
		S180.8,135.2,179.7,135.2z"/>
                    <path class="st1" d="M190.2,142.5l0.3,0.9h0.1l0.1-0.1l3.2-8.4h0.5l-4.1,10.9c-0.3,0.7-0.5,1.2-0.9,1.6
		c-0.3,0.4-0.9,0.6-1.6,0.6c-0.1,0-0.2,0-0.4,0s-0.2,0-0.3-0.1l0.1-0.4c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0,0.3,0
		c0.5,0,0.9-0.2,1.2-0.5c0.3-0.3,0.6-0.8,0.8-1.4l0.6-1.5l-3.7-9.3h0.5L190.2,142.5z"/>
                    <path class="st1" d="M197.2,143.8c0.5,0,0.8-0.5,1.2-1.5c0.3-1,0.5-2.4,0.6-4.2l0.2-3.2h5.1v8.9h0.6v3.5h-0.5v-3
		h-7.4v3h-0.4v-3.5H197.2z M199.3,138.1c-0.1,1.4-0.2,2.6-0.4,3.5c-0.2,1-0.5,1.7-0.9,2.1h5.6v-8.4h-4.2L199.3,138.1z"/>
                    <path class="st1" d="M215.1,134.9h0.5v9.3h-0.5v-8.4l-0.1,0l-5.7,8.4h-0.5v-9.3h0.5v8.4l0.1,0L215.1,134.9z"/>
                    <path class="st1" d="M227,144.2h-0.5v-4.6h-5.8v4.6h-0.5v-9.3h0.5v4.3h5.8v-4.3h0.5V144.2z"/>
                    <path class="st1" d="M231,139.4c0-1.4,0.4-2.5,1.1-3.4c0.8-0.9,1.7-1.3,2.9-1.3c1.2,0,2.2,0.4,3,1.3
		c0.8,0.9,1.1,2,1.1,3.4v0.4c0,1.4-0.4,2.5-1.1,3.4c-0.8,0.9-1.7,1.3-2.9,1.3c-1.2,0-2.2-0.4-3-1.3c-0.8-0.9-1.1-2-1.1-3.4V139.4z
		 M231.4,139.7c0,1.2,0.3,2.2,1,3c0.7,0.8,1.5,1.2,2.6,1.2c1.1,0,2-0.4,2.6-1.2c0.7-0.8,1-1.8,1-3v-0.4c0-1.1-0.3-2.1-1-3
		c-0.7-0.8-1.5-1.2-2.6-1.2c-1.1,0-2,0.4-2.6,1.2c-0.7,0.8-1,1.8-1,3V139.7z"/>
                    <path class="st1" d="M245.1,139.7h-1.4v4.6h-0.5v-9.3h0.5v4.3h1.5l4-4.3h0.6l0,0l-4.2,4.5l4.7,4.7l0,0.1h-0.6
		L245.1,139.7z"/>
                </g>
            </svg>
        </div>
    </div>

    <!--BEGIN PHONET CODE {literal}-->
    <script>
        var telerWdWidgetId="7031f57e-d060-482e-88e6-66c6521fe0f5";
        var telerWdDomain="budcapital1.phonet.com.ua";
    </script>
    <script src="//budcapital1.phonet.com.ua/public/widget/call-catcher/lib-v3.js"></script>
    <!--{/literal} END PHONET CODE -->

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'nmq3PgPEsz';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->

    <!--BEGIN PHONET CODE {literal}-->
    <script>
        var telerTrackerWidgetId="d87a46b4-28db-41ac-a6b7-587143490aa9";
        var telerTrackerDomain="budcapital1.phonet.com.ua";
    </script>

    <!--{/literal} END PHONET CODE -->
    
    <script type="text/javascript">
        (function(d, w, s) {
            var widgetHash = 'g3qs7cr4ulbcjl1lt2sa', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
            ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
            var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
        })(document, window, 'script');
    </script>
    <?php wp_footer(); ?>

    </body>
</html>