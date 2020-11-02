<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 2 homeWork</title>
</head>
<body>
    


<!-- 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму; -->

<!-- <?php 

$a = 0;
$b = 1;

if ( ($a >= 0) && ($b >= 0) ) {
    echo 'Числа положительные, $a - $b = ';
    echo $a - $b;
} else if ( ($a < 0) && ($b < 0) ) {
    echo 'Числа отрицательные, $a * $b = ';
    echo $a * $b;
} else {
    echo 'Разные знаки, $a + $b = ';
    echo $a + $b;
}

?> -->


<!-- 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
 -->

<!-- <?php 
$random = rand(0, 15);

switch ($random) {
    case 0:
        echo "random равно 0 <br>";
    case 1:
        echo "random равно 1 <br>";
    case 2:
        echo "random равно 2 <br>";
    case 3:
        echo "random равно 3 <br>";
    case 4:
        echo "random равно 4 <br>";
    case 5:
        echo "random равно 5 <br>";
    case 6:
        echo "random равно 6 <br>";
    case 7:
        echo "random равно 7 <br>";
    case 8:
        echo "random равно 8 <br>";
    case 9:
        echo "random равно 9 <br>";
    case 10:
        echo "random равно 10 <br>";
    case 11:
        echo "random равно 11 <br>";
    case 12:
        echo "random равно 12 <br>";
    case 13:
        echo "random равно 13 <br>";
    case 14:
        echo "random равно 14 <br>";
    case 15:
        echo "random равно 15 <br>";
        break;
    
}

?> -->


<!-- 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->
<!-- <?php 


function summ($a, $b) {
    return $a + $b;
}

function difference($a, $b) {
    return $a - $b;
}

function  multiply($a, $b) {
    return $a * $b;
}

function  division($a, $b) {
    return $a / $b;
}

$go = summ(4,6);
echo $go;
echo '<br>';

$go = difference(4,6);
echo $go;
echo '<br>';

$go = multiply(4,6);
echo $go;
echo '<br>';

$go = division(4,6);
echo $go;

?> -->


<!-- 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->
<!-- <?php 

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '-':
            return $arg1 - $arg2;
        break;
        case '+':
            return $arg1 + $arg2;
        break;
        case '*':
            return $arg1 * $arg2;
        break;
        case '/':
            return $arg1 / $arg2;
        break;
        default: 
            echo 'введены не все параметры';
    }
}

$go = mathOperation(1,2,'+');
echo $go;
?> -->


<!-- 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP. -->
<!-- <?php echo date(Y); ?> -->


<!-- 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->
<!-- <?php 

function func($a, $b)
{
    if($b !== 0) {
        return $a * func($a, $b - 1);
    } 

    return 1;
}

$go = func(2, 3);
echo $go;
?> -->



</body>
</html>
