<?php
session_start();
$_SESSION['login'];
include 'function.php';
if(empty($_SESSION['login'])){
    echo 'Вход запрещён, <a href="login.php"> авторизуйтесь</a>';
}
 else {
 }
?>
<html>
    <head>
        <title>Профиль пользователя</title>
   <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <style>
       
    </style>
    <body>
        <a href="include/logout.php">Выход</a>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        include 'include/database.php';
       $query="SELECT * FROM `users` WHERE `login`='{$_SESSION['login']}'";
       $result= mysqli_query($sql, $query);   
       $rows=mysqli_fetch_assoc($result);   

      ?>
        <div class="forma">
        <?php
              echo 
        "<br>Ваш логин: ".$rows['login'].
        "<br>Ваше имя: ".$rows['first_name'].
        "<br>Ваша фамилия: ".$rows['last_name']. 
        "<br>Ваша дата рождения: ".$rows['data_birth'].
        "<br>Ваша пол: ".$rows['sex'] ;
              $avatar=getAvatar($_SESSION['login']);
              if ($avatar==""){ $avatar="avka.jpg";
              
              echo '<img src="avatars/avka.jpg">';
              }
              else
              {
                  echo '<img src="avatars/$avatar">';
              
                 
              }
              
             
              ?>
            <a href="edit_avatar.php">Изменить аватар</a>
          
       
     
    </body>
</html>
