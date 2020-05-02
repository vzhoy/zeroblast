<?php

include 'database.php';
$login=$_POST['login'];
$sql="Select * FROM `usersass` WHERE `login`= '$login'";
$result=$connect->query($sql);
if ($result->num_rows>0);{
 echo 'Пользователь найден';   
}



 ?>


