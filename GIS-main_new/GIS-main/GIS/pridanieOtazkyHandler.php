<?php
session_start();
require 'connection.php';

if(isset($_POST['pridanieOtazkyButton'])){
    $typOtazky = $_POST['typOtazky'];
    $kategoria = $_POST['kategoria'];
    $questionTitle = $_POST['questionTitle'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];

    if($typOtazky == "text"){
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$question1,$kategoria);
        $query->execute();

        header("Location: /GIS/index.php");
    }else{

        $array = [
            "questionTitle" => $questionTitle,
            "question1" => $question1,
            "question2" => $question2,
            "question3" => $question3
        ];

        $insert_data = implode(",", $array);
        $query = $con->prepare("INSERT INTO otazky VALUES('',?,?,?)");
        $query->bind_param("sss", $typOtazky,$insert_data,$kategoria);
        $query->execute();

        header("Location: /GIS/index.php");
    }
}
?>