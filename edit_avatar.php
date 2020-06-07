<?php
session_start();
include'function.php';
include 'include/database.php';
if (isset($_POST['editavatar'])){
    $avatar=$_FILES['avatar'];
    if(isSecurity($avatar)) loadAvatar($avatar, $_SESSION['login']);
    else echo 'Ошибка загрузки автарки';

}
    
?>
<html>
    <head>
        <title>Редактирование аватарки</title>
    </head>
    <link href="CSS/style.css" rel="stylesheet" type="text/css"/>
    <body>
       <div class="forma"><form action="edit_avatar.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="avatar"/>
            <input type="submit" name="editavatar" value="Изменить"/>
        </form>
           <a href="profile.php"> Вернуться</a>
       </div>
    </body>
</html>

