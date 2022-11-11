<?php
session_start();


if (isset($_GET['Num_id'])) {

    $id = $_GET['Num_id'];

    require_once '../../Login_System/dbh.inc.php';

    $sql = "DELETE FROM listlicenseplate WHERE Num_id=$id";
    $conn->query($sql);
}

header("location: ../LPI.php");
exit;
