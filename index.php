<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Manipulating Databases</title>
</head>
<body>
    <?php include_once 'inserting_data.php'?>
    <div class="container">
        <div class="row justify-content-center">
            <form action="inserting_data.php" method="POST">
                <div class="form-group">
                <label for="friend_id">Friend ID:</label>
                <input type="text" class="form-control" value="<?php echo $friend_id ?>" name="friend_id" placeholder="Enter friend id"/>
                </div>
                <div class="form-group">
                <label for="friend_name">Friend Name: </label>
                <input type="text" class="form-control" value="<?php echo $friend_name ?>" name="friend_name" placeholder="Enter friend name" />
                </div>
                <div class="form-group">
                <label for="age">Age: </label>
                <input type="text" class="form-control" value="<?php echo $age ?>" name="age" placeholder="Enter age" />
                </div>
                <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" class="form-control" value="<?php echo $address ?>" name="address" placeholder="Enter your address" />
                </div>
                <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </form>
        </div>

        <!-- logic to display records in a table, update and delete-->
        <?php 
            $conn = new mysqli('localhost', 'root', '', 'fatimaalmatawah');
            $sql = 'SELECT * FROM friends';
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Friend Id</th>
                        <th>Friend Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

        <?php 
            while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['friend_id'] ?></td>
                <td><?php echo $row['friend_name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td>
                    <a href="index.php?update=<?php echo $row['friend_id']; ?>" class="btn btn-info">Update</a>
                    <a href="deleting.php?delete=<?php echo $row['friend_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>
</html>