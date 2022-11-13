<?php
session_start();


if (isset($_GET['Num_detected'])) {

    $id = $_GET['Num_detected'];

    require_once '../../Login_System/dbh.inc.php';

    $sql = "DELETE FROM licenseplate WHERE Num_detected=$id";
    $conn->query($sql);
}

header("location: ../DP.php");
exit;