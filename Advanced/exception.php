<?php 

function div($a,$b)
{
    if($b==0)
    {
        throw new Exception("can't divide by zero");
    }
    return $a/$b;
}
try
{
    echo div(2,0);
}
catch(Exception $e)
{
    echo 'unable to divide'.'<br>';
    echo $e->getMessage().'<br>';//print exception thrown message
    echo $e->getFile().'<br>';//file name with directory
    echo $e->getLine().'<br>';//return line number
}
finally
{
    echo "process complete!";
}
?>