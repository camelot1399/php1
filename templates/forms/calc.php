<?php 
// var_dump($data);
?>

<form method="post"> 
    <h2>Калькулятор</h2>
    <br>
    <label for="number1">Number1 <i class="required">*</i></label>
    <input type="text" name="number1" id="number1" value="<?= array_get($data, 'number1'); ?>">
    <?php if (isset($errors['number1'])): ?>
        <i class="required"><?= $errors['number1']; ?></i>
    <?php endif ?>
    <br>
    <br>
    
    <label for="step">Действие <i class="required">*</i></label>
    <select name="step" id="step">
        <option value="">Не выбрано</option>
        <?php 
        foreach($statusList as $key => $value): ?>
        <option value="<?= array_get($value, 'name'); ?>"  <?= array_get($value, 'name') === array_get($data, 'step') ? 'selected' : ''; ?>>
            <?= array_get($value, 'name'); ?>
        </option>
        <?php endforeach; ?>
    </select>

    <?php if (isset($errors['step'])): ?>
        <i class="required"><?= $errors['step']; ?></i>
    <?php endif ?>

    <br><br>

    <label for="number2">Number2 <i class="required">*</i></label>
    <input type="text" name="number2" id="number2" value="<?= array_get($data, 'number2'); ?>">
    <?php if (isset($errors['number2'])): ?>
        <i class="required"><?= $errors['number2']; ?></i>
    <?php endif ?>
    <br>
    <br>

    <button type="submit" value="submit" name="submit">Посчитать</button>

</form>


<div>Результат:
<?php if (isset($result)) {
    echo $result;
} ?>

</div>