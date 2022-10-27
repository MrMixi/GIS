<?php
session_start();
require "connection.php";
if(isset($_POST['prihlasovaciButton'])) {
    $meno = $_POST['meno'];
    $heslo = $_POST['heslo'];

    $query = "SELECT * FROM admin WHERE meno='$meno' AND heslo='$heslo'";
    $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            header("Location: /GIS/index.php");
        }
}
?>

