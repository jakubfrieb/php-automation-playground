<?php
declare(strict_types=1);

// create two function and then call them

function hello(): void {
    echo "Hello World";
}

function goodbye() {
    echo "Goodbye World";
}

hello();
goodbye();

// create a function that takes two parameters and returns the sum of the two parameters

function sum(int $a, int $b): int {
    return $a + $b;
}

echo sum(1, 2);
    