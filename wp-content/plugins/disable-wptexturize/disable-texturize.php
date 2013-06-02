<?php
/*
Plugin Name: Disable wptexturize
Plugin URI: http://www.jasonlitka.com/2007/09/25/wordpress-plugin-disable-wptexturize/
Description: Disables WordPress content & comment texturizing
Author: Jason Litka
Version: 1.0
Author URI: http://www.jasonlitka.com/
*/

remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

?>
