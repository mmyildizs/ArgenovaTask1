<?php
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // write delete query
    $sql = "DELETE FROM `blogposts` WHERE `idblogposts`='$post_id'";

    // Execute the query

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";

    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

?>
<a href="BlogCMS.php" class="geriB">Geri</a>
