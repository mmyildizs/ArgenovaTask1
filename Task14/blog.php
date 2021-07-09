<?php

include "panel/config.php";

//write the query to get data from users table

$sql = "SELECT * FROM blogposts";

//execute the query

$result = $conn->query($sql);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styleTask.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Blog</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="headerStyle">
    <a href="home.php"><img src="logo-dark.png"  width="200"  /></a>
</div>
<ul>
    <li>
        <a href="home.php">Ana Sayfa</a>
        <div class="dropdown-content">
            <a href="#">Multipages</a>
            <a href="#">Onepages</a>
        </div>
    </li>
    <li><a href="about.php">Hakkında</a></li>
    <li>
        <a href="services.php">Servisler</a>
        <div class="dropdown-content">
            <a href="#">Software Development</a>
            <a href="#">Web Development</a>
            <a href="#">Analytic Solutions</a>
            <a href="#">Cloud and DevOps</a>
            <a href="#">Project Design</a>
            <a href="#">Data Center</a>
        </div>
    </li>
    <li>
        <a href="pages.php">Sayfalar</a>
        <div class="dropdown-content">
            <a href="services.php">Services</a>
            <a href="#">Our Team</a>
            <a href="#">Single Team</a>
            <a href="#">Case Studies</a>
            <a href="#">Shop</a>
            <a href="#">Pricing</a>
            <a href="#">Faq</a>
        </div>
    </li>
    <li>
        <a href="blog.php" class="activate">Blog</a>
        <div class="dropdown-content">
            <a href="blog.php">Blog</a>
            <a href="blog-detail.php">Blog Details</a>
        </div>
    </li>
    <li><a href="contant.php">İletişim</a></li>
    <li><a href="myaccount.php">My Account</a></li>
</ul>

<div class="contentBlog">

    <div class="contentCol1Blog">
        <?php
        if ($result->num_rows > 0) {
            //output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="contents1">
                    <div class="IMG">
                        <img class="images" src="<?php echo $row['image']; ?>" alt="1"/>
                        <a class="btnAS" href="blog-detail.php"><?php echo $row['category']; ?></a>
                    </div>
                    <div class="wordContents">
                        <a href="" class="h"><?php echo $row['subject']; ?></a>
                    </div>
                    <div class="words">
                        <i class="material-icons H2">event_available</i>January 10, 2020
                        <i class="material-icons H2">account_circle</i>admin
                        <p class="W3"><?php echo $row['content']; ?></p>
                        <a class="btnContinue btnArrow" href="#">Continue Reading</a>
                    </div>
                </div>

            <?php		}
        }
        ?>
    </div>

    <div class="contentCol2">
        <div class="searchingContent">
            <input class="inputSearchh" type="search" id="gsearch" name="gsearch" placeholder="Search...">
        </div>
        <div class="latestpostsContent">
            <p class="lpC">Latest Posts</p>
            <div class="line"></div>
            <div class="postsContent">

                <img class="imagesPosts" src="1.jpg" alt="1"/>
                <div class="hP">
                    <p><a href="" class="hPosts">Pen Source Job Report Show More Openings Fewer</a><p>
                    <p><i class="material-icons H4">calendar_view_month</i><a style="font-size:12px;">January 21, 2020</a></p>
                </div>

            </div>
            <div class="postsContent">

                <img class="imagesPosts" src="2.jpg" alt="2"/>
                <div class="hP">
                    <p><a href="" class="hPosts">Tech Products That Makes Its Easier to Stay at Home</a><p>
                    <p><i class="material-icons H4">calendar_view_month</i><a style="font-size:12px;">January 21, 2020</a></p>
                </div>

            </div>
            <div class="postsContent">

                <img class="imagesPosts" src="3.jpg" alt="3"/>
                <div class="hP">
                    <p><a href="" class="hPosts">Necessity May Give Us Your Best Virtual Court System</a><p>
                    <p><i class="material-icons H4">calendar_view_month</i><a style="font-size:12px;">January 21, 2020</a></p>
                </div>

            </div>
            <div class="postsContent">

                <img class="imagesPosts" src="4.jpg" alt="4"/>
                <div class="hP">
                    <p><a href="" class="hPosts">Servo Project Joins The Linux Foundation Fold Desco</a><p>
                    <p><i class="material-icons H4">calendar_view_month</i><a style="font-size:12px;">January 21, 2020</a></p>
                </div>

            </div>



        </div>
        <div class="categoriesContent">
            <p class="lpC">Categories</p>
            <div class="line"></div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">Application Testing</a><p>
                </div>

            </div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">Artifical Intelligence</a><p>
                </div>

            </div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">Digital Technology</a><p>
                </div>

            </div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">IT Services</a><p>
                </div>

            </div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">Software Development</a><p>
                </div>

            </div>
            <div class="catsContent">

                <div class="cP">
                    <p><a href="" class="hPosts">Web Development</a><p>
                </div>

            </div>

        </div>
    </div>


</div>
</div>

<footer>
    <div class="f1">
        <a class="basliks" href="home.php"><img src="logo-dark.png"  width="200"  /></a>
        <p class="w1">Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="f1">
        <p class="basliks">Servisler</p>

        <p>Software Development</p>
        <p>Web Development</p>
        <p>Analytic Solutions</p>
        <p>Cloud and DevOps</p>
        <p>Project Design</p>
    </div>
    <div class="f1">
        <p class="basliks">İletişim Bilgisi</p>

        <p><i class="material-icons">place</i>    374 FA Tower, William S Blvd 2721, IL, USA</p>
        <p><i class="material-icons">phone_in_talk</i> (+90) 534 *** 98 60</p>
        <p><i class="material-icons">email</i> mirhat****@hotmail.com</p>
        <p><i class="material-icons">schedule</i> Opening Hours: 10:00 - 18:00</p>
    </div>
    <div class="f1">
        <p class="basliks">Bülten</p>

        <p>We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>

        <div class="btnA col-md-12">
            <input class="btnB" type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>

    </div>
</footer>
<div class="end">
    © 2021 All Rights Reserved. Developed By MMY
</div>

</body>
</html>