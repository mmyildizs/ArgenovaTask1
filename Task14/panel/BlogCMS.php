<?php

include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM blogposts";

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
    <h2>Blog Posts</h2>
    <a class="btn btn-info" href="addBlogPost.php">Add</a>
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
                    <td><?php echo $row['idblogposts']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['content']; ?></td>

                    <td><a class="btn btn-info" href="updateBlogPost.php?id=<?php echo $row['idblogposts']; ?>">Update</a>&nbsp;<a class="btn btn-danger" href="deleteBlogPost.php?id=<?php echo $row['idblogposts']; ?>">Delete</a></td>
                </tr>

            <?php		}
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>