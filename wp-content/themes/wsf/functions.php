<?php

if ( ! function_exists( 'wsf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function wsf_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'wsf', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(false);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'wsf' ),
		'social'  => __( 'Social Links Menu', 'wsf' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif;
add_action( 'after_setup_theme', 'wsf_setup' );

remove_action ('wp_head', 'wp_generator');
remove_filter('the_content', 'wptexturize');

function remove_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'remove_admin_bar');

add_action( 'wp_ajax_do_something',        'do_something_callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something', 'do_something_callback' ); // For anonymous users

add_action( 'wp_ajax_do_something_2',        'do_something_callback_2' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something_2', 'do_something_callback_2' ); // For anonymous users

add_action( 'wp_ajax_flat_request',        'flat_request_callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_flat_request', 'flat_request_callback' ); // For anonymous users

function do_something_callback(){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['mail'] ?: null;
	$question = $_POST['question'] ?: null;
	$url = $_POST['url'] ?: null;
    $subject = $_POST['subject'] ?: 'Обратная связь';

    $to      = 'murashenkorb@gmail.com';
    //$to      = 'd.portnov@wsf.com.ua';

    $message = "<strong>Имя:</strong> $name<br> <strong>Телефон:</strong> $phone";
    $message = $email ? $message."<br><strong>Электронная почта:<strong> $email" : $message;
    $message = $question ? $message."<br><strong>Вопрос:</strong> $question" : $message;
    $message = $url ? $message."<br><strong>Ссылка:</strong> <a href='$url'>перейти</a> " : $message;

    $header = "From: henesi-house@info.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

    global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'status' => false,
            'name' => $name,
            'phone' => $phone,
            'mail' => $email,
            'question' => $question,
            'subject' => $subject,
            'url' => $url,
        )
    );
    wp_die();
}

function do_something_callback_2(){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['mail'] ?: null;
	$comment = $_POST['comment'] ?: null;
	$url = $_POST['url'] ?: null;
    $subject = $_POST['subject'] ?: 'Обратная связь';

    $to      = 'murashenkorb@gmail.com';

    $message = "<strong>Имя:</strong> $name<br> <strong>Телефон:</strong> $phone";
    $message = $email ? $message."<br><strong>Электронная почта:<strong> $email" : $message;
    $message = $comment ? $message."<br><strong>Вопрос:</strong> $comment" : $message;
    $message = $url ? $message."<br><strong>Ссылка:</strong> <a href='$url'>перейти</a> " : $message;

    $header = "From: henesi-house@info.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

    global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'status' => false,
            'name' => $name,
            'phone' => $phone,
            'mail' => $email,
            'question' => $comment,
            'subject' => $subject,
            'url' => $url,
        )
    );
    wp_die();
}

function flat_request_callback(){

    $subject = 'Подбор квартиры';
    $to      = 'murashenkorb@gmail.com';

    $type = $_POST['type'] ?: null;
    $min_square = $_POST['min_square'] ?: null;
    $max_square = $_POST['max_square'] ?: null;
    $money = $_POST['money'] ?: null;
    $phone = $_POST['phone'] ?: null;
    $url = $_POST['url'] ?: null;

    $message = '';
    $message = $type ? $message."<strong>Планировка: </strong>".$type."<br>" : $message;
    $message = $min_square ? $message."<strong>Метраж от: </strong>".$min_square."<br>" : $message;
    $message = $max_square ? $message."<strong>Метраж до: </strong>".$max_square."<br>" : $message;
    $message = $money ? $message."<strong>Бюджет до: </strong>".$money."<br>" : $message;
    $message = $phone ? $message."<strong>Телефон: ".$phone."</strong>" : $message;
    $message = $url ? $message."<br><strong>Ссылка:</strong> <a href='".$url."'>перейти</a> " : $message;

    $header = "From: henesi-house@info.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    mail($to, $subject, $message, $header);

    $subject = "Подбор квартиры: ";
    $subject = $type ? $subject.$type.", " : $subject;
    $subject = $min_square ? $subject."от ".$min_square."м2 " : $subject;
    $subject = $max_square ? $subject." до ".$max_square."м2" : $subject;
    $subject = $money ? $subject.", бюджет до ".$money : $subject;

    global $wpdb;
    $table_name = $wpdb->prefix . 'callback_request';
    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'status' => false,
            'phone' => $phone,
            'subject' => $subject,
            'url' => $url,
        )
    );
    wp_die();
}

function wsf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'wsf' ),
		'id'            => 'sidebar-1'
	) );
}
add_action( 'widgets_init', 'wsf_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since wsf 2.0
 */
function wsf_scripts() {

	// Stylesheets
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'wsf-style', get_template_directory_uri() . '/css/style.css', null, null);
	wp_enqueue_style( 'roma-style', get_template_directory_uri() . '/css/roma.css', null, null);
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', null, null);
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css', null, null );
    wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css', null, null );
    wp_enqueue_style( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css', null, null );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', null, null );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Scripts
	wp_enqueue_script( 'wsf-script', get_template_directory_uri() . '/js/functions.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'filter', get_template_directory_uri() . '/js/jquery.owl-filter.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js', array( 'jquery' ),  null, true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'viewportchecker', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'wsf_scripts' );

add_action( 'init', 'true_jquery_register' );

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', "//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" , array(), '2.1.0' );
}

// Remove All Yoast HTML Comments
if (defined('WPSEO_VERSION')) {
    add_action('wp_head',function() { ob_start(function($o) {
        return preg_replace('/^\n?<!--.*?[Y]oast.*?-->\n?$/mi','',$o);
    }); },~PHP_INT_MAX);
}

// Remove word "Category" in archive
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
});

//length announcement news
function new_excerpt_length($length) {
    return 15;//кол-во слов цитаты
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
    return '...';
});

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t ){
    foreach( (array) get_the_category() as $cat ){
        if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        if($cat->parent){
            $cat = get_the_category_by_ID( $cat->parent );
            if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
        }
    }
    return $t;
}

function go_filter() {
    $args = array();
    $args['meta_query'] = array('relation' => 'AND'); // отношение между условиями, у нас это "И то И это", можно ИЛИ(OR)
    global $wp_query; // нужно заглобалить текущую выборку постов

    if ($_GET['min_square'] != '' || $_GET['max_square'] != '') {
        if ($_GET['min_square'] == '') $_GET['min_square'] = 0;
        if ($_GET['max_square'] == '') $_GET['max_square'] = 200;
        $args['meta_query'][] = array(
            'key' => 'total_area', // название произвольного поля
            'value' => array( (int)$_GET['min_square'], (int)$_GET['max_square'] ), // переданные значения ОТ и ДО для интервала передаются в массиве
            'type' => 'numeric',
            'compare' => 'BETWEEN' // тип сравнения, здесь это BETWEEN - т.е. между "Площадь от" и до "Площадь до"
        );
    }

    query_posts(array_merge($args,$wp_query->query)); // сшиваем текущие условия выборки стандартного цикла wp с новым массивом переданным из формы и фильтруем
}