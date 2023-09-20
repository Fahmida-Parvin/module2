<?php
function printFibonacci($count) {
    $a = 0;
    $b = 1;

    echo "First $count Fibonacci numbers: ";

    for ($i = 1; $i <= $count; $i++) {
        echo $a . " ";

        // Calculate next Fibonacci number
        $next = $a + $b;

        // Update $a and $b
        $a = $b;
        $b = $next;
    }
}
printFibonacci(15);
?>