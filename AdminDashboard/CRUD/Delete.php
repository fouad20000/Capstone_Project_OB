<?php
session_start();


if (isset($_GET['usersId'])) {

    $id = $_GET['usersId'];

    require_once '../../Login_System/dbh.inc.php';

    $sql = "DELETE FROM users WHERE usersId=$id";
    $conn->query($sql);
}

header("location: ../AccountTable.php");
exit;
