<?php

/**
 * @#SHATTER Framework
 * @Author: CodeVector Group
 **/

require ('vendor/autoload.php');

define('BASEPATH', __DIR__.DIRECTORY_SEPARATOR);
define('SF_INSTALLDIR', '/Projects/blog_2');

date_default_timezone_set('America/New_York');

/* This is not where the magic happens */

if (version_compare(PHP_VERSION, '5.4.0', 'lt')) {
    die('PHP 5.4+ is required');
}

$fullurl=str_replace(SF_INSTALLDIR,null,$_SERVER['REQUEST_URI']);
$url=explode('/',$fullurl);

$blog=new Shatter\app();
$blog->start();
