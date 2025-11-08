<?php
class Stack implements CollectionInterface
{
    private SplStack $s;

    public function __construct()
    {
        $this->s = new SplStack();
    }
    
    public function add($item): void
    {
        $this->s->push($item);
    }
    
    public function remove($item): bool
    {
        return false; 
    }

    public function size(): int
    {
        return $this->s->count();
    }

    public function getAll(): array
    {
        $all = [];
        foreach (clone $this->s as $item) {
            $all[] = $item;
        }
        return array_reverse($all);
    }
    
    public function pop(): mixed
    {
        if ($this->s->isEmpty()) {
            return null;
        }
        return $this->s->pop();
    }

    public function peek(): mixed
    {
        if ($this->s->isEmpty()) {
            return null;
        }
        return $this->s->top();
    }
}