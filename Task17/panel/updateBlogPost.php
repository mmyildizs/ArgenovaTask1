<?php
include "config.php";

// if the form's update button is clicked, we need to process the form
if (isset($_POST['update'])) {
    $blogposts_id = $_POST['blogposts_id'];
    $image = $_POST['image'];
    $category = $_POST['category'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    // write the update query
    $sql = "UPDATE `blogposts` SET `image`='$image',`category`='$category',`subject`='$subject',`content`='$content' WHERE `idblogposts`='$blogposts_id'";

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
    $blogposts_id = $_GET['id'];

    // write SQL to get user data
    $sql = "SELECT * FROM `blogposts` WHERE `idblogposts`='$blogposts_id'";

    //Execute the sql
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $image = $row['image'];
            $category= $row['category'];
            $subject= $row['subject'];
            $content= $row['content'];
        }

        ?>
        <html>
        <head>
            <link rel="stylesheet" href="stylePanel.css">
        </head>
        <body>
        <h2>Blog Post Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Post information:</legend>
                Image:<br>
                <input type="text" name="image" value="<?php echo $image; ?>">
                <input type="hidden" name="blogposts_id" value="<?php echo $blogposts_id; ?>">
                <br>
                Category:<br>
                <input type="text" name="category" value="<?php echo $category; ?>">
                <br>
                Subject:<br>
                <input type="text" name="subject" value="<?php echo $subject; ?>">
                <br>
                Content:<br>
                <input type="text" name="content" value="<?php echo $content; ?>">
                <br>
                <br><br>
                <input type="submit" value="Update" name="update">
                <a href="BlogCMS.php" class="geriB">Geri</a>
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