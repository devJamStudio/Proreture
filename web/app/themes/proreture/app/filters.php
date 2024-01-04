<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('nav_menu_css_class', function () {
    $classes[] = 'text-blue-500 hover:text-blue-300 text-2xl text-center my-3';
    return $classes;
});
add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {

    // Add a new toolbar called "Very Simple"
    // - this toolbar has only 1 row of buttons
    $toolbars['Very Simple' ] = array();
    $toolbars['Very Simple' ][1] = array('bold' , 'italic' , 'underline' );

    // Edit the "Full" toolbar and remove 'code'
    // - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key


    // remove the 'Basic' toolbar completely

    // return $toolbars - IMPORTANT!
    return $toolbars;
});
add_filter('tiny_mce_before_init', function ($initArray) {
    $initArray['fontsize_formats'] = "10px 12px 13px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px";
    return $initArray;
});
