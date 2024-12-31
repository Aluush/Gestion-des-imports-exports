<?php

// session_start();
// include('dbcon.php');

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
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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

    <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <img id="logo" src="images/Capture_d_écran_2023-04-06_144020-removebg-preview.png"  class="mx-auto">
          </div>
        </div>
      </div>


            <div class="row" >
              <div class="col-6 my-3">
                <select name="" id="myliste" onchange="window.open(this.value, '_blank');">
                  <option value="">Services libres</option>
                  <option value="https://www2.douane.gov.ma/diwanati/#/home?returnUrl=%2Fidentification">Diw@ati</option>
                  <option value="https://badr.douane.gov.ma/Acceuil.html">BADR</option>
                  <option value="https://daam.douane.gov.ma/login2.php">DAAM</option>
                  <option value="https://www.douane.gov.ma/adil/">ADIL</option>
                  <option value="https://bayyanliya.douane.gov.ma/products/">Bayyan Liya</option>
                </select>
                
                
              </div>
              <div class="col-6 my-3">
                <button class="submit2" type="submit" name="submit"> <a href="/login">Se connecter</a> </button>
              </div>
            </div>
      
<br><br>  

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
    includedLanguages: 'ar,fr,en,ber-dz,ber-ma',
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
    multilanguagePage: true
  }, 'google_translate_element');
}


        window.addEventListener("load", function() {
  var bannerFrame = document.querySelector(".goog-te-banner-frame");
  if (bannerFrame) {
    bannerFrame.style.display = "none";
  }
});
        </script>



<script src="index.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>