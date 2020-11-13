<?php

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
	echo 'загружаем файл';
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

require(DOCROOT . '/engine/db.php');

$title = 'Фотогалерея из БД';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$item = dbGetRow('select * from fruits where id = '. (int)$_GET['id']  .';');

	if(!$item){
		abort(404);
	}

	$content = view('pages/fruits_item', ['fruit' => $item]);
	return require TPL_PATH . 'layout.php';

}

$data = dbGetAll('select * from fruits;');
$content = view('pages/fruits', ['fruits' => $data]);

require(TPL_PATH . 'layout.php');