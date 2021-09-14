<?php

class SimpleDeque
{
    private $data = [];
    private $start = 0;
    private $end = 0;
    private $size = 0;

    /**
     * Checks if the deque is empty
     * @return bool true - if empty, false - if not empty
     */
    public function isEmpty(): bool
    {
        return $this->size == 0;
    }

    /**
     * Peeks at the front of the deque, returns the first element or null if the deque is empty
     * Doesn't affect the deque
     * @return mixed
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->data[$this->start];
    }

    /**
     * Peeks at the end of the deque, returns the last element or null if the deque is empty
     * Doesn't affect the deque
     * @return mixed
     */
    public function peekLast()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->data[$this->end];
    }

    /**
     * Adds an element to the end of the deque
     * @param mixed $val value to add
     * @return void
     */
    public function add($val)
    {
        if (!$this->isEmpty()) {
            $this->end++;
        }
        $this->data[$this->end] = $val;
        $this->size++;
    }

    /**
     * Shifts an element off the beginning of the deque and discards it.
     * @return bool true - if element was shifted, false - if deque was empty
     */
    public function shift()
    {
        if ($this->isEmpty()) {
            return false;
        }
        unset($this->data[$this->start]);
        $this->start++;
        if ($this->end < $this->start) {
            $this->end = $this->start;
        }
        $this->size--;
        return true;
    }

    /**
     * Pops an element off the end of the deque and discards it.
     * @return bool true - if element was poped, false - if deque was empty
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            return false;
        }
        unset($this->data[$this->end]);
        $this->end--;
        if ($this->end < $this->start) {
            $this->end = $this->start;
        }
        $this->size--;
        return true;
    }
}
