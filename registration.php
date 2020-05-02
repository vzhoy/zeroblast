    <?php include 'rb.php'; ?>
<html>

    <head></head>
    <title>Последняя любовь</title>
    <body>
    <center><form name="users" action="save_user.php" method="POST">
           <br>Введите ваш логин<input type="text" name="login" size="10">
           <br>Введите ваше имя  <input type="text" name="firstname" size="15">
           <br>Введите вашу фамилию <input type="text" name="lastname" size="15">
           <br>Выберите пол
           <select name="sex" size="2">
               <option value="man">Мужской</option>
               <option value="woman">Женский</option>
           </select>
           <br>Выберите дату рождения<input type="date" name="age" min="1950-01-01 max="2020-12-12">
           <br>Введите пароль   <input type="password" name="password" size="15"> 
           <br>Повторите пароль <input type="password" name="password_again" size="15">
       
           <button type="submit" name="send"> Отправить</button>
        </form> </center>
    </body>
</html>
<?php

?>


