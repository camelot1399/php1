<?php 
$cacheName = 'photos_' . date('Y_m_d'). '.json';
$cachePath = DOCROOT . 'data/cache/';

if(!file_exists($cachePath . $cacheName)){

	echo "api call <br>";
	$data = file_get_contents('https://raw.githubusercontent.com/camelot1399/static/master/photoList.json');

	if(!file_put_contents($cachePath . $cacheName, $data)){
		echo "Не удалось записать в файл";
		die;
	}
}

echo "get from cache <br>";
$photos = file_get_contents($cachePath . $cacheName);
$new2 = json_decode($photos, TRUE);
foreach($new2 as $value) {
    $photoList[] = ['url' => array_values($value)[1], 'name' => array_values($value)[0]];
}



// загружаем файлы через scandir

$dir2 = './img/photoList/';
$dh  = opendir($dir2);
while (false !== ($fileName = readdir($dh))) {
    $ext = substr($fileName, strrpos($fileName, '.') + 1);
    if(in_array($ext, array("jpg","jpeg","png","gif")))
        $files2[] = $fileName;
}

// $content = require(TPL_PATH . 'photoList.php');