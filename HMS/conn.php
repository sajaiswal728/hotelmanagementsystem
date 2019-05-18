<?php
@ $db=new mysqli('localhost','root','','HMS');
if(mysqli_connect_errno())
{
 echo'Error: Could not connect to dtatbase';
 exit;
}
?>