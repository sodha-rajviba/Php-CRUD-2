<?php

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];

$connection=mysqli_connect('localhost','root','','Person');
$query="UPDATE `Person_details` SET `Name`='$name',`Address`='$address',`Gender`='$gender',`Email`='$email',`Mobileno`='$mobileno' WHERE `Id`='$id';";
$row=mysqli_query($connection,$query);

if ($row > 0)
    return header('Location:./index.php');
else
    echo "Failed to update data";


?>