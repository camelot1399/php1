<?php 

define('DOCROOT', __DIR__ . '/../');
define('TPL_PATH', DOCROOT . 'templates/');
define('UPLOAD_PATH', DOCROOT . 'data/uploaded/');
define('UPLOAD_IMG_FRUITS_PATH', 'img/photoList/');
define('HELPER_PATH', DOCROOT . 'engine/helpers/');
define('ACTIONS_PATH', DOCROOT . 'engine/actions/');
define('NEWS', DOCROOT . 'engine/actions/news/');
define('FRUITS', DOCROOT . 'engine/actions/fruits/');
define('MODEL_PATH', DOCROOT . 'data/models/');

require DOCROOT . '/engine/helpers/helper.php';
require DOCROOT . '/engine/db.php'; 

// setcookie("test", "/", 60*60*24, "/", array_get($_SERVER, 'HTTP_HOST'), 1);
session_set_cookie_params(60 * 60 * 24, '/', array_get($_SERVER, 'HTTP_HOST'), false, true);
session_start();

// var_dump($_SESSION);

if(array_get($_COOKIE, 'auth_key')) {

	$user = dbGetRow(sprintf("select * from users where auth_key = '%s'", dbEscape($_COOKIE['auth_key'])));	

	if($user) {
		$_SESSION['user'] = $user;
	}
}

// var_dump($_COOKIE);
// var_dump($_SESSION['user']);
// $content = require(DOCROOT . '/config/database.php');

// var_dump($content);
// die;

// $content = require(TPL_PATH . 'form.php');
// $content = require(HELPER_PATH . 'photoList.php');
// require('./log.txt');
// require(TPL_PATH . 'layout.php');

// echo "<pre>";
// var_dump($_SERVER['REQUEST_URI']);
// die;
// $config = require(DOCROOT . '/config/database.php');
// var_dump(__DIR__, DOCROOT, DIRECTORY_SEPARATOR);

// $url = $_SERVER['REQUEST_URI'];
// $url = explode('?', $url);
// $url = explode('/', $url[0]);
// $url = array_filter($url);
// $url = array_values( $url, fn($it) => boolval($it) );


$uriArr = array_values(array_filter(explode('/', explode('?',$_SERVER['REQUEST_URI'])[0]) , fn($it) => boolval($it))) ;

$uri = explode('/', $_SERVER['REQUEST_URI']);
$action = isset($uri[1]) && $uri[1] ? $uri[1] : 'home';
$currentAction = array_get($uriArr, 0, 'home');

$actionPath = DOCROOT .'engine/actions/'. $currentAction;

// if(!in_array($action, ['home', 'posts'])){
$filePath = DOCROOT .'engine/actions/'. $action .'.php';

if(is_dir($actionPath)) {

	$fileName = array_get($uriArr, 1, $currentAction);
	// DOCROOT .'engine/actions/news/edit'
	$actionPath .= '/' . $fileName;
}

$filePath = $actionPath .'.php';

if(!file_exists($filePath)){
	abort(404);
}

require($filePath);