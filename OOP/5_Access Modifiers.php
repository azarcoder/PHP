<?php

/*
3 modifiers:
 public -- the property or method can be accessed from everywhere.(defalut)
 protected -- only within the class and by classes derived from that class
 private -- ONLY accessed within the class

*/

class people{
    public $n;
    protected $a;
    private $g;

    function set_n($n)
    {
        $this->name=$n;
    }
    //private and protected functions
    protected function set_a($a)
    {
        $this->age=$a;
    }
    private function set_g($g)
    {
        $this->gender=$g;
    }
}
$a = new people();
$a->n='Azar';
$a->a=21; //error
$a->g='male'; //error


?>