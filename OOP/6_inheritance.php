<?php

/*

inheritance - class derives from another class

The child class will inherit all the public and protected properties and methods
from the parent class. In additon, it can have its own properties and methods.

extend keyword used for inherit.
*/

class person{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function intro(){
        echo "I am {$this->name} and i am {$this->age} old";
    }
    protected function me()
    {
        echo "it's protected";
    }
}
class group extends person{
    public function summa()
    {
        echo "hi i am summa function!";
        $this->me();//no error
    }
}

$x=new group("Azar",21);
$x->intro();
echo "<br>";
$x->summa();
// $x->me();//error because it's protected

?>