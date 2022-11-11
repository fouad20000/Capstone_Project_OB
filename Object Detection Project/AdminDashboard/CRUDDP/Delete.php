<?php
session_start();


if (isset($_GET['Num_Detected'])) {

    $id = $_GET['Num_Detected'];

    require_once '../../Login_System/dbh.inc.php';

    $sql = "DELETE FROM licenseplate WHERE Num_Detected=$id";
    $conn->query($sql);
}

header("location: ../DP.php");
exit;
