<?php

class fruit{
    //properties
    public $name;
    public $color;

    //methods
    function set_n($name)
    {
        $this->name = $name;
    }
    function get_n()
    {
        return $this->name;
    }
    function set_c($color)
    {
        $this->color=$color;
    }
    function get_c()
    {
        return $this->color;
    }
}
    //new keyword used to create objects
    $apple = new fruit();
    $apple->set_n('Apple');
    echo $apple->get_n();

    $banana = new fruit();
    $banana->set_n('Banana');
    $banana->set_c('Yellow');
    echo '<br>'.$banana->get_n().'<br>'.$banana->get_c();

    //instanceof
    var_dump($apple instanceof fruit);//return true 
?>