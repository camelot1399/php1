<?php

if(!function_exists('createPhotoList')){

	function createPhotoList(){
		$dir3 = './img/photoList/';
        $dh  = opendir($dir3);
        while (false !== ($fileName = readdir($dh))) {
            $ext = substr($fileName, strrpos($fileName, '.') + 1);
            if(in_array($ext, array("jpg","jpeg","png","gif")))
                $files3[] = $fileName;
        }

        ?>
        <div class="photoBox">

            <br>
            <form method="post" enctype="multipart/form-data" action="index.php">
            <input type="file" name="file">
            <hr>
            <button type="submit">Upload</button>
            </form>
            <br>

            <h2>Фотогаллерея 3</h2>
            <div>Функцию photoList() + scandir</div>
            <div class="photoList">
            
            <?php 
            foreach($files3 as $key => $value): ?>
            <div class="photoList__item">
                <a href="/img/photoList/<?= $value; ?>" target="_blank">
                <img src="/img/photoList/<?= $value; ?>" alt="" class="photoList__img" width="200">
                </a>
                <div class="photoList__name"><?= $value; ?></div>
            </div>
            <?php endforeach ?>   
            </div>

        </div>
        <?php

	}

}

if(!function_exists('view')){

	/**
	* Рендер шаблона в строку
	* @param string $path - путь к шаблону в папке TPL_PATH без расширения файла
	* @param array $data - данные для шаблона (ключ - имя переменной)
	* @return string - строка вывода
	* @example view('forms/login', ['action' => '/login'])
	*/
	function view(string $path, array $data = []) : string {

		// Включение буферизации вывода
		ob_start();

		// Импортирует переменные из массива в текущую таблицу символов
		extract($data); 

		require TPL_PATH . $path . '.php';

		// Возвращает содержимое буфера вывода
		$result = ob_get_contents();

		// Очистить (стереть) буфер вывода и отключить буферизацию вывода
		ob_end_clean();



		return $result;
	}
}

if(!function_exists('writeLog')){

	/**
	* Запись в лог ошибок
	* @param string $message - логируемое сообщение
	* @param string $fileName - имя лог файла (опционально)
	* @return bool - статус записи
	* @example writeLog('Ахтунг! Все пропало!')
	*/
	function writeLog(string $message, string $fileName = 'errors') : bool {
		$filename = DOCROOT . '/data/logs/' . $fileName .  date('_Y_m_d') . '.log';
		$handle = fopen($filename, 'a');
		$log = $message . PHP_EOL;

		if(!fwrite($handle, $log)){
			return false;
		}

		return true;
	}

}

if(!function_exists('abort')) {

	function abort(int $code) {
		http_response_code($code);
		require(TPL_PATH . $code. '.php');
		exit;
	}
}

if(!function_exists('array_get')){

	function array_get(array $array, string $key, $default = null){
		return isset($array[$key]) ? $array[$key] : $default;
	}

}

if(!function_exists('array_clean')) {

	/**
	 * Clean array (htmlspecialchars & strip_tags)
	 * @param array $arr
	 * @return array
	 **/
	function array_clean(array $arr):array {

		return array_map(function($it){

			if(is_array($it)){
				return array_clean($it);
			}

			return is_string($it) ?  strip_tags(htmlspecialchars($it)) : $it;
		}, $arr);
	}

}

if(!function_exists('dd')) {

	function dd(... $args){
		var_dump(...$args);
		die;
	}

}