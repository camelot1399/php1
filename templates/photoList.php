<div class="photoBox">

  <br>
  <form method="post" enctype="multipart/form-data" action="index.php">
    <input type="file" name="file">
    <hr>
    <button type="submit">Upload</button>
  </form>
  <br>

  <h2>Фотогаллерея 1</h2>
  <div>Забираем фотки из внешнего json</div>
  <div class="photoList">
    <?php 

    foreach($photoList as $v): ?>
      <div class="photoList__item">
        <a href="<?= $v['url']; ?>" target="_blank">
          <img src="<?= $v['url']; ?>" alt="<?= $v['name']; ?>" class="photoList__img">
        </a>
        <div class="photoList__name"><?= $v['name']; ?></div>
      </div>
    <?php endforeach ?>
   
  </div>


</div>


<div class="photoBox">

  <br>
  <form method="post" enctype="multipart/form-data" action="index.php">
    <input type="file" name="file">
    <hr>
    <button type="submit">Upload</button>
  </form>
  <br>

  <h2>Фотогаллерея 2</h2>
  <div>Забираем фотки c помощью scandir</div>
  <div class="photoList">
    
    <?php 
    foreach($files2 as $key => $value): ?>
    <div class="photoList__item">
      <a href="/img/photoList/<?= $value; ?>" target="_blank">
        <img src="/img/photoList/<?= $value; ?>" alt="" class="photoList__img" width="200">
      </a>
      <div class="photoList__name"><?= $value; ?></div>
    </div>
    <?php endforeach ?>   
  </div>


</div>


<?php createPhotoList(); ?>