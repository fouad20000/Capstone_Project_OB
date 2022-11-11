<?php

$serverName = "us-cdbr-east-06.cleardb.net";
$DBusername = "b34b2afa7c586b";
$DBpassword = "06b73f57";
$DBname = "heroku_b4ce68d5d2b1e41";

$conn = mysqli_connect($serverName, $DBusername, $DBpassword, $DBname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}