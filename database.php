<?php
$con = mysqli_connect("localhost", "root", "", "universitydb");
if ($con->connect_error) {
    die("Failed Connection with Database" . $con->connect_error);
}

?>