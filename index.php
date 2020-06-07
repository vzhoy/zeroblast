<?php 
session_start();
$_SESSION['login'];
if(empty($_SESSION['login'])){
    echo 'Вход запрещён, <a href="login.php"> авторизуйтесь</a>';
}
 else {
    echo "Добро пожаловать ".$_SESSION['login'];
}
?>
<html>
    <head>
        <title>Главная страница</title>
    </head>
    <body>
     <a href="include/logout.php">Выход</a>
         <a href="profile.php">Ваш профиль</a>
        <?php
     
        include 'footer.php';

        ?>
    </body>
</html>




