<?php
$fruits = isset($fruits) ? $fruits : [];

// echo '<pre>';
// var_dump($fruits);
?>

<form method="post" enctype="multipart/form-data"> 

    <label for="productName">Продукт <i class="required">*</i></label>
    <input type="text" name="productName" id="productName" value="<?= array_get($fruits, 'productName'); ?>">
    <?php if (isset($errors['productName'])): ?>
        <i class="required"><?= $errors['productName']; ?></i>
    <?php endif ?>
    <br>
    <br>

    <label for="protein">Белки <i class="required">*</i></label>
    <input type="text" name="protein" id="protein" value="<?= array_get($fruits, 'protein'); ?>">
    <?php if (isset($errors['protein'])): ?>
        <i class="required"><?= $errors['protein']; ?></i>
    <?php endif ?>
    <br>
    <br>

    <label for="fat">Жиры <i class="required">*</i></label>
    <input type="text" name="fat" id="fat" value="<?= array_get($fruits, 'fat'); ?>">
    <?php if (isset($errors['fat'])): ?>
        <i class="required"><?= $errors['fat']; ?></i>
    <?php endif ?>
    <br>
    <br>

    <label for="carb">Углеводы <i class="required">*</i></label>
    <input type="text" name="carb" id="carb" value="<?= array_get($fruits, 'carb'); ?>">
    <?php if (isset($errors['carb'])): ?>
        <i class="required"><?= $errors['carb']; ?></i>
    <?php endif ?>
    <br>
    <br>

    <label for="ccal">Ккал <i class="required">*</i></label>
    <input type="text" name="ccal" id="ccal" value="<?= array_get($fruits, 'ccal'); ?>">
    <?php if (isset($errors['ccal'])): ?>
        <i class="required"><?= $errors['ccal']; ?></i>
    <?php endif ?>

    <br>
    <br>

    <label for="uploadedFile">Фотография продукта</label>
    <br>
    <label for="currentImgFile">Текущая картинка продукта</label>
    <img src="/img/photoList/<?= array_get($fruits, 'img'); ?>" alt="" class="photoList__img" width="200">
    <br>
    <br>
    <input type="text" name="currentImgFile" id="currentImgFile" value="<?= array_get($fruits, 'img'); ?>">
    <input type="file" name="uploadedFile">
    <br>
    <br>
    <button type="submit" name="uploadBtn" value="Upload">Отправить</button>
    <button type="submit"><a href="/fruits/?id=<?= array_get($fruits, 'id'); ?>">Отмена</a></button>

</form>