<?php
/*
:: -> scope resoution operator
const -> class constants cannot be changed once it is declared
         we can access outside class using :: operator or we can use constant from inside
         the class by using the self keyword
*/

class me{
    const A = "Hi i am A";
    public function bye(){
        echo self::A;
    }
}
echo me::A;
$me = new me();
$me->bye();

?>