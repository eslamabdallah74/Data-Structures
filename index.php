<?php
require_once 'autoload.php';

use Yomi\DataStructures\LinkedList;
use Yomi\DataStructures\Node;


$stack = new LinkedList();
$stack->push('Eslam');
$stack->push('Abdallah');
$stack->push('abss');

$stack->printLinkedListStack($stack);
