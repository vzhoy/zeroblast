<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <div class="forma"><form action="include/registration_user.php" method="POST" enctype="multipart/form-data">
                 <br>Введите ваш логин <input type="text" name="login" size="10">
                 <br>Введите ваше имя <input type="text" name="firstname" size="10">
                 <br>Введите вашe фамилию <input type="text" name="lastname" size="10">
                 <br>Выберите ваш пол Мужской <input type="checkbox" name="sex" value="1">
                     Женский <input type="checkbox" name="sex" value="2">
           <br>Введите ваш пароль <input type="password" name="password" size="10">
           <br> Выберите дату рождения <input type="date" name="date">
           <br> Загрузите аватар <input type="file" name="image">
           <br> <input type="submit" name="enter" value="Отправить">
        <br> Уже зарегистрированы? Тогда <a href="login.php">Авторизуйтесь</a>
            </form>
       </div>
   <?php include 'footer.php' ?>
   
    
    </body>
</html>
<?php

?>
