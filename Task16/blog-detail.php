<?php

include "panel/config.php";

//write the query to get data from users table

$sql = "SELECT * FROM comments";

//execute the query

$result = $conn->query($sql);


?>
<?php
include "panel/config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['Cname'];
    $email = $_POST['Cemail'];
    $comment = $_POST['Ccomment'];

    $link = mysqli_connect("localhost", "root", "root", "argenovaproject");
    $id = mysqli_query($link,"SELECT COUNT(idcomments) FROM comments");
    $row = mysqli_fetch_row($id);

    $sql = "INSERT INTO `comments`(`idcomments`,`name`, `email`,`comment` ) VALUES ($row[0]+1,'$name','$email','$comment')";

    $result2 = $conn->query($sql);
    if ($result2 == TRUE) {

    }else{
        echo "Error:". $sql . "<br>". $conn->error;
    }

    $conn->close();
}
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
  <div class="contentName">
  <p class="mainContent"> Servo Project Joins The Linux Foundation Fold Desco </p>
  <p class="infoContent"> Home / Blog / It Services / Servo Project Joins The Linux Foundation Fold Desco </p>
  </div>
  
  <div class="content">
  
  <div class="contentCol1">
	   <img class="bd-images" src="5.jpg" alt="1"/>
	   <i class="material-icons H2">event_available</i>January 10, 2020
	   <i class="material-icons H2">account_circle</i>admin
	   <i class="material-icons H2">book</i>Strategy
	   <i class="material-icons H2">forum</i>1
	   <p class="bd-W3">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data structures manages data in technology.</p>
	   
	   <blockquote>
	   
	   <p>We can easily manage if we will only take, each day, the burden appointed to it. But the load will be too heavy for us if we carry yesterday’s burden over again today, and then add the burden of the morrow before we are required to bear it.
	   <br><br>
	   <cite>
	   
	   "Robert Calibo"
	   </cite>
	   </p>
	   </blockquote>
	   
	   <p class="bigW">
	   Digital technology on the cutting edge
	   </p>
	   <ul class="nullUl">
	   <li class="nullLi">How will digital activities impact traditional manufacturing.</li>
	   <li class="nullLi">All these digital elements and projects aim to enhance.</li>
	   <li class="nullLi">I monitor my staff with software that takes screenshots.</li>
	   <li class="nullLi">Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
	   <li class="nullLi">Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
	   
	   </ul>
	   <p class="bd-W3">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
	   <img class="bd-images" src="6.jpg" alt="1"/>
	   <p class="bd-W4">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
	    <p class="bigA">
	   1 comment on “Servo Project Joins The Linux Foundation Desco”
	   </p>
      <?php
      if ($result->num_rows > 0) {
          //output data of each row
          while ($row = $result->fetch_assoc()) {
              ?>

                  <div class="commentBoxs">
                      <img src="avatar.png" alt="Avatar" class="avatar">
                      <div class="adminComment">
                          <p class="bd-W5"><?php echo $row['name']; ?></p>
                          <p class="bd-W6">December 3, 2020 at 8:30 am</p>
                          <p class="bd-W7"><?php echo $row['comment']; ?> </p>
                          <a class="btnAS7" href="blog-detail.html">Reply</a>
                      </div>
                  </div>


          <?php		}
      }
      ?>
	   <div class="LaR">
	   <p class="LaRw">Leave a Reply</p>
	   <p>Your email address will not be published. Required fields are marked *</p>
	   <form class="row g-3" action="" method="POST">
  
		  <div class="col-md-6">
			<input type="text" class="form-control" id="Cname" name="Cname" placeholder="Ad*">
		  </div>
		  <div class="col-md-6">
			<input type="email" class="form-control" id="Cemail" name="Cemail" placeholder="Email*">
		  </div>
		  <div class="col-12">
			<textarea  style="resize:none" rows="5" class="form-control" id="Ccomment" name="Ccomment" placeholder="Yorum"></textarea>
		  </div>
		  <input type="submit" name="submit" value="Yorumla" class="btnAS8"></input>
	   </form>

	   </div>
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
			   <p><a href="blog-detail.html" class="hPosts">Application Testing</a><p>
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