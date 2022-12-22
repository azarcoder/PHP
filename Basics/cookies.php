<?php

/*-----cookies-----*/
/*
cookies are mechanism for storing data in the remote
browsers and thus tracking or identifying return users. You
can set specific data to be stored in the browser, and
then retrieve it when the user visits the site again.
*/

//set cookie
setcookie('name','azar',time()+86400);//1 day timing
if(isset($_COOKIE['name']))
{
    echo $_COOKIE['name'];
}

//remove
setcookie('name','',time()-86400)
?>
