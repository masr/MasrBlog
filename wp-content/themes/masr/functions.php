<?php

define('MZ_HOME', get_bloginfo('url'));
define('MZ_THEME_HOME', get_bloginfo('template_url'));
define('MZ_PATH', ABSPATH);
define('MZ_PLUGIN_HOME', MZ_HOME . '/wp-content/plugins');
define('MZ_THEME_PATH', TEMPLATEPATH);
require MZ_THEME_PATH . '/source/template.php';
require MZ_THEME_PATH . '/source/funcs.php';
require MZ_THEME_PATH . '/source/cache_index_page.php';
define('MZ_BLOG_NAME', get_bloginfo('name'));
define('MZ_BLOG_SUB_TITLE', '少年游');
define('MZ_POSTS_PER_PAGE', get_option('posts_per_page'));
define('MZ_404_REFRESH_TIME', 5);
define('MZ_GALLERY_PIC_COUNT', 6);

register_sidebar(array('name' => 'sidebar1'));
register_sidebar(array('name' => 'sidebar2'));


?>
