<?php
class HashMap implements MapInterface, IteratorAggregate
{
    private array $data = [];

    public function put($k, $v): void
    {
        $this->data[$k] = $v;
    }

    public function get($k): mixed
    {
        return $this->data[$k] ?? null;
    }

    public function removeKey($k): bool
    {
        if (isset($this->data[$k])) {
            unset($this->data[$k]);
            return true;
        }
        return false;
    }

    public function containsKey($k): bool
    {
        return isset($this->data[$k]);
    }

    public function keySet(): array
    {
        return array_keys($this->data);
    }

    public function values(): array
    {
        return array_values($this->data);
    }
    
    public function getAll(): array
    {
        return $this->data;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->data);
    }
}