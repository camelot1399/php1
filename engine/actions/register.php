<?php
require(DOCROOT . '/engine/db.php');
$title = "Регистрация";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $validatesRules = [
        'login' => 'required',
        'password' => 'required',
        'password_repeat' => 'required',
        'email' => 'required'
    ];

    foreach($_POST as $key => $value) {
        $post[$key] = htmlspecialchars(strip_tags($value));
    }

    foreach($validatesRules as $key => $value){
        if(!array_get($post, $key)) {
            $errors[$key] = 'Поле обязательно';
        }
    }

    if($errors) {
        $content = view('forms/register.view', [
            'errors' => $errors,
            'post' => $post
        ]);
        return require(TPL_PATH . 'layout.php');
    
    }
    
    // $sql_query = "INSERT INTO `users` (`login`, `password`, `email`) VALUES (
    //         '{$post['login']}',
    //         '{$hash}',
    //         '{$post['email']}'
    //         )";

    // $res = mysqli_query($dbConnection, $sql_query);
    // if ($res) {
    // header('Location: http://' . $_SERVER['HTTP_HOST']. '/login/');
    // } else {
    // var_dump(mysqli_error( ($connection), $sql_query) );
    // }

    if(!$errors){
		
		$res = dbQuery("INSERT INTO `users`(`login`, `password`, `email`) 
			VALUES ('". dbEscape($post['login']) ."', '". password_hash($post['password'], PASSWORD_BCRYPT) ."','". dbEscape($post['email']) ."');");

		if(!$res) {
			var_dump('Error');
			die;
		}

		header('Location: http://' . $_SERVER['HTTP_HOST']. '/login/');
	}

}

$content = view('forms/register.view');
require(TPL_PATH . 'layout.php');