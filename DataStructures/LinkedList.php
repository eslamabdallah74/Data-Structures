<?php

namespace Yomi\DataStructures;

use Yomi\DataStructures\Exceptions\StackUnderflowException;

class Node
{
    public $value;
    public $next;
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function push($value)
    {
        $newNode        = new Node($value);
        $newNode->next  = $this->head;
        $this->head     = $newNode;
    }

    public function pop()
    {
        if ($this->head === null) {
            throw new StackUnderflowException('Stack is empty, Cannot pop from empty stack!');
        }
        $value = $this->head->value;
        $this->head = $this->head->next;
        return $value;
    }

    function printLinkedListStack($stack)
    {
        $currentNode = $stack->head;
        while ($currentNode !== null) {
            echo "Stack is: [" .  $currentNode->value  . "] <br />";
            $currentNode = $currentNode->next;
        }
    }

    public function isEmpty()
    {
        return $this->head === null;
    }

    public function isExpressionWellFormed($expression)
    {
        $stack = new LinkedList();
        for ($i = 0; $i < strlen($expression); $i++) {
            $char = $expression[$i];
            if ($char === "(" || $char === "[" || $char === "{") {
                $stack->push($char);
            } elseif ($char === ")" || $char === "]" || $char === "}") {
                if ($stack->isEmpty()) {
                    return false;
                }
                $lastBracket  = $stack->pop();
                if ($char === ")" && $lastBracket !== "(") {
                    return false;
                } elseif ($char === "]" && $lastBracket !== "[") {
                    return false;
                } elseif ($char === "}" && $lastBracket !== "{") {
                    return false;
                }
            }
        }
        return $stack->isEmpty();
    }
}
