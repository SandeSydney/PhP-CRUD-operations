<?php 
    include_once "database_connection.php";

    //confirm if the delete button has been clicked and delete query
    if (isset($_GET['delete'])) {
        $friend_id = $_GET['delete'];
        $sql = "DELETE FROM friends WHERE friend_id=$friend_id";
            mysqli_query($conn, $sql);

        //refer user back to index.php
        header("location:index.php");
    }

    
?>