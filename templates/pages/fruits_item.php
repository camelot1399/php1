<h1><?= $title ?></h1>
<div class="photoList">
    <div class="photoList__item">
        <img src="/img/photoList/<?= $fruit['img']; ?>" alt="" class="photoList__img" width="200">
        <div>
            <div class="photoList__name">Название товара: <?= $fruit['productName']; ?></div>
            <div class="photoList__name">Белок: <?= $fruit['protein']; ?></div>
            <div class="photoList__name">Жиры: <?= $fruit['fat']; ?></div>
            <div class="photoList__name">Углеводы: <?= $fruit['carb']; ?></div>
            <div class="photoList__name">Калории на 100 гр: <?= $fruit['ccal']; ?></div>
            <div class="photoList__name">Дата добавления товара: <?= date('d.m.Y H:i', strtotime($fruit['created_at'])); ?></div>
        </div>
    </div>
</div>

<br>
<br>
<button><a href="/fruits/?id=<?= $fruit['id']; ?>&action=edit">Редактировать</a></button>