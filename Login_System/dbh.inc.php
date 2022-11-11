<?php

$serverName = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "ObjectDetectionProject";

$conn = mysqli_connect($serverName, $DBusername, $DBpassword, $DBname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
