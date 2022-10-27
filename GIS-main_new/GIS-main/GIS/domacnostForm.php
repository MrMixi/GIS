<?php
session_start();
require 'connection.php';

if(isset($_POST['domacnostButton'])){
    $lokalita = $_POST['lokalita'];
    $typDomacnosti = $_POST['typDomacnosti'];
    $pocetDomacnost = $_POST['pocetDomacnost'];
    $vekPriemer = $_POST['vekPriemer'];
    $vzdelanie = $_POST['vzdelanie'];
    $spotrebaTyp = $_POST['spotrebaTyp'];
    $mesacneNaklady = $_POST['mesacneNaklady'];
    $alternativaTyp = $_POST['alternativaTyp'];
    $percentualneUsetrenie = $_POST['percentualneUsetrenie'];
    $dobaRozmyslania = $_POST['dobaRozmyslania'];
    $usporneVeci = $_POST['usporneVeci'];
    $prihliadanieNaSpotrebu = $_POST['prihliadanieNaSpotrebu'];
    $vysokoEnergickeStroje = $_POST['vysokoEnergickeStroje'];

    $query = $con->prepare("INSERT INTO domacnost VALUES('',?, ?,?,?,?,?,?,?,?,?,?,?,?)");
    $query->bind_param("sssssssssssss", $lokalita,$typDomacnosti,$pocetDomacnost,$vekPriemer,$vzdelanie,$spotrebaTyp
    ,$mesacneNaklady,$alternativaTyp,$percentualneUsetrenie,$dobaRozmyslania,$usporneVeci,$prihliadanieNaSpotrebu,$vysokoEnergickeStroje);
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
