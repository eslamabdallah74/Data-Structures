<?php

require_once 'autoload.php';

use Yomi\DataStructures\Stack;

$stack = new Stack();


$popped = null;
$stack->pop($popped);


echo "Popped value is: $popped";
