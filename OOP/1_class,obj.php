<?php

/*
$this keyword referred to this object, it's only avilable inside methods


*/

class fruit{
    //properties
    public $name;
    public $color;

    //methods
    function set_n($name)
    {
        $this->name = $name;
    }
    function get_n($name)
    {
        return $this->name;
    }
    //In a class, variables are called properties and fucntions are called methods!
}

?>
