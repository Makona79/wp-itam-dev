<?php

function itam_assets()
{

	wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_style('media', get_template_directory_uri() . '/assets/css/media.css');

	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'itam_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

function wp_corenavi()
{
	global $wp_query;
	$total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
	$a['total'] = $total;
	$a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

	if ($total > 1)
		echo '<nav class="pagination">';
	echo paginate_links($a);
	if ($total > 1)
		echo '</nav>';
}