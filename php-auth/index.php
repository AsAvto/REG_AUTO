<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<?php
session_start();
?>
<body>
    <!-- Форма аторизации -->
<div class="auth_form">
    <h2>Личный кабинет </h2>
    <form action="inc/signin.php" method="post">
        <label for>Логин</label>
        <input type="text" name="login"  placeholder="Введите свой логин">
        <label for>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль" >
        <label for="switch-xs" class="gui-switch" style="--thumb-size: 15px;">
         
          <input type="checkbox" role="switch" id="switch-xs" checked="" style="" >
          <p> Запомнить меня</p>
          <a href="https://pechnoy-mir.ru/auth/forgot-password/?forgot-password=yes&backurl=/" class="zbp">ЗАБЫЛИ ПАРОЛЬ?</a>
          
        </label>
       <div class="btn_reg"> 
           <button type="submit" method="post">ВОЙТИ</button>
           <a href="registr.php" class="reg">РЕГИСТРАЦИЯ</a>
        </div> 
        <?php
            if ($_SESSION['message']) 
            {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        
      
       
    </form> 
</div>
    
</body>
</html>
