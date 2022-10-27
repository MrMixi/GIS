<?php
session_start();
require 'connection.php';

if(isset($_POST['kategoriaButton'])){
    $kategoria = $_POST['kategoria'];

    $query = $con->prepare("INSERT INTO kategoria VALUES('',?)");
    $query->bind_param("s", $kategoria);
    $query->execute();

    header("Location: /GIS/index.php");
}
?>