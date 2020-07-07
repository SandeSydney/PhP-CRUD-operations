<?php 
    include_once "database_connection.php";

    //empty variables to be used in updating
    $friend_id="";
    $friend_name="";
    $age = "";
    $address = "";

    //collect data submitted if submit button is clicked and insert into database
    if(isset($_POST['submit'])){
        $friend_id = $_POST['friend_id'];
        $friend_name = $_POST['friend_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $sql = "INSERT INTO friends (friend_id, friend_name, age, address) VALUES('$friend_id','$friend_name','$age', '$address') ";
        mysqli_query($conn, $sql);
                    
        //refer user back to index.php
        header("location:index.php");
    }

?>