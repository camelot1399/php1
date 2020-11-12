<h1><?= $title ?></h1>

<div class="photoList">
    <div class="photoList__item">
        <img src="/img/photoList/<?= $url; ?>" alt="" class="photoList__img" width="200">
        <div class="photoList__name"><?= $name; ?></div>
    </div>
</div>
<i><?= date('d.m.Y H:i', strtotime($created_at)); ?></i>