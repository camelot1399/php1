<?php

if (array_get($_GET, 'action') === 'create') {

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

$content = view('forms/news', ['statusList' => $statusList]);
return require(TPL_PATH . 'layout.php');

}