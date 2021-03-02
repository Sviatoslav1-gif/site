<?php
/**
* Чистый Шаблон для разработки
* Функции шаблона
* @package WordPress
* @subpackage clean
*/
function sitename()
{
    bloginfo('name'); // если надо наздвание сайта
    wp_title(); // если надо title
}

add_shortcode('shortname', 'sitename');
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
));
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

?>