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
    final public function me(){
        echo "I am not inheritable hehe";
    }
}
class group extends person{
    public $w;
    function __construct($name,$age,$w)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $w;
    }
    public function intro(){
        echo "I am {$this->name} and i am {$this->age} old & {$this->weight} kgs";
    }
    public function me(){
        echo "I am {$this->name}";//error because final keyword used
    }
}

$x=new group("Azar",21,70);
$x->intro();
$x->me();
//final keyword can be used to prevent class inheritance or to prevent method overriding.
?>