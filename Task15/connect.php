<head>
    <link rel='stylesheet' href='styleTask.css'>
</head>
<?php

$link = mysqli_connect("localhost", "root", "root", "argenovaproject");

$username = mysqli_real_escape_string($link,$_POST['username']);
$password = mysqli_real_escape_string($link,$_POST['password']);



$result = mysqli_query($link,"select * from users where username='$username' and password='$password'");

$row = mysqli_fetch_row($result);

if($row[1] == $username && $row[2] == $password)
{

    echo "
    <html>
    <head>
    <link rel='stylesheet' href='styleTask.css'>
    </head>
    <body>
     <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
  <div class='headerStyle'>
  <a href='home.php'><img src='logo-dark.png'  width='200'  /></a>
  </div>

    <ul>
        <li>
            <a href='home.php' class='activate'>Ana Sayfa</a>
            <div class='dropdown-content'>
                <a href='#'>Multipages</a>
                <a href='#'>Onepages</a>
            </div>
        </li>
        <li><a href='about.php'>Hakkında</a></li>
        <li>
            <a href='services.php'>Servisler</a>
            <div class='dropdown-content'>
                <a href='#'>Software Development</a>
                <a href='#'>Web Development</a>
                <a href='#'>Analytic Solutions</a>
                <a href='#'>Cloud and DevOps</a>
                <a href='#'>Project Design</a>
                <a href='#'>Data Center</a>
            </div>
        </li>
        <li>
            <a href='pages.php'>Sayfalar</a>
            <div class='dropdown-content'>
                <a href='services.php'>Services</a>
                <a href='#'>Our Team</a>
                <a href='#'>Single Team</a>
                <a href='#'>Case Studies</a>
                <a href='#'>Shop</a>
                <a href='#'>Pricing</a>
                <a href='#'>Faq</a>
            </div>
        </li>
        <li>
            <a href='blog.php'>Blog</a>
            <div class='dropdown-content'>
                <a href='blog.php'>Blog</a>
                <a href='blog-detail.php'>Blog Details</a>
            </div>
        </li>
        <li><a href='contant.php'>İletişim</a></li>
        <li><a href='myaccount.php'>My Account</a></li>
    </ul>
    <div style='text-align: center;' class='p1'>
     <h1 style='text-align: center;'>CMS</h1>
     <p style='text-align: center;'>Hosgeldiniz , $row[1]</p>
     <a  class='btnLogins' href='panel/CMS.php'>Users</a>
     <a  class='btnLogins' href='panel/BlogCMS.php'>Blogs</a>
     <a  class='btnLogins' href='panel/CommentCMS.php'>Comments</a>
    </div>
    </body>
    </html>";

}
else
{

    echo "Giriş başarısız.";
}

?>