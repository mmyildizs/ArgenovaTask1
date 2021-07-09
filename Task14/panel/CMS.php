<?php

include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Users</h2>
        <a class="btn btn-info" href="add.php">Add</a>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['idusers']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>
					
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['idusers']; ?>">Update</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['idusers']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>