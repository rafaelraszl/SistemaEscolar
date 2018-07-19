<?php

session_start();
require_once("vendor/autoload.php");
#include_once 'views/header.html';
#include_once 'views/menu.html';

use \Slim\Slim;
use \Mekhet\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");

});

$app->run();
?>