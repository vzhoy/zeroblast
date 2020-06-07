<?php

function getAvatar($login){
    include 'include/database.php'; 
    $sqli="SELECT `avatar` FROM `users` WHERE `login`='$login'";
    $query= mysqli_query($sql, $sqli);
    $row= mysqli_fetch_assoc($query);
    return $row['avatar'];
}
function isSecurity($avatar){
    $name=$avatar['name'];
    $type=$avatar['type'];
    $size=$avatar['size'];
    $gone= array(".php","phtml",".php3",".php4");
    foreach ($gone as $item){
        if(preg_match("/$item\$/i",$name))return false;
    }
if (($type !="image/gif")&&($type !="image/jpg") && ($type !="image/png") && ($type !="image/jpeg")) return false;
    
    if($size>2*1024*1024) return false;
    return true;
}
    
function loadAvatar($avatar, $login){
    $type=$avatar['type'];
    $directory="avatars/";
    $name= md5(microtime()).".".substr($type, strlen("image/"));
    $uploadfile=$directory.$name;
    if(move_uploaded_file($avatar['tmp_name'],$uploadfile )){
        setAvatar($login,$name);
        return true;
    }
else        return false;
    }
 function setAvatar($login,$name){
        include 'include/database.php';
        $sqli="UPDATE `users` SET `avatar`='$name' WHERE `login`='$login'";
        $query= mysqli_query($sql, $sqli);
    }
?>
