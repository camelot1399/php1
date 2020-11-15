<?php
$news = isset($news) ? $news : [];

// var_dump($news);
?>


<form method="post" action="" enctype="multipart/form-data">

  <label for="title">Заголовок <i class="required">*</i></label>
  <input type="text" name="title" id="title" value="<?= array_get($news, 'title'); ?>">
  <?php if (isset($errors['title'])): ?>
    <i class="required"><?= $errors['title']; ?></i>
  <?php endif ?>
  <br>

  <label for="content">Контент <i class="required">*</i></label>
  <textarea rows="10" cols="45" name="content" id="content"><?= array_get($news, 'content'); ?></textarea>
  <?php if (isset($errors['content'])): ?>
    <i class="required"><?= $errors['content']; ?></i>
  <?php endif ?>
  <br>

  <label for="status">Статус <i class="required">*</i></label>
  <select name="status" id="status">
    <option value="">Не выбрано</option>
    <?php 
    foreach($statusList as $key => $value): ?>
      <option value="<?= array_get($value, 'id'); ?>" <?= array_get($news, 'status') === array_get($value, 'id') ? 'selected' : ''; ?> >
        <?= array_get($value, 'name'); ?>
      </option>
    <?php endforeach; ?>
  </select>
  <?php if (isset($errors['status'])): ?>
    <i class="required"><?= $errors['status']; ?></i>
  <?php endif ?>
  <br>

  <button type="submit">Сохранить</button>

</form>