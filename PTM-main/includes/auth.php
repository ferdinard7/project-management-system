<?php

if (isset($_POST['register'])) {
    require_once("./config.php");

    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../signup.php?user=exists");
    } else {
        if ($password1 !== $password2) {
            header("Location: ../signup.php?user=password_not_equal");
        } else {
            $reg_user = "INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password1')";
            $user_result = mysqli_query($conn, $reg_user);

            if ($user_result) {
                session_start();
                $_SESSION['email'] = $email;

                header("Location: ../home.php");
            }
        }
        
    }
}

if (isset($_POST['login'])) {
    require_once("./config.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) < 1) {
        header("Location: ../login.php?user=null");
    } else {
        
        while ($rows = mysqli_fetch_assoc($result)) {
            $_SESSION['email'] = $rows['email'];

            header("Location: ../home.php");
        }
        
    }
}