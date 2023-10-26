<?php

/**
 * Plugin Name: Yam
 * Plugin URI: http://aulaideal.com
 * Description: LearnPress is a WordPress complete solution for creating a Learning Management System (LMS). It can help you to create courses, lessons and quizzes.
 * Author: ThimPress2
 * Version: 2.0
 * Requires at least: 5.8
 * Tested up to: 6.1.1
 * Requires PHP: 7.0
 * Text Domain:yam
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
