<?php
include "config.php";

// if the form's submit button is clicked, we need to process the form
if (isset($_POST['submit'])) {
    // get variables from the form

    $image = $_POST['image'];
    $category = $_POST['category'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    $link = mysqli_connect("localhost", "root", "root", "argenovaproject");
    $id = mysqli_query($link,"SELECT COUNT(idblogposts) FROM blogposts");
    $row = mysqli_fetch_row($id);
    //write sql query

    $sql = "INSERT INTO `blogposts`(`idblogposts`,`image`, `category`,`subject`, `content` ) VALUES ($row[0]+1,'$image','$category','$subject','$content')";

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
        Image:<br>
        <input type="text" name="image">
        <br>
        Category:<br>
        <input type="text" name="category">
        <br>
        Subject:<br>
        <input type="text" name="subject">
        <br>
        Content:<br>
        <input type="text" name="content">
        <br>
        <br><br>
        <input type="submit" name="submit" value="submit"><a href="BlogCMS.php" class="geriB">Geri</a>
    </fieldset>
</form>

</body>
</html>