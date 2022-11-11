<?php

// Security purpose 
//if he actually signed or not
if (isset($_POST["submit"])) {
    // echo "signed in";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../Signup.php?error=emptyinput");
        exit();
    }

    if (InvalidUid($username) !== false) {
        header("location: ../Signup.php?error=invaliduid");
        exit();
    }

    if (InvalidEmail($email) !== false) {
        header("location: ../Signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../Signup.php?error=passwordsdontmatch");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../Signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location: ../Signup.php");
    exit();
}