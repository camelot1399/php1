<a href="/news/?action=create">Добавить</a>


<div class="photoBox">

  <br>
  <form method="post" enctype="multipart/form-data" action="index.php">
    <input type="file" name="file">
    <hr>
    <button type="submit">Upload</button>
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
