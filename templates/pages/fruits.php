<a href="/news/?action=create">Добавить</a>


<div class="photoBox">

  <br>
  <form method="post" enctype="multipart/form-data" action="/fruits">
    <input type="file" name="uploadedFile">
    <hr>
    <button type="submit" name="uploadBtn" value="Upload">Upload</button>
  </form>
  <br>

  <div class="photoList">

  	<?php foreach ($fruits as $item): ?>
		<div class="photoList__item">
			<a href="/fruits/?id=<?= $item['id']; ?>">
				<img src="/img/photoList/<?= $item['url']; ?>" alt="" class="photoList__img" width="200">
			</a>
			<div class="photoList__name"><?= $item['name']; ?></div>
		</div>
	<?php endforeach; ?>

  </div>

</div>
