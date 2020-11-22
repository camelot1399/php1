<h1><?= $title ?></h1>
<div class="photoList">
    <div class="photoList__item">
        <img src="/img/photoList/<?= $fruit['img']; ?>" alt="" class="photoList__img" width="200">
        <div>
           

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Название товара:</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $fruit['productName']; ?>" disabled>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Белок:</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $fruit['protein']; ?>" disabled>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Жиры:</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $fruit['fat']; ?>" disabled>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Углеводы:</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $fruit['carb']; ?>" disabled>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Калории на 100 гр:</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?= $fruit['ccal']; ?>" disabled>
            </div>
            
           
            
           
            <div class="photoList__name">Дата добавления товара: <?= date('d.m.Y H:i', strtotime($fruit['created_at'])); ?></div>
        </div>
    </div>
</div>

<br>
<br>

<button type="button" class="btn btn-outline-primary">
    <a href="/fruits/?id=<?= $fruit['id']; ?>&action=edit">Редактировать</a>
</button>