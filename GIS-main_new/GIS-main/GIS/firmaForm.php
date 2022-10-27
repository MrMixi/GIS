<?php
session_start();
require 'connection.php';

if(isset($_POST['firmaButton'])){
    $nazov = $_POST['nazov'];
    $lokalita = $_POST['lokalita'];
    $zameranie = $_POST['zameranie'];
    $spotrebaPriestor = $_POST['spotrebaPriestor'];
    $spotrebaIntPriestor = $_POST['spotrebaIntPriestor'];
    $spotrebaVyroba= $_POST['spotrebaVyroba'];
    $spotrebaIntVyroba= $_POST['spotrebaIntVyroba'];
    $percentualneUsetrenie = $_POST['percentualneUsetrenie'];

    $query = $con->prepare("INSERT INTO firma VALUES('',?, ?,?,?,?,?,?,?)");
    $query->bind_param("ssssssss", $nazov, $lokalita, $zameranie,$spotrebaPriestor,$spotrebaIntPriestor,$spotrebaVyroba,$spotrebaIntVyroba,$percentualneUsetrenie);
    $query->execute();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ďakujeme za vyplennie</title>
    <link rel="stylesheet" type="text/css" href="index2.css">
</head>
<body>
<div class="heading">
    <h1 id="head">Ďakujeme za vyplnenie formuláru vaše odpovede boli zaznamenané</h1>
</div>
</body>
</html>
