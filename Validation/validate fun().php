<?php

$u = '<script>alert("hello")</script>';
echo htmlspecialchars($u);//won't execute but takes as string
//The trim() function removes whitespace and other predefined characters from both sides of a string.
$z='1    Azaru deen      9';
echo "<br>".trim($z);//remove extra whitespaces ltrim() rtrim() also available

//remove slash

$s = 'wow/hi';
echo '<br>'.stripslashes($s);

//The strip_tags() function strips a string from HTML, XML, and PHP tags.

?>