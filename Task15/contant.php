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
    <title>İletişim</title>
	<script>
	function myFunction() {
	  
	  let xname = document.getElementById("inputName").value;
	  let xsurname = document.getElementById("inputSurname").value;
	  let xemail = document.getElementById("inputEmail").value;
	  let xpassword = document.getElementById("inputPassword").value;
	  let xtel = document.getElementById("inputTel").value;
	  let xgender = document.getElementById("inputGender").value;
	  let xaddress = document.getElementById("inputAddress").value;
	  let text;
	  let patt = new RegExp("bunak|aptal|bön|salak|andaval|dangalak|hödük|lavuk|ahmak|budala");
	  if (xname=="" || xsurname=="" || xemail=="" || xpassword=="" || xtel=="" || xgender=="" || xaddress=="") {
		text = "Eksik bilgileri giriniz.";
	  }
	  else {
		if(xpassword.length < 8 || xpassword.length >16)
		{
		  text = "Şifre 8'den kısa olamaz ve ya 16'dan uzun olamaz.";
		}
		if(isNaN(xtel) || xtel.length != 10)
		{
		  text ="Lütfen numarınızı doğru giriniz.";
		}
		if(patt.test(xname) || patt.test(xsurname))
		{
		text="";
			if(patt.test(xname)==true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Hayda...',
				  text: 'Girdiğiniz isimdeki küfrü kaldırmanızı rica ediyoruz!',
				})
			}
			if(patt.test(xsurname)==true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Hayda...',
				  text: 'Girdiğiniz soyisimdeki küfrü kaldırmanızı rica ediyoruz!',
				})
			}
			if(patt.test(xemail)==true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Hayda...',
				  text: 'Girdiğiniz emaildeki küfrü kaldırmanızı rica ediyoruz!',
				})
			}
			if(patt.test(xpassword)==true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Hayda...',
				  text: 'Girdiğiniz şifredeki küfrü kaldırmanızı rica ediyoruz!',
				})
			}
			if(patt.test(xaddress)==true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Hayda...',
				  text: 'Girdiğiniz adresteki küfrü kaldırmanızı rica ediyoruz!',
				})
			}
		}
		else 
		{
		text="";
		 Swal.fire(
		  'Başarılı',
		  'Gönderildi!',
		  'success'
		)
		
		}
	  }
	  document.getElementById("demo").innerHTML = text;
}
	</script>
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
            <a href="blog.php">Blog</a>
            <div class="dropdown-content">
                <a href="blog.php">Blog</a>
                <a href="blog-detail.php">Blog Details</a>
            </div>
        </li>
        <li><a href="contant.php" class="activate">İletişim</a></li>
        <li><a href="myaccount.php">My Account</a></li>
    </ul>
  
  <div class="center">
  <h1>İletişim Formu</h1>
  <form class="row g-3" >
  
  <div class="col-md-6">
    <input type="text" class="form-control" id="inputName" placeholder="Ad" name="inputName">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control" id="inputSurname" placeholder="Soyadı" name="inputSurname">
  </div>
  <div class="col-md-6">
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
  </div>
  <div class="col-md-6">
    <input type="password" class="form-control" id="inputPassword" placeholder="Şifre" name="inputPassword">
  </div>
  <div class="col-md-6">
    <input type="tel" class="form-control" id="inputTel" placeholder="Tel No" name="inputTel">
  </div>
  <div class="col-md-6">
    <select id="inputGender" class="form-select" placeholder="Cinsiyet" name="inputGender">
      <option>Erkek</option>
      <option>Kadın</option>
    </select>
  </div>
  <div class="col-12">
    <textarea  style="resize:none" rows="3" class="form-control" id="inputAddress" placeholder="Adres" name="inputAdress"></textarea>
  </div>
  <div class="col-12">
    <button type="button" class="btn btn-outline-primary" onclick="myFunction()">Gönder</button>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </div>
  <p id="demo"></p>
  </form>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58417.22536604188!2d90.422699!3d23.780287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe26372e73a6832e7!2sRSTheme!5e0!3m2!1str!2sus!4v1623840481744!5m2!1str!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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