<?php
/*
Plugin Name: Clickable Links
Plugin URI: http://liamparker.com
Description: Makes all links on page clickable.
Version: 1.3
Author: LMP
Author URI: http://liamparker.com/
*/
function makeClickable($content){
$content = make_clickable($content);
return $content;
}
add_filter('the_content', 'makeClickable');
add_filter('the_title', 'makeClickable');
?>