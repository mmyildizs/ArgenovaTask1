<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$link = mysqli_connect("localhost", "root", "root", "argenovaproject");
		$id = mysqli_query($link,"SELECT COUNT(idusers) FROM users");
		$row = mysqli_fetch_row($id);
		//write sql query

		$sql = "INSERT INTO `users`(`idusers`,`username`, `password`) VALUES ($row[0]+1,'$username','$password')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Ekleme başarılı";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylePanel.css">
</head>
<body>

<h2>Add Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Adding</legend>
    Username:<br>
    <input type="text" name="username">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    <br><br>
    <input type="submit" name="submit" value="submit"><a href="CMS.php" class="geriB">Geri</a>
  </fieldset>
</form>

</body>
</html>