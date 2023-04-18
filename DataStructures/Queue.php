<?php

namespace Yomi\DataStructures;

use Yomi\DataStructures\Exceptions\StackUnderflowException;

class Queue
{
    public $front;
    public $back;
    public $queueArray;
    public $arrayLength;
    public const MAX_LENGTH = 100;

    public function __construct()
    {
        $this->front = 0;
        $this->back = self::MAX_LENGTH - 1;
        $this->queueArray = [];
    }

    public function isFull(): bool
    {
        return $this->arrayLength == self::MAX_LENGTH;
    }

    public function isEmpty(): bool
    {
        return $this->arrayLength == 0;
    }

    public function enQueue($element): void
    {
        if ($this->isFull()) {
            throw new StackUnderflowException('Cannot add elements (array is full)');
        } else {
            $this->back = ($this->back + 1) % self::MAX_LENGTH;
            $this->queueArray[$this->back] = $element;
            $this->arrayLength++;
        }
    }

    public function deQueue(): void
    {
        if ($this->isEmpty()) {
            throw new StackUnderflowException('Cannot remove elements (array is empty)');
        } else {
            $this->front = ($this->front + 1) % self::MAX_LENGTH;
            $this->arrayLength--;
        }
    }

    public function getFront(&$front)
    {
        $front = $this->queueArray[$this->front];
    }

    public function getBack(&$back)
    {
        $back = $this->queueArray[$this->back];
    }

    public function print()
    {
        for ($i = $this->front; $i != ($this->back + 1) % self::MAX_LENGTH; $i = ($i + 1) % self::MAX_LENGTH) {
            echo "Queue index number: " . $i . " Value is [" . $this->queueArray[$i] . "]";
            echo "<br >";
        }
    }
}
