<?php

require(DOCROOT . '/engine/db.php');

require(FRUITS . '/photo_upload.php');
require(FRUITS . '/create.php');
require(FRUITS . '/edit.php');

// var_dump($_SESSION);
if(is_numeric(array_get($_GET, 'id'))){

	$item = dbGetRow('select * from goods where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
	}

	$content = view('pages/fruits_item', ['fruit' => $item]);
	return require TPL_PATH . 'layout.php';

}

$title = 'Фотогалерея из БД';
$data = dbGetAll('select * from goods;');
$content = view('pages/fruits', ['fruits' => $data]);

require(TPL_PATH . 'layout.php');