<?php
include 'rb.php';
include 'database.php';
$login=$_POST['login'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];

if (empty(($_POST['login']))) exit("Введите логин"); 
if (empty(($_POST['firstname']))) exit("Введите Имя");
if (empty(($_POST['lastname']))) exit("Введите Фамилию");
if (empty(($_POST['age']))) exit("Выберите дату рождения");
if (empty(($_POST['password']))) exit("Введите пароль");
if (empty(($_POST['password_again']))) exit("Повторите пароль");
if ($_POST['sex']== "man");{$sex='Мужской';}
if ($_POST['sex']== "woman");{$sex='Женский';}

if (isset($_POST['login']) && trim($_POST['login']) != '') { 
    
}
if (isset($_POST['firstname']) && trim($_POST['firstname']) != '') {
    
} 
if (isset($_POST['lastname']) && trim($_POST['lastname']) != '') {
    
} 

if (isset($_POST['password']) && trim($_POST['password']) != '') {
    
} 
if (isset($_POST['password_again']) && trim($_POST['password_again']) != '') {
    
} 

if ($password != $password_again){    echo 'Повторный пароль неверен';
    exit();
} 


$connect->query("INSERT INTO `usersass` (`login`,`firstname`,`lastname`,`sex`,`age`,`password`,`password_again`)VALUES ('$login','$firstname','$lastname','$sex','$age','$password','$password_again')"); 
print_r($connect);

$connect->close();
?>

