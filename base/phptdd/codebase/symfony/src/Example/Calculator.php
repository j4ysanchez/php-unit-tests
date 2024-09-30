<?php

namespace App\Example;

class Calculator {

    public function calculateTotal($a, $b, $c) : int {
        return $a + $b + $c;
    }

    public function add(int $a, int $b) : int {
        return $a + $b;
    }
}
?>