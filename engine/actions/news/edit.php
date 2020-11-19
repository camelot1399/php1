<?php

if (is_numeric(array_get($_GET, 'id')) && array_get($_GET, 'action') === 'edit') {
	$item = dbGetRow('select * from test8080 where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
	}

	// var_dump($_POST);
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