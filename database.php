<?php

       $username= 'root';
       $servername= 'localhost';
       $database='lastlover';
       $password='';
       $connect= mysqli_connect($servername, $username, $password, $database);
  if (mysqli_connect_errno($connect)) { echo 'нельзя';
  
  }
?>


