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
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

<style>
    body{
        background-image: url("images/BACKground1.png");
    }
</style>
</head>

<body>

<header>
<div id="google_translate_element"></div>

      <img src="images/header-login (1).png" id="tanger" alt="">
</header>

<div class="row">
    <div class="col-6">
        <form class="form" action="/admin" method="POST">
            @csrf
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
                <input placeholder="" name="email" type="email" class="input" required>
                <span>Identifiant</span>
            </label>

            <label>
                <input placeholder="" name="password" type="password" class="input" required>
                <span>Mot de passe </span>
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
    
    <div class="col-6">
        <p class="title">Première visite</p>
        <div class="form2">
            <button class="reset" type="submit" name="submit"><b> <a href="CreerCompte"> Créer votre compte professionnel </a></b></button>
            <button class="aide" onclick="showSweetAlert()">Afficher la SweetAlert</button>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

            <script>
                function showSweetAlert() {
                    Swal.fire({
                        title: 'Titre de la SweetAlert',
                        html: '<p>Ceci est un exemple de long texte qui peut être affiché dans une SweetAlert. Vous pouvez y ajouter autant de contenu que nécessaire en utilisant le paramètre <code>html</code>.</p><p>Vous pouvez formater le texte avec des balises HTML pour créer des paragraphes, des listes, des styles, etc.</p>',
                        icon: 'info',
                        confirmButtonText: 'OK'
                    });
                }
            </script>        </div>
        <br> <br> <br>
    </div>
</div>
  
<br><br><br><br>
<footer>
    <div class="row">
        <div class="col-4">
           

            <img src="images/logo-douane.png" alt="">
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
<script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false,
            includedLanguages: 'ar,fr,en,ber',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
            multilanguagePage: true
          }, 'google_translate_element');
        }
        </script>
<script src="index.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>