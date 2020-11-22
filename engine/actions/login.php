<?php
$title = 'Вход';



if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $post = array_clean($_POST);

	if(!array_get($post, 'login') || !array_get($post, 'password')){
       
		$content = view('forms/logins', [
			'action' => '/login', 
			'errorMsg' => 'Необходимо передать логин и пароль'
		]);

		return require TPL_PATH . 'layout.php';
    }

    $user = dbGetRow(sprintf("select * from users where login = '%s'", dbEscape($post['login'])));
    
    // dd($user);
	if(!$user || !password_verify( dbEscape($post['password']) , $user['password'] )  ){
		$content = view('forms/login', [
			'action' => '/login', 
			'errorMsg' => 'Такой комбинации логин и пароль нет.'
		]);

		return require TPL_PATH . 'layout.php';
	}

	$_SESSION['user'] = $user;
	header('Location: http://' . $_SERVER['HTTP_HOST']. '/cabinet');
}


$content = view('forms/login', [
	'action' => '/login', 
]);

require TPL_PATH . 'layout.php';