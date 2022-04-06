<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- Форма регистрации -->
    
<div class="reg_form">
    <h2 class="h2_reg">РЕГИСТРАЦИЯ </h2>
    <form action="inc/signup.php" method="post">

        <label for>Фамилия Имя Отчество </label>
        <input type="text" name="full_name" placeholder="Введите своё ФИО">
        <label for>E-mail </label>
        <input type="email" name="email"placeholder="Введите свой email">
        <label for>Логин (мин. 3 символа)</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <p>Является логином для входа на сайт.</p> 
        <br>
        <label for>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label for>Подтверждение пароля</label>
        <input type="password_confirm" name="password_confirm" placeholder="Повторите свой пароль">
       

    </div>
          <label for="switch-xs" class="gui-switch" style="--thumb-size: 15px;">
          <input type="checkbox" role="switch" id="switch-xs" checked="" style="" >
          <p>Я согласен на <a href="https://pechnoy-mir.ru/include/licenses_detail.php" class="obr_dan">обработку персональных данных</a> </p>
          
          
        </label>
       <div class="btn_reg"> 
       <button type="submit">Зарегистрироваться</button>
       </div> 
        <?php
            if ($_SESSION['message']) 
            {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </form> 
    <br>
</div>
    
</body>
</html>