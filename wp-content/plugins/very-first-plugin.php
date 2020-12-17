<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://chriskottisse.ikt.khk.ee/
 * Version: 1.0
 * Author: Chris Kottisse
 * Author URI: http://chriskottisse.ikt.khk.ee/
**/

[html]
< ?php global $user_ID; if( $user_ID ) : ?>
< ?php if( current_user_can(‘level_10’) ) : ?>

    Tere tulemast!< ?php global $current_user; get_currentuserinfo(); echo ($current_user->user_login); ?>
< ?php else : ?>
< ?php endif; ?>
< ?php endif; ?>
[/html]