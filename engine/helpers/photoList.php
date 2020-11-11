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