<?php

$id=$_GET['id'];

$connection=mysqli_connect('localhost','root','','Person');
$query="DELETE FROM `Person_details` where Id=$id;";
$row=mysqli_query($connection,$query);

if($row>0)
    return header('Location:./index.php');
else
    echo "Error in delete."

?>