<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Последняя любовь</title>
        <style> 
   
   p{
       border: 4px solid indigo;
   font-family: fantasy;
   text-align: center;
    background: antiquewhite;
    border-right: red;
    border-left: red;
        
   }
   h1{
       color: red;
       font-style: oblique;
   }
   header{
       background: antiquewhite;
      position: static;
      border: 4px groove;
     font-size: 24px;
     font-stretch: condensed;
   }
        </style>
    </head>
    <body>
        <header><center>Я верю что мы поможет вам открыть глаза на правду!</center></header>
    <center><h1> Здравствуйте!</h1></center>
    <p> Данный сайт поможет получить информацию о вашей второй половинке, 
        но при этом вся информация не может быть достоверной на 100% так как каждый из нас имеет свои взгляды на мир.</p>
       <div class="form"><form action="include/enter_user.php" method="POST">
          <br>Введите логин <input type="text" name="login" size="10">
           <br>Введите пароль <input type="password" name="password" size="10">
           <br> <input type="submit" name="enter" value="Войти">
           <br> Ещё не зарегистрированы? Тогда <a href="registration.php">Зарегестрируйтесь</a>
       </form>
       </div>
   
  <?php
 include 'footer.php';
 ?>
</body>
</html>
