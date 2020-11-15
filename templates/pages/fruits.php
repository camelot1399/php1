<button><a href="/fruits/?action=create">Добавить</a></button>


<div class="photoBox">

  <div class="photoList">

  	<?php foreach ($fruits as $item): ?>
		<div class="photoList__item">
			<a href="/fruits/?id=<?= $item['id']; ?>">
				<img src="/img/photoList/<?= $item['img']; ?>" alt="" class="photoList__img" width="200">
			</a>
			<div class="photoList__name"><?= $item['productName']; ?></div>
		</div>
	<?php endforeach; ?>

  </div>

</div>
