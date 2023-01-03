<?php
/*

__destruct() , will automatically call this fucntion at end of the script
*/

class fruit{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "This fruit name is {$this->name}";
    }
}
$a = new fruit('Orange');

?>