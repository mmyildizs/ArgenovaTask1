<?php

include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM comments";

//execute the query

$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog CMS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Comments</h2>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Category</th>
            <th>Subject</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            //output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td><?php echo $row['idcomments']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['comment']; ?></td>

                    <td><a class="btn btn-danger" href="deleteComment.php?id=<?php echo $row['idcomments']; ?>">Delete</a></td>
                </tr>

            <?php		}
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>