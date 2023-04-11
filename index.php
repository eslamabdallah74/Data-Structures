<?php

require_once 'autoload.php';

use Yomi\DataStructures\Stack;

$stack = new Stack();


$popped = null;
try {
    $stack->pop($popped);
} catch (\Throwable $th) {
    echo $th->getMessage();
}

echo "Popped value is: $popped";
