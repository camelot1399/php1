<!-- 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число. -->

<?php 
$n = 0;

do {
    if ($n == 0) {
        echo $n . ' - ноль';
    } else if( ($n % 2) === 0 ) {
        echo $n . ' - четное число';
    } else {
        echo $n . ' - не четное число';
    }
    echo '<br>';
    $n++;
} while ($n <= 10)

?>