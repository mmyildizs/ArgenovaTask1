<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$username = $_POST['username'];
		$user_id = $_POST['user_id'];
		$password = $_POST['password'];

		// write the update query
		$sql = "UPDATE `users` SET `username`='$username',`password`='$password' WHERE `idusers`='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `idusers`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$password = $row['password'];
		}

	?>
        <html>
        <head>
            <link rel="stylesheet" href="stylePanel.css">
        </head>
        <body>
		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    Username:<br>
		    <input type="text" name="username" value="<?php echo $username; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="password" value="<?php echo $password; ?>">
		    <br>
		    <br><br>
		    <input type="submit" value="Update" name="update">
            <a href="CMS.php" class="geriB">Geri</a>
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: CMS.php');
	}

}
?>