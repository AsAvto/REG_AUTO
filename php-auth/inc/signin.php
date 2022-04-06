<?php
session_start();
require_once 'connect.php';

 $login= $_POST['login'];
 $password= ($_POST['password']);

 $check_user = mysqli_query($connect, "SELECT * FROM `users` where `login` = '$login' and `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
       
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email'],
            "viruchka" =>$user['viruchka'],
            "plan" =>$user['plan'],
        ];
        header('Location: profile.php');
    }else {
       $_SESSION['message'] = 'НЕВЕРНЫЙ ЛОГИН ИЛИ ПАРОЛЬ';
        header('Location: ../index.php');
        }

        