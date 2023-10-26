<?php

/**
 * Plugin Name: Yam
 * Plugin URI: http://thimpress.com/learnpress
 * Description: LearnPress is a WordPress complete solution for creating a Learning Management System (LMS). It can help you to create courses, lessons and quizzes.
 * Author: ThimPress2
 * Version: 1.7

 * Requires at least: 5.8
 * Tested up to: 6.1.1
 * Requires PHP: 7.0
 * Text Domain:Yam

 */


require 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/aulaideal/yam/',
    __FILE__,
    'yam'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');



/* public function plugin_setup()
{
add_filter( 'upgrader_source_selection', array( $this, 'rename_github_zip' ), 1, 3);
}


public function rename_github_zip( $source, $remote_source, $thiz )
{
if( strpos( $source, 'github-plugin-for-wordpress') === false )
return $source;

$path_parts = pathinfo( $source );
$newsource = trailingslashit( $path_parts['dirname'] ) . trailingslashit( 'github-plugin-for-wordpress' );
rename( $source, $newsource );
return $newsource;
} */
?>

<h1>HOL</h1>