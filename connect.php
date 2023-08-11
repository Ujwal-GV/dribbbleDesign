<?php
$conn=new mysqli("localhost","root","","dribbble");

if($conn)
{
   //echo "ok"; 
}
else
{
    echo "Connection failed!!".mysqli_connect_error();
}

?> 