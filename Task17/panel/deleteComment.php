<?php
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // write delete query
    $sql = "DELETE FROM `comments` WHERE `idcomments`='$post_id'";

    // Execute the query

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";

    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

?>
<a href="CommentCMS.php" class="geriB">Geri</a>
