<?php
$username= 'root';
       $servername= 'localhost';
       $database='lastlover';
       $password='';
       $link= mysqli_connect($servername, $username, $password, $database);
  if (mysqli_connect_errno($link)) { echo 'нельзя';
  
  }
 else {
echo 'Добро пожаловать ';      
}
echo $link->error;

$login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
$firstname = filter_var(trim($_POST['firstname']),
        FILTER_SANITIZE_STRING);
$lastname =filter_var(trim($_POST['lastname']),
        FILTER_SANITIZE_STRING);
$datebirt= ($_POST['datebi']);
$pass =filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);



if (mb_strlen($login)<5 ||(mb_strlen($login))>14){
    echo 'слишком длинный/короткий логин логин';
    exit;
}
if (mb_strlen($firstname)<5 ||(mb_strlen($firstname))>14){
    echo 'слишком длинное/короткое имя';
    exit;
}
if (mb_strlen($pass)<5 ||(mb_strlen($pass))>14){
    echo 'слишком длинный/короткий пароль';
    exit;
}
if (mb_strlen($lastname)<5 ||(mb_strlen($lastname))>14){
    echo 'слишком длинная/короткая фамилия';
    exit;
}
    $link-> query ("INSERT INTO `usersass` (`login`, `firstname`, `lastname`, `sex`, `birthday`, `Password`) 
        VALUES('$login' ,'$firstname', '$lastname',  '$sex', '$datebirt', '$pass' )");
$link -> close();

header('location:registration.php');{
    
}


?>


