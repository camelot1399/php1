<?php

require(DOCROOT . '/engine/db.php');

echo 'попал в news.php';

$statusList = [
	[
		'id' => 'DRAFT',
		'name' => 'Черновик'
	],
	[
		'id' => 'ACTIVE',
		'name' => 'Опубликован'
	]
];

if (is_numeric(array_get($_GET, 'id')) && array_get($_GET, 'action') === 'create'){
	$errors = [];
	$validatesRules = [
		'title' => 'required',
		'content' => 'required',
		'status' => 'required'
	];

	foreach($_POST as $key => $value) {
		$post[$key] = dbEscape($value);
	}

	foreach($validatesRules as $key => $value){
		if(!array_get($post, $key)) {
			$errors[$key] = 'Поле обязательно';
		}
	}

	if($errors) {
		$content = view('forms/news', [
			'statusList' => $statusList,
			'errors' => $errors,
			'news' => $post
		]);
		return require(TPL_PATH . 'layout.php');
	
	}

	$sql_query = "INSERT INTO `test8080` (`title`, `content`, `status`) VALUES (
																				'{$post['title']}',
																				'{$post['content']}',
																				'{$post['status']}'
																				)";

	$res = mysqli_query($connection, $sql_query);
	if ($res) {
		header('Location: http://' . $_SERVER['HTTP_HOST']. '/news/');
	} else {
		var_dump(mysqli_error( ($connection), $sql_query) );
	}
}

if (is_numeric(array_get($_GET, 'id')) && array_get($_GET, 'action') === 'edit') {

	echo 'попал в edit';

	if ((!array_get($_SESSION, 'user'))) {
		abort(405);
	}
	
	$item = dbGetRow('select * from test8080 where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$errors = [];
		$validatesRules = [
			'title' => 'required',
			'content' => 'required',
			'status' => 'required'
		];

		foreach($_POST as $key => $value) {
			$post[$key] = dbEscape($value);
		}

		foreach($validatesRules as $key => $value){
			if(!array_get($post, $key)) {
				$errors[$key] = 'Поле обязательно';
			}
		}

		if($errors) {
			$content = view('forms/news', [
				'statusList' => $statusList,
				'errors' => $errors,
				'news' => $post
			]);
			return require(TPL_PATH . 'layout.php');
		
		}

		var_dump($post);

		$sql_query = "UPDATE `test8080` SET
		`title` = '{$post['title']}',
		 `content` = '{$post['content']}',
		 `status` = '{$post['status']}'
		
		WHERE `id` = {$_GET['id']} ";

		$res = mysqli_query($connection, $sql_query);
		if ($res) {
			header('Location: http://' . $_SERVER['HTTP_HOST']. '/news/');
		} else {
			var_dump(mysqli_error( ($connection), $sql_query) );

		}

	}

	$title = 'Изменение новости';
	$content = view('forms/news', [
		'statusList' => $statusList,
		'news' => $item
	]);
	return require(TPL_PATH . 'layout.php');

}

if (is_numeric(array_get($_GET, 'id')) ){

	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$errors = [];
		$validatesRules = [
			'user_name' => 'required',
			'feedback' => 'required'
		];

		foreach($_POST as $key => $value) {
			$post[$key] = dbEscape($value);
		}

		foreach($validatesRules as $key => $value){
			if(!array_get($post, $key)) {
				$errors[$key] = 'Поле обязательно';
			}
		}

		var_dump($errors);

		if($errors) {
			$content = view('forms/news?id=' . (int)$_GET['id'], [
				'errors' => $errors,
				'news' => $post
			]);
			return require(TPL_PATH . 'layout.php');
		
		}

		$sql_query = "INSERT INTO `test8080_feedback` (`idNews`, `content`, `userName`) VALUES (
			'{$_GET['id']}',
			'{$post['feedback']}',
			'{$post['user_name']}'
			)";

		$res = mysqli_query($connection, $sql_query);
		if ($res) {
		header('Location: http://' . $_SERVER['HTTP_HOST']. '/news/?id=' . $_GET['id']);
		} else {
		var_dump(mysqli_error( ($connection), $sql_query) );
		}


	}

	$item = dbGetRow('select * from test8080 where id = '. (int)$_GET['id']  .';');
	$item2 = dbGetAll('select * from test8080_feedback where idNews = '. (int)$_GET['id']  .';');

	$feedback_tmp = [];

	foreach($item2 as $value){
		$feedback_tmp[] = $value;
	}

	if(!$item){
		abort(404);
	}

	$content = view('pages/news_item', [
		'news' => $item,
		'feedback' => $feedback_tmp,
	]);
	return require TPL_PATH . 'layout.php';

}

$title = 'Новости';
$data = dbGetAll('select * from test8080;');
$content = view('pages/news', ['news' => $data]);
require(TPL_PATH . 'layout.php');