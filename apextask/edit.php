<?php
include 'dbconnection.php';

$id = $_GET['id'];

// Get existing data
$query = "SELECT * FROM student WHERE id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Update data
if (isset($_POST['update'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $update_query = "UPDATE student SET firstname='$fname', lastname='$lname', age='$age' WHERE id='$id'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        header("Location: view.php"); // reloads the view page after update
        exit;
    } else {
        echo "Update failed!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h2>Edit Student</h2>

    <form method="POST">
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required><br><br>
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required><br><br>
        <input type="number" name="age" value="<?php echo $row['age']; ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

</body>

</html>