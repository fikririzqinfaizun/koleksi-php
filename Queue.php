<?php
class Queue implements QueueInterface
{
    private SplQueue $q;

    public function __construct()
    {
        $this->q = new SplQueue();
    }

    public function add($item): void
    {
        $this->q->enqueue(value: $item);
    }
    
    public function remove($item): bool
    {
        $tmp = [];
        $found = false;
        
        while (!$this->q->isEmpty()) {
            $val = $this->q->dequeue();
            if ($val === $item && !$found) {
                $found = true; 
                continue;
            }
            $tmp[] = $val;
        }
        
        foreach ($tmp as $val) {
            $this->q->enqueue(value: $val);
        }
        
        return $found;
    }

    public function size(): int
    {
        return $this->q->count();
    }

    public function getAll(): array
    {
        $all = [];
        foreach ($this->q as $item) {
            $all[] = $item;
        }
        return $all;
    }
    
    public function enqueue($item): void
    {
        $this->q->enqueue(value: $item);
    }

    public function dequeue(): mixed
    {
        if ($this->q->isEmpty()) {
            return null;
        }
        return $this->q->dequeue();
    }

    public function peek(): mixed
    {
        return $this->q->isEmpty() ? null : $this->q->bottom();
    }
}