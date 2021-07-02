<?php

$link = mysqli_connect("localhost", "root", "root", "argenovaproject");

$username = mysqli_real_escape_string($link,$_POST['username']);
$password = mysqli_real_escape_string($link,$_POST['password']);



$result = mysqli_query($link,"select * from users where username='$username' and password='$password'");

$row = mysqli_fetch_row($result);

if($row[1] == $username && $row[2] == $password)
{
    echo "Giriş başarılı. Hoşgeldin ".$row[1];
}
else
{

    echo "Giriş başarısız.";
}

?>