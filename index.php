<?php

require_once 'autoload.php';

use Yomi\DataStructures\Stack;

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

$stack->print();

$popped = null;
$stack->pop($popped);

echo "Popped value is: $popped";
