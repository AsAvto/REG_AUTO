<?php
session_start();
 require_once 'connect.php';

 $full_name= $_POST['full_name'];
 $email= $_POST['email'];
 $login= $_POST['login'];
 $password= $_POST['password'];
 $password_confirm= $_POST['password_confirm'];
 $viruchka=$_POST[`viruchka`]; 
 $plan_po_vir=$_POST[`plan_po_vir`];
 if ($password === $password_confirm) {

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../register.php');
    }

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `login`,  `password`,`viruchka`, `plan_po_vir`) VALUES (NULL, '$full_name', '$email', '$login', '$password',`$viruchka`, `$plan_po_vir`)");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}
 ?>