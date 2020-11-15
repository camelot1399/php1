<button>
	<a href="/news/?action=create">Добавить</a>
</button>

<br>
<div>
	<ul class="news__list">
		<?php foreach ($news as $item): ?>
			<li style="margin-bottom: 1rem;">
				<a href="/news/?id=<?= $item['id'] ?>" style="padding: .2rem; border: 1px solid #cecece;"><?= $item['title'] ?></a>
				<a href="/news/?action=edit&id=<?= $item['id'] ?>" style="padding: .2rem; border: 1px solid #cecece;">Редактировать</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

