<?php

session_start();
require_once("vendor/autoload.php");
#include_once 'views/header.html';
#include_once 'views/menu.html';

use \Slim\Slim;
use \Mekhet\Page;
use \Mekhet\PageAdmin;
use \Mekhet\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	User::verifyLogin();

	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {

	User::verifyLogin();

	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->get('/admin/login', function() {

	$page = new PageAdmin([
		"header"=>false, #desabiltando header e footer padrão do site
		"footer"=>false  #pois a tela de login tem seu próprio header e footer
	]);

	$page->setTpl("login");


});

$app->post('/admin/login', function() {

	User::login($_POST["login"], $_POST["password"]);

	header("Location: /admin");
	exit;
});

$app->get("/admin/logout", function(){

	User::logout();

	header("Location: /admin/login");
	exit;
});

$app->run();

?>