<?php
$fruits = isset($fruits) ? $fruits : [];

$product_params = [
    ["title" => "Название товара", "name" => "productName", "id" => "productName"],
    ["title" => "Белки", "name" => "protein", "id" => "protein"],
    ["title" => "Жиры", "name" => "fat", "id" => "fat"],
    ["title" => "Углеводы", "name" => "carb", "id" => "carb"],
    ["title" => "Ккал", "name" => "ccal", "id" => "ccal"],
];
?>
<form method="post" enctype="multipart/form-data"> 


    <?php foreach($product_params as $item): ?>
        <div class="input-group mb-3">

        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><?= $item['title'] ?>: <i class="required">*</i></span>
        </div>
        <input 
        type="text" 
        class="form-control" 
        placeholder="<?= $item['title'] ?>" 
        aria-label="<?= $item['title'] ?>" 
        aria-describedby="basic-addon1" 
        name="<?= $item['name'] ?>" 
        id="<?= $item['name'] ?>" 
        value="<?= array_get($fruits, $item['name']); ?>"
        >

        <?php if (isset($errors[$item['name']])): ?>
            <i class="required"><?= $errors[$item['name']]; ?></i>
        <?php endif ?>

        </div>
    <?php endforeach; ?>

    <label for="uploadedFile">Фотография продукта</label>
    <br>
    <label for="currentImgFile">Текущая картинка продукта</label>
    <img src="/img/photoList/<?= array_get($fruits, 'img'); ?>" alt="" class="photoList__img" width="200">
    <br>
    <br>
    <label for="currentImgFile">Текущий файл</label>
    <input type="text" name="currentImgFile" id="currentImgFile" value="<?= array_get($fruits, 'img'); ?>">
    <br>
    <input type="file" name="uploadedFile" id="uploadedFile">
    <br>
    <br>
    <button type="submit" class="btn btn-outline-primary" name="uploadBtn" value="Upload">Отправить</button>
    <button type="submit"class="btn btn-outline-danger" ><a href="/fruits/?id=<?= array_get($fruits, 'id'); ?>">Отмена</a></button>

</form>

