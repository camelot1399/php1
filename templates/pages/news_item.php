
<h1><?= $news['title'] ?></h1>

<p>
	<?= $news['content']; ?>
</p>
<i><?= date('d.m.Y H:i', strtotime($news['created_at'])); ?></i>


<br>
<br>
<h2>Добавить отзыв</h2>
<form action="" method="POST">
	<label for="user_name">Имя</label>
	<input type="text" value="" id="user_name" name="user_name">
	<?php if (isset($errors['user_name'])): ?>
		<i class="required"><?= $errors['user_name']; ?></i>
	<?php endif ?>
	<br>

	<label for="feedback">Отзыв</label>
	<textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
	<?php if (isset($errors['feedback'])): ?>
		<i class="required"><?= $errors['feedback']; ?></i>
	<?php endif ?>
	<br>
	<button type="submit">Добавить</button>
</form>

<br>
<h3>Список отзывов</h3>

<?php 
foreach($feedback as $key => $value): ?>
<div>
	<div>Имя пользователя: <?= $value['userName']; ?></div>
	<div>Коментарий: <?= $value['content']; ?></div>
</div>
<?php endforeach ?>