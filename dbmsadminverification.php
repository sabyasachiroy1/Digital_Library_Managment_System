<?php 
$user_id= $_POST['admindbmsuserid'];
$password =$_POST['adminpassword'];
if ($user_id=='Admin' and $password=="Admin@1234")
{
    echo '<script> 
    alert ("Welcome Admin");
    location.replace("http://localhost/phpmyadmin/index.php?route=/database/sql&db=libraryproject")</script>';
}
else {
    
    echo '<script> 
    alert ("Invalid Credentials");
    location.replace("http://localhost/databaseadminlogin.php")
    </script>';
}
?>