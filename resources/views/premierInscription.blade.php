<?php
// include('dbcon.php');
session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body{
            background-image: url("images/BACKground1.png");
        }
    </style>
</head>

<body>

<header>
      <img src="header-login (1).png" id="tanger" alt="">
</header>

<div class="row">
    <div class="container">
        <form class="form" action="code.php" method="POST">
            <p class="title">Se connecter :</p>
            <?php
            if (isset($_SESSION['warning2'])) {
                echo '<span class="alert alert-danger">'. $_SESSION['warning2'] . '</span>';
            }
            ?>

            <?php
            if (isset($_SESSION['warning'])) {
                echo '<span class="alert alert-danger">'. $_SESSION['warning'] . '</span>';
            }
            session_unset();
            ?>

            <label>
                <input placeholder="" name="username" type="text" class="input" required>
                <span>Identifiant</span>
            </label>

            <label>
                <input placeholder="" name="password" type="password" class="input" required>
                <span>Ancien Mot de passe </span>
            </label>

            
            <label>
                <input placeholder="" name="password" type="password" class="input" required>
                <span> Nouveau Mot de passe </span>
            </label>

            <label>
                <input placeholder="" name="password" type="password" class="input" required>
                <span>Confirmation Mot de passe </span>
            </label>

            <label>
                <input placeholder="" name="random1" type="text" class="input" required>
                <span>Recopie le code de verification : <b>
                    <?php
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';
                    for ($i = 0; $i < 8; $i++) {
                        $randomString .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    echo $randomString;
                    ?> </b>
                </span>
            </label>

            <input type="hidden" name="random2" value="<?= $randomString ?>">
            <div class="flex">
                <button class="submit" type="submit" name="submit"><b> Se connecter</b></button>
            </div>

            <a href="">Mot de passe oublié ?</a>
        </form>
    </div>
    
</div>
  
<br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="row">
        <div class="col-4">
           

            <img src="logo-douane.png" alt="">
        </div>
       
        <div style="color:royalblue;" class="col-4">
            <span>Administration des Douanes et Impôts Indirects
            </span> <br>
                  Portail Opérateur  version 1.0.0  .2023©
       </div>

       <div class="col-4">
            <ul>
                <li><a href=""> Qu'est-ce que le Portail Opérateur ? </a></li>
                <li><a href="">Conditions Générales d’Utilisation (CGU) </a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="index.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>