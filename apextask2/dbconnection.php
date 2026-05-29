
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "apextask2";

$con = mysqli_connect($host, $user, $pass, $db);

if ($con) {
    echo "";
} else {
    echo "failed connection";
}
