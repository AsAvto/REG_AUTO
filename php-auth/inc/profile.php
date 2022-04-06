<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

       <form>
        <h2 class="ctr" style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <!--
        <a class="ctr" href="#"><?= $_SESSION['user']['email'] ?></a>-->
        <br>
        <table border="1">
           <tr>
               <th>ФИО</th>
               <th>Выручка</th>
               <th>План по выручке</th>
               <th>Процент выполнения плана</th>
               <th>Процент зп</th>
               <th>Заработная плата</th>
            </tr>
           <tr>
               <td><?=$_SESSION['user']['full_name'] ?></td>
               <td><?=$_SESSION['user']['viruchka'] ?></td>
               <td><?=$_SESSION['user']['plan'] ?></td>
            </td>
               <td>
                   <?php
                  $viruchka = $_SESSION['user']['viruchka'];
                  $plan = $_SESSION['user']['plan'];
                   
                  $percent = ($viruchka/ $plan) * 100;
                  echo round($percent) . '%';  // 80%
                  ?> 

               </td>
               <td>
               <?php
               
              if ($percent > 81)
                 echo  "3%" ;
              if ($percent <= 80)
                 echo  "2%" ;   
                   ?>
               </td>
               <td>
                   <?php
               $viruchka = $_SESSION['user']['viruchka'];   
               $zp = ($viruchka) * 0.02;
               echo ($zp);
               ?>
               </td>
            </tr>
</table> 
       
        <br>
        <a class="ctr" href="../index.php" class="logout">Выход</a>
    </form>

</body>
</html>