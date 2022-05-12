<?php
/*
Plugin Name: My first amazing plugin 
Description: Best Plugin
*/
add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content){
    $content = $content . '<p>All content belongs to Fictional University</p>';
    $content = str_replace('Lorem', '*****', $content);
    return $content;
}


add_shortcode('programCount', 'programCountFun');

function programCountFun() {
    return 2+2;
}