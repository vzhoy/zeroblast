<html>
    <head>
        
    </head>
    <title>
        
    </title>
    <body>

         
                <form name="reg" action="users.php" method="POST">
            
                    Ваш логин
            <p><input type="text" size="10"  name="login"> 
            <br>
                Ваше Имя
            <p><input type="text" size="10" name="firstname">
                <br>
                Ваша фамилия
            <p> <input type="text" size="10"  name="lastname">
                <br>
               
            
                <label for="birthday">Укажите дату рождения:</label>
    <input type="date" id="birthday" name="datebi" min="1901-01-01" max="2022-04-30">
           
                Введите пароль <p> <input type="text" size="10"  name="pass">
         
                <input name="send" type="submit" value="Зарегистрироваться">
               
                </form>
        <form name="reg" action="enter.php" method="POST">
            Ваш логин
            <p><input type="text" size="10"  name="login"> </p><br>
      Введите пароль <p> <input type="text" size="10"  name="pass"></p> <br>
      <input type="submit" value="Войти" name="send" />
          </form>      
        <?php  

        ?>
            
    
        </body>
    
</html>


