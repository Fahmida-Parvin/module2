<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo PHP_EOL; 
}

function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
    echo PHP_EOL; 
}

function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL; 
}
echo "Using For Loop: ";
printEvenNumbersFor(2, 20, 2);

echo "Using While Loop: ";
printEvenNumbersWhile(2, 20, 2);

echo "Using Do-While Loop: ";
printEvenNumbersDoWhile(2, 20, 2);
?>