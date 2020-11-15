<?php

$statusList = [
	[
		'id' => '+',
		'name' => 'Сложить'
	],
	[
		'id' => '-',
		'name' => 'Вычесть'
    ],
    [
		'id' => '*',
		'name' => 'Умножить'
    ],
    [
		'id' => '/',
		'name' => 'Разделить'
	]
];

if (isset($_POST)) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		$errors = [];
		$validatesRules = [
			'number1' => 'required',
			'number2' => 'required',
			'step' => 'required'
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
			$content = view('forms/calc', [
				'statusList' => $statusList,
				'errors' => $errors,
                'data' => $post
			]);
			return require(TPL_PATH . 'layout.php');
		
        }
    }

    $post = [];

    foreach($_POST as $key => $value){
        $post[$key] = htmlspecialchars(strip_tags($value));
    }

    switch ($post['step']) {
        case 'Сложить':
            $result = $post['number1'] + $post['number2'];
            break;
        case 'Вычесть':
            $result = $post['number1'] - $post['number2'];
            break;
        case 'Умножить':
            $result = $post['number1'] * $post['number2'];
            break;
        case 'Разделить':
            if ( ($post['number1'] == 0) || ($post['number2'] == 0) ){
                $result = 'Нельзя делить на 0!!!';
            } else {
                $result = $post['number1'] / $post['number2'];
            }
            break;
    }

    $content = view('forms/calc', [
        'data' => $post,
        'statusList' => $statusList,
        'result' => $result
    ]);
    return require(TPL_PATH . 'layout.php');
}

$title = 'Калькулятор';
$content = view('forms/calc', [
    'statusList' => $statusList
]);
require(TPL_PATH . 'layout.php');