<?php

// strip_tags
// htmlspecialchars
// mysqli_real_escape_string

if (isset($_POST['login'])) {

    $post = [];

    foreach($_POST as $key => $value){
        $post[$key] = htmlspecialchars(strip_tags($value));
    }

    $content = view('forms/login', ['data' => $post]);
    return require(TPL_PATH . 'layout.php');
}

$content = view('forms/login', ['action' => '/login']);
require(TPL_PATH . 'layout.php');