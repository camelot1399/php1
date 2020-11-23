<?php

// $_SESSION['basket'] = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (is_numeric(array_get($_POST, 'id'))) {

        $_SESSION['basket'][] = (int)$_POST['id'];

        if (isAjax()){
            echo json_encode(['count' => count($_SESSION['basket'])]);
            return;
        }

        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/fruits');
        
    }
}