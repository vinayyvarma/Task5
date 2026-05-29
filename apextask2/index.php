 background-color: #007bff;
            color: white;
            text-decoration: none<?php include 'dbconnection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php crud</title>
</head>

<body>
    <h1>Practice on security enchancement</h1>

    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="Enter your first name"> <br><br>
        <input type="text" name="lastname" placeholder="Enter your last name"> <br><br>
        <input type="number" name="age" placeholder="Enter your age"> <br><br>
        <input type="submit" name="save_db" value="Save">
        <a href="view.php">View Record</a>
    </form>

    <?php
    if (isset($_POST['save_db'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];

        $query = "INSERT INTO  learners(firstname, lastname, age) 
                  VALUES('$fname', '$lname', '$age')";
        $data = mysqli_query($con, $query);

        if ($data) {
            echo "<script>alert('Successfully saved data');</script>";
        } else {
            echo "<script>alert('Failed to save data');</script>";
        }
    }
    ?>

</body>

</html>


