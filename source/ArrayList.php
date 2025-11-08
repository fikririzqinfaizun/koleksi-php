<?php
class ArrayList implements ListInterface
{
    private array $data = [];
    private int $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }

    public function add($item): void
    {
        $this->data[] = $item;
    }
    
    public function remove($item): bool
    {
        $key = array_search($item, $this->data, true);
        if ($key !== false) {
            array_splice($this->data, $key, 1);
            return true;
        }
        return false;
    }

    public function size(): int
    {
        return count($this->data);
    }

    public function getAll(): array
    {
        return $this->data;
    }
    
    public function get($index): mixed
    {
        return $this->data[$index] ?? null;
    }

    public function set($index, $item): void
    {
        if (isset($this->data[$index])) {
            $this->data[$index] = $item;
        }
    }
    
    public function hasNext(): bool
    {
        return $this->position < count($this->data);
    }
    
    public function next(): mixed
    {
        if ($this->hasNext()) {
            $item = $this->data[$this->position];
            $this->position++;
            return $item;
        }
        return null;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->data);
    }
}