<?php
interface CollectionInterface
{
    public function add($item);
    public function remove($item);
    public function size();
    public function getAll();
}
