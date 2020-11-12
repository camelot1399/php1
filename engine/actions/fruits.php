<?php

require(DOCROOT . '/engine/db.php');

$title = 'Фотогалерея из БД';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$item = dbGetRow('select * from fruits where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
	}

	$content = view('pages/fruits_item', $item);
	return require TPL_PATH . 'layout.php';

}

$data = dbGetAll('select * from fruits;');
$content = view('pages/fruits', ['fruits' => $data]);

require(TPL_PATH . 'layout.php');