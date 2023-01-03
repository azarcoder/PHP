<?php
/*

__construct() , will automatically call this fucntion when you create an object from a class.

*/

class fruit{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_n()
    {
        return $this->name;
    }
}
$a = new fruit('Orange');
echo $a->get_n();

?>