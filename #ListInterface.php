<?php
interface ListInterface extends CollectionInterface, IteratorInterface, IteratorAggregate
{
    public function get($index);
    public function set($index, $item);
}
