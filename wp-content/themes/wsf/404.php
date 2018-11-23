<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 **/

get_header(); ?>

    <div id="error">
        <div class="w">
            <div class="cnt flex flex-sa">
                <div>
                    <h1 class="page-title"><span>404</span>
                        <?php echo __('[:ua]На жаль, сторінка відсутня[:ru]К сожалению, страница не найдена[:en]Not found[:]'); ?> :(
                    </h1>
                    <div class="page-content">
                        <p>
                            <?php echo __('[:ua]Неправильна адреса або сторінка відсутня!
                        [:ru]Неверный адрес либо страница отсутствует!
                        [:en]Invalid address or page missing![:]'); ?>
                        </p>
                        <p>
                            <?php echo __('[:ua]Повернутися на <a href="/">головну</a>
                        [:ru]Вернуться на <a href="/">главную</a>
                        [:en]Back to <a href="/">mainpage</a>[:]'); ?>
                        </p>
                    </div>
                </div>
                <img src="/img/404-img.png" alt="404">
            </div>
        </div>
    </div>

<?php get_footer(); ?>