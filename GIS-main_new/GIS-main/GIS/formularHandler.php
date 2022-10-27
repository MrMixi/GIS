<?php
session_start();
require 'connection.php';

$questions = json_encode($_POST['questions'], true);
$kategoria = $_POST['kategoria'];

$sql_insert = "INSERT INTO odpovede (id, odpoved,kategoria)
                    VALUES (NULL,'$questions','$kategoria')";
if(mysqli_query($con, $sql_insert)){
    echo "Item successfully added to the database";
}else{
    echo "ERROR: $sql_insert did not run".mysqli_error($con);
}
?>
