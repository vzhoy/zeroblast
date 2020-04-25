<html>
    <head>
        
    </head>
    <title>
        
    </title>
    <body>
       
      </body>
</html>

<?php

$username= 'root';
       $servername= 'localhost';
       $database='lastlover';
       $password='';
       $link= mysqli_connect($servername, $username, $password, $database);
  if (mysqli_connect_errno($link)) { echo 'Хуй тебе пидор';
  
  }
 else {
echo 'Добро пожаловать хуесос';      
}

$login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
$pass =filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);



$result= $link->query("SELECT * FROM `usersass` WHERE `login`=$login AND `Password`=$pass"); //проверка зарегистрированного пользователя;
exit();

$link->close;
header('location:registration.php');{
    
}        
?>


