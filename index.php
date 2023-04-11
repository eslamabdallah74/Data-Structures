<?php

// we want to have four things to get a stack data Structure 
// 1- the top that will be -1 and start to be 0 as an index
// 2- the push function that will add the number to the stack
// 3- the pop function that will take the last number from the stack
// 4- getTop will return the top
// 5- print the stack list to start with the last added element

class Stack
{
    private $top;
    private $stack;

    const MAX_STACK_ELEMENTS = 100;

    public function __construct()
    {
        $this->top   = -1;
        $this->stack = [];
    }

    private function stackHasSpace(): bool
    {
        if (count($this->stack) < self::MAX_STACK_ELEMENTS) {
            return true;
        }
        return false;
    }

    private function isEmpty(): bool
    {
        if ($this->top < 0) {
            echo "Stack is empty!";
            return true;
        }
        return false;
    }

    public function push($element): void
    {
        if ($this->stackHasSpace()) {
            $this->top++;
            $this->stack[$this->top] = $element;
        }
    }

    public function pop(&$popped = null)
    {
        if ($this->isEmpty()) {
            return false;
        } else {
            $popped = $this->stack[$this->top];
            $this->top--;
        }
    }

    public function getTop()
    {
        if ($this->isEmpty()) {
            return false;
        } else {
            echo "Top is: [" . $this->stack[$this->top] . "]";
            echo "<br />";
        }
    }

    public function print()
    {
        for ($i = $this->top; $i >= 0; $i--) {
            echo "Stack index number: ". $i ." Value is [". $this->stack[$i]."]";
            echo "<br />";
        }
    }
}

$stack = new Stack();
$stack->push(4);
$stack->push(44);
$stack->push(444);
$stack->getTop();
$stack->print();
