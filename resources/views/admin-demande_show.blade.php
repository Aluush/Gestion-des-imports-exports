<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/OP-dum.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <style>
body {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 400;
  background-image: url("{{ asset('images/bg-main-container.png') }}") !important;
  background-color: #ebebeb !important;
}
.submit2{
  background-color: rgb(249, 66, 66) !important;
}
.submit{
  background-color: rgb(0, 8, 79) ;
}
label{
  font-weight: 500;
  color: rgb(0, 3, 65);
}
p.title::after {
    content: '';
    background: #bcc75a;
    width: 50px;
    height: 5px;
    position: absolute;
    left: 0;
    bottom: 0;
  }
  .title {
      font-size: 20px;
      font-weight: bold;
      color: #053166;
      border-bottom: 2px solid #d5dde5;
    }
    
</style>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/OP-dum.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-chart-geo"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
body {
font-family: 'Poppins', sans-serif;
font-size: 16px;
line-height: 24px;
font-weight: 400;
background-image: url("{{ asset('images/bg-main-container.png') }}") !important;
background-color: #ebebeb !important;
}
.notification-box{
display: block !important;
}
</style>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <style>
  body {
font-family: 'Poppins', sans-serif;
font-size: 16px;
line-height: 24px;
font-weight: 400;
background-image: url("{{ asset('images/bg-main-container.png') }}")  !important; 
background-attachment: fixed;
}

.bg-gray-100{
  background-image: url("{{ asset('images/bg-main-container.png') }}")  !important; 
background-attachment: fixed;
}

      </style>

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

      <!-- Scripts -->
      @vite(['resources/css/app.css'
      , 'resources/js/app.js'
      ,'resources/css/bootstrap.css'
      ,'resources/js/bootstrap.js'
      ,'resources/css/profilJetstream.css'

       ])

      <!-- Styles -->
      @livewireStyles
</head>
<body> 

  
  @include('navigation-menu')


  <div class="content">
    <div class="row">
      <div class="col-md-2">
        <div class="table mes-infos container">
          <table class="table">
            <thead>
              <tr>        
                <th><img class="icons" src="images/reclamation.png" alt=""> Mes informations</th>
              </tr>
            </thead>
            <tbody>
              <tr>   
                <td><span>Raison sociale</span><br>OPF</td>      
              </tr>
              <tr>   
                <td><span>CIN</span><br>AB838383</td>      
              </tr>
              <tr>   
                <td><span>E-mail</span><br>aliatattou@gmail.com</td>      
              </tr>
              <tr>   
                <td><span>Code RC</span><br>AE4578</td>      
              </tr>
              <tr>   
                <td><span>Société</span><br>MED VI</td>      
              </tr>
              <tr>   
                <td><span>Code agrément</span><br>567</td>      
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-10">
        <div class=" justify-content-between align-items-center container">
          <h4>Demandes d'inscription :</h4> <br>

<div class="container">
  <p class="title">Demande d'inscription N° {{$demande->id}}  :</p> <br> 
  <form class="row g-3 form trier" method="POST" action="{{ route('demandes_A_R') }}">
    @csrf
    <div class="col-md-5 mr-5">
      <label for="inputEmail4" class="form-label">Centre RC</label>
      <input value="{{$demande->centre_rc}}" type="text" class="form-control" id="inputEmail4" name="centre_rc">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputPassword4" class="form-label">Numero RC</label>
      <input value="{{$demande->numero_rc}}" type="number" class="form-control" id="inputPassword4" name="numero_rc">
  </div>
  <div class="col-md-5 mr-5">
    <label for="inputPassword4" class="form-label">CIN</label>
    <input value="{{$demande->cin}}" type="text" class="form-control" id="inputPassword4" name="cin">
</div>
  <div class="col-md-5 mr-5">
      <label for="inputEmail4" class="form-label">Telephone</label>
      <input value="{{$demande->telephone}}" type="number" class="form-control" id="inputEmail4" name="telephone">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputPassword4" class="form-label">FAX</label>
      <input value="{{ $demande->fax == 0 ? '' : $demande->fax }}" type="number" class="form-control" id="inputPassword4" name="fax">
  </div>
  <div class="col-11">
      <label for="inputAddress" class="form-label">Address E-mail</label>
      <input value="{{$demande->email}}" type="email" class="form-control" id="inputAddress" name="email">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputEmail4" class="form-label">Raison Sociale</label>
      <input value="{{$demande->raison_social}}" type="text" class="form-control" id="inputEmail4" name="raison_social">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputPassword4" class="form-label">Numéro d'agrément</label>
      <input value="{{ $demande->numero_agrement == 0 ? '' : $demande->numero_agrement }}"type="number" class="form-control" id="inputPassword4" name="numero_agrement">
  </div>
  <div class="col-5 mr-5">
      <label for="inputAddress2" class="form-label">Address Complete</label>
      <input value="{{$demande->adresse}}" type="text" class="form-control" id="inputAddress2" name="adresse" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-5 mr-5">
    <label for="inputAddress2" class="form-label">Objet/Activité</label>
    <input value="{{$demande->objet_activite}}" type="text" class="form-control" id="inputAddress2" name="objet_activite" placeholder="Apartment, studio, or floor">
</div>
  <div class="col-md-5 mr-5">
      <label for="inputCity" class="form-label">Date de création</label>
      <input value="{{$demande->date_creation}}" type="date" class="form-control" id="inputCity" name="date_creation">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputCity" class="form-label">Ville</label>
      <input value="{{$demande->ville}}" type="text" class="form-control" id="inputCity" name="ville">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputCity" class="form-label">Nom de gérant</label>
      <input value="{{$demande->nom_gerant}}" type="text" class="form-control" id="inputCity" name="nom_gerant">
  </div>
  <div class="col-md-5 mr-5">
      <label for="inputCity" class="form-label">Prénom de gérant</label>
      <input value="{{$demande->prenom_gerant}}" type="text" class="form-control" id="inputCity" name="prenom_gerant">  
  </div>

    <div class="col-11">
        <button type="submit" class="btn btn-primary submit" name="accepter">Accepter</button>
        <button type="submit" class="btn btn-danger submit submit2" name="refuser">Refuser</button>
   </div>
</form>

</div>

          
        </div>


        </div>
        
      
        

      </div>
    </div>


  <img src="images/3dgifmaker58189.gif" id="gif" alt="">

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
         <script>
          const notificationBtn = document.querySelector('.notification-btn');
const badge = notificationBtn.querySelector('.badge');
const dropdown = notificationBtn.querySelector('.dropdown');

let notificationsCount = 0; // initialise le compteur de notifications à zéro

// Fonction pour ajouter une notification
function addNotification(notification) {
  const notificationsList = dropdown.querySelector('.notifications-list');
  const listItem = document.createElement('li');
  listItem.textContent = notification;
  notificationsList.appendChild(listItem);
  notificationsCount++;
  badge.textContent = notificationsCount;
}

notificationBtn.addEventListener('click', () => {
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  badge.textContent = 0; // Réinitialise le compteur de notifications
});

</script>


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
<script src="{{ asset('js/traduction.js') }}"></script>

<script src="OP-dum.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>