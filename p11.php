<?php
$a=$_POST["username"];
$b=$_POST["password"];
if($a==$b)
{ include 'p10.html';
}
else
{echo "your username or password is incorrect!"."<br>";}

?>


