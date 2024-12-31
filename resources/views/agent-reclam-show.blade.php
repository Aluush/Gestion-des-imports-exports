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
    width: 100%;
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
    p strong{
        color: #053166;
    }
    .card{
        background-color: rgba(255, 255, 255, 0.457) !important ;
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

<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}

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
        <div class="container">
          <h4>Gestion Réclamations:</h4> <br>

<div class="container p-5">
    @if(isset($message))
    <div class="alert alert-success font-weight-bold fs-5">
        {{ $message }}
    </div>
@endif

@if(session()->has('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <p class="title ml-4 mr-4 mb-0 pb-3"><strong>Thème :</strong> {{ $reclams->theme }} N° {{$reclams->rec_id}}  :</p> <br> 
                        </div>
                        <div class="card-body">
                            <p><strong>Sous-thème :</strong> {{ $reclams->sous_theme }}</p>
                            <p><strong>Ville :</strong> {{ $reclams->ville }}</p>
                            <p><strong>Bureau de destination :</strong> {{ $reclams->bureauD }}</p>
                            <p><strong>Localisation :</strong> {{ $reclams->localisation }}</p>
                            <p><strong>Objet :</strong> {{ $reclams->objet }}</p>
                            <p><strong>Message :</strong> {{ $reclams->message }}</p>
                            <p><strong>Fichier :</strong>
                                @if(isset($files) && count($files) > 0)
                                <ul>
                                    @foreach($files as $file)
                                        <li>
                                            <a href="{{ $file['url'] }}">{{ $file['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Aucun fichier associé à cette Réclamation.</p>
                            @endif                            
                            </p>
                            <p><strong>État :</strong> {{ $reclams->etat }}</p>
                            <p><strong>Description :</strong> {{ $reclams->description }}</p>
                            <p><strong>Opérateur :</strong> {{ $reclams->nom_gerant }}</p>
                            <form action="{{route('affecter_service')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$reclams->rec_id}}" name="id">
                                <div class="form-group p-5">
                                    <label for="service">Service</label>
                                    <select class="form-control" name="service" id="service">
                                      <option value="service 1">service 1</option>
                                      <option value="service 2">service 2</option>
                                      <option value="service 3">service 3</option>
                                      <option value="service 4">service 4</option>
                                      <option value="service 5">service 5</option>
                                      <option value="service 6">service 6</option>
                                      <option value="service 7">service 7</option>
                                      <option value="service 8">service 8</option>
                                    </select>
                                </div>
                                <button type="submit" class="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


<

<script src="{{ asset('js/traduction.js') }}"></script>

<script src="OP-dum.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
    



