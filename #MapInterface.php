<?php
interface MapInterface
{
    public function put($k, $v);
    public function get($k);
    public function removeKey($k);
    public function containsKey($k);
    public function keySet(); 
    public function values();
}