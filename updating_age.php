<?php
    include_once "database_connection.php";

    //if it has been clicked
    if (isset($_GET['edit'])) {
        $friend_id = $_GET['edit'];
        $sql = "SELECT * FROM friends WHERE friend_id=$friend_id";
        $result = mysqli_query($conn, $sql);

        // confirm the capture of data
        if (count($result) == 1) {
            $row = $result->fetch_array();
            $friend_id = row['friend_id'];
            $friend_name = row['friend_name'];
            $age = row['age']; //editing the age field
            $address = $row['address'];
        }

        //refer user back to index.php
        header("location:index.php");
    }
?>