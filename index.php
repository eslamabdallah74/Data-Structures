<?php
require_once 'autoload.php';

use Yomi\DataStructures\LinkedList;
use Yomi\DataStructures\Queue;


$queue = new Queue();
$queue->enQueue(4);
$queue->enQueue(44);
$queue->enQueue(444);
$queue->enQueue(15);
$queue->print();
