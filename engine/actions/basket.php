<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    var_dump($_POST);

    $_SESSION['basket'][] = (int)$_POST['id'];

        echo json_encode(['count' => count($_SESSION['basket'])]);

    // if(is_numeric(array_get($_POST, 'id'))) {
    //     $_SESSION['basket'][] = (int)$_POST['id'];

    //     echo json_encode(['count' => count($_SESSION['basket'])]);
    // }
    
}




// require(DOCROOT . '/engine/db.php');
// if($_SERVER['REQUEST_METHOD'] === 'POST'){

    
//     $post = [
//         "id" => (int)$_POST['id']
//     ];
    
//     require(DOCROOT . '/engine/db.php');
//     $sql_query = "INSERT INTO orders (orders_id) VALUES ('{$post['id']}')";
    
//     $res = mysqli_query($dbConnection, $sql_query);
//     if ($res) {
//     // header('Location: http://' . $_SERVER['HTTP_HOST']. '/news/');
//     echo 'ok';
//     } else {
//     var_dump(mysqli_error( ($dbConnection), $sql_query) );
//     }
// }

// var_dump($_GET);
// foreach($_GET as $key => $value) {
//     $post[$key] = dbEscape($value);
// }

// $post = [
//     "id" => (int)$_GET['id']
// ];

// var_dump($post);

// $sql_query = "INSERT INTO orders (orders_id) VALUES ('{$post['id']}')";

// $res = mysqli_query($dbConnection, $sql_query);
// if ($res) {
// header('Location: http://' . $_SERVER['HTTP_HOST']. '/fruits');
// } else {
// var_dump(mysqli_error( ($dbConnection), $sql_query) );
// }
