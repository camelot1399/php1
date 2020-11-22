<?php

if (array_get($_GET, 'action') === 'create') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$errors = [];
		$validatesRules = [
			'productName' => 'required',
			'protein' => 'required',
			'fat' => 'required',
			'carb' => 'required',
			'ccal' => 'required',
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
			$content = view('forms/fruits', [
				'statusList' => $statusList,
				'errors' => $errors,
				'fruits' => $post
			]);
			return require(TPL_PATH . 'layout.php');
		
		}

		if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
			$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
			$fileName = $_FILES['uploadedFile']['name'];
			$fileSize = $_FILES['uploadedFile']['size'];
			$fileType = $_FILES['uploadedFile']['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
		
			$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
		
			$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
			if (in_array($fileExtension, $allowedfileExtensions)) {
				$uploadFileDir = UPLOAD_IMG_FRUITS_PATH;
				$dest_path = $uploadFileDir . $newFileName;
				
				if(move_uploaded_file($fileTmpPath, $dest_path))
				{
				$message ='ok';
				}
				else
				{
				$message = 'nok';
			}
			}
		}

		$sql_query = "INSERT INTO `goods` (
			`productName`,
			 `img`,
			 `protein`,
			 `fat`,
			 `carb`,
			 `ccal`
			 ) VALUES (
		'{$post['productName']}',
		'{$newFileName}',
		'{$post['protein']}',
		'{$post['fat']}',
		'{$post['carb']}',
		'{$post['ccal']}'
		)";

		$res = mysqli_query($dbConnection, $sql_query);
		if ($res) {
			header('Location: http://' . $_SERVER['HTTP_HOST'] . '/fruits');
		} else {
			var_dump(mysqli_error( ($dbConnection), $sql_query) );
		}

	}

	$title = 'Добавление нового продукта фрукта';
	$content = view('forms/fruits');
	return require(TPL_PATH . 'layout.php');

}