<?php 
$username=$_POST[username];
$password=$_POST[password];

if($username == 'g141210047@sakarya.edu.tr' && $password == '123')
{
    session_start();
    $_SESSION['uname']=$username;
    echo $_SESSION["newsession"];
    header("location:index.php");
}
else
{
    header("location:sehrim.php");
}

?>