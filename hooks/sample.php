#!/usr/bin/env php
<?php
/**
 * The Git Hook Tools Sample Script.
 *
 * @category   GIT Hook
 * @package    GitHook
 * @version    1.0
 * @author     i.watanabe@developpers.info
 * @license    MIT License
 * @copyright  2016 develop]pers.info
 */
$included = include(file_exists(__DIR__.'/../vendor/autoload.php') ? __DIR__.'/../vendor/autoload.php' : __DIR__.'/../../../autoload.php');

if ( ! $included)
{
    echo 'You must set up the project dependencies, run the following commands:'.PHP_EOL.'curl -sS https://getcomposer.org/installer | php'.PHP_EOL.'php composer.phar install'.PHP_EOL;

    exit(1);
}
