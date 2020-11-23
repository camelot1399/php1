<button type="button" class="btn btn-outline-primary"><a href="/fruits/?action=create">Добавить</a></button>

<button type="button" class="btn btn-default">
	<a href="/basket">Корзина (<span class="basketCount"><?= count((array)array_get($_SESSION, 'basket')) ?></span>)</a>
</button>
<div class="photoBox">

  <div class="photoList">

	  <?php foreach ($fruits as $item): ?>
		
		
		<div class="photoList__item">
			<a href="/fruits/?id=<?= $item['id']; ?>">
				<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="/img/photoList/<?= $item['img']; ?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?= $item['productName']; ?></h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<br>
					<?php 
					if ((isset($_SESSION['user']['admin'])) && ( (int)$_SESSION['user']['admin'] === 1)): ?>
					<button type="button" class="btn btn-outline-primary"><a href="/fruits/?id=<?= $item['id']; ?>&action=edit">Редактировать</a></button>
					<?php endif;?>
					</a>
					
					<button type="button" data-id="<?= $item['id']; ?>" id="btnItem_<?= $item['id']; ?>" class="btn btn-info jsAddToBasket">Купить</button>
				</div>
			</div>
			
		</div>
	<?php endforeach; ?>

  </div>

</div>
