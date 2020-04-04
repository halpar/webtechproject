<?php 
$username=$_POST[username];
$password=$_POST[password];
console.log("sa");
if($username == 'test' && $password == '1234')
{
    session_start();
    $_SESSION['uname']=$username;
    echo $_SESSION["newsession"];
    header("location:index.php");
    console.log("girdi");
}
else
{
    header("location:sehrim.php");
    console.log("girmedi");
}

?>