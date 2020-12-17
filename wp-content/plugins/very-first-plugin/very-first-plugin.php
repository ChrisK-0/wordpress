<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://chriskottisse.ikt.khk.ee/
 * Version: 1.0
 * Author: Chris Kottisse
 * Author URI: http://chriskottisse.ikt.khk.ee/
**/

function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );