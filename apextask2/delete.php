



<?php
include 'dbconnection.php';

$id = $_GET['id'];

$query = "DELETE FROM student WHERE id='$id'";
$result = mysqli_query($con, $query);

if ($result) {
    header("Location: view.php"); // reloads the view page after deletion
    exit;
} else {
    echo "Failed to delete record.";
}
