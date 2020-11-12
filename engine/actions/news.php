<?php

require(DOCROOT . '/engine/db.php');

$title = 'Новости';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$item = dbGetRow('select * from test8080 where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
    }

	$content = view('pages/news_item', $item);

	return require TPL_PATH . 'layout.php';

} else {
    $data = dbGetAll('select * from test8080;');
    $content = view('pages/news', ['news' => $data]);
}

require(TPL_PATH . 'layout.php');