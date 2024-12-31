<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer votre compte personnel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <style>
    body{
        background-image: url("{{ asset('images/BACKground1.png') }}") !important;
    }

</style>
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<style>
body {
font-family: 'Poppins', sans-serif;
font-size: 16px;
line-height: 24px;
font-weight: 400;
background-color: #ebebeb !important;
}
.notification-box{
display: block !important;
}
</style>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}

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
    <link rel="stylesheet" href="{{ asset('css/CreerCompte.css') }}">

      <!-- Styles -->
      @livewireStyles
</head>

<body>

<header> 
<div id="google_translate_element"></div>

<img src="{{ asset('images/header-login (1).png') }}" id="tanger" alt="">
</header>
                @if ($errors->any ())
                  <div class="alert alert-danger">
                    <ul> 
                      @foreach ($errors->all() as $error)
                      <li> {{$error}} </li>
                       @endforeach
                      </ul>
                  </div>
                @endif

                @if(isset($message_demande_envoy))
                <div class="alert alert-success font-weight-bold fs-5">
                    {{ $message_demande_envoy }}
                </div>
            @endif

  
            
                <form class="form" action="{{ route('demade_insert') }}"  method="POST">
                    @csrf
                    <p class="title">Créer votre demande d'inscription </p>
                
                    <div class="row">
                        <div class="col-6">
                            <fieldset>
                                <p class="title-second">Informations de connexion </p>
                                <label for="centre-rc">
                                    Centre RC <span class="rouge">*</span>
                                    <input id="centre-rc" placeholder="" value="{{ old('centre_rc') }}" name="centre_rc" type="number" class="input" required>
                                </label> <br>
                                @error('centre_rc')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                
                                <label for="numero-rc">
                                    Numéro RC
                                 <span class="rouge">*</span>   <input id="numero-rc" placeholder="" value="{{ old('numero_rc') }}" name="numero_rc" type="number" class="input" required>
                                </label> <br>
                                @error('numero_rc')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                
                                <label for="phone">
                                    N° Téléphone <span class="rouge">*</span>   <br>
                                   <input id="phone" type="number" class="input" name="telephone" value="{{ old('telephone') }}" required />
                                </label> <br>
                
                                <label for="fax">
                                    FAX
                                <input id="fax" placeholder="" value="{{ old('fax') }}" name="fax" type="number" class="input">
                                </label> <br>
                
                                <label for="email">
                                    Adresse E-mail
                                 <span class="rouge">*</span>   <input id="email" placeholder="" value="{{ old('email') }}" name="email" type="email" class="input @error('email') is-invalid @enderror" required>
                                </label> <br>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </fieldset>
                        </div>
                
                        <div class="col-6">
                            <fieldset>
                                <p class="title-second">Informations de la société </p>
                                <label for="raison-sociale">
                                    Raison Sociale
                                 <span class="rouge">*</span>   <input id="raison-sociale" placeholder="" value="{{ old('raison_social') }}" name="raison_social" type="text" class="input" required>
                                </label> <br>
                
                                <label for="numero-agrement">
                                    Numéro d'agrément
                                <input id="numero-agrement" placeholder="" value="{{ old('numero_agrement') }}" name="numero_agrement" type="number" class="input">
                                </label> <br>
                
                                <label for="date-creation">
                                    Date de création
                                 <span class="rouge">*</span>   <input id="date-creation" placeholder="" value="{{ old('date_creation') }}" name="date_creation" type="date" class="input" required>
                                </label> <br>
                
                                <label for="objet-activite">
                                    Objet-Activité
                                 <span class="rouge">*</span>   <input id="objet-activite" placeholder="" value="{{ old('objet_activite') }}" name="objet_activite" type="text" class="input" required>
                                </label> <br>
                
                                <label for="ville">
                                    Ville
                                 <span class="rouge">*</span>   <input id="ville" placeholder="" value="{{ old('ville') }}" name="ville" type="text" class="input" required>
                                </label> <br>
                
                                <label for="adresse">
                                    Adresse
                                 <span class="rouge">*</span>   <input id="adresse" placeholder="" value="{{ old('adresse') }}" name="adresse" type="text" class="input" required>
                
                                </label> <br>
                            </fieldset>
                        </div>
                    </div> <hr>
    
             <div class="row">

        <div class="col-3">

        </div>
        
        <div class="col-6">
            <fieldset>
                <p class="title-second">Informations du gérant  </p>
                <label for="nom-gerant">
                    Nom de gérant
                 <span class="rouge">*</span>   <input id="nom-gerant" placeholder="" name="nom_gerant" value="{{ old('nom_gerant') }}" type="text" class="input" required>
                </label> <br>
    
                <label for="prenom-gerant">
                    Prénom de gérant    
             <span class="rouge">*</span>   <input placeholder="" name="prenom_gerant" id="prenom_gerant" value="{{ old('prenom_gerant') }}"  type="text" class="input" required>
            </label> <br>

            <label for="cin">
                CIN
         <span class="rouge">*</span>   <input placeholder="" name="cin" id="cin" value="{{ old('cin') }}"  type="text" class="input" required>
        </label> <br>
        @error('cin')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
            </fieldset>
        </div>
          
          <div class="col-3">
            
        </div>
        <div class="row">
            <div class="col-5">
                        <button class="reset" type="reset" name="submit"><b>  Effacer tous </b></button>
            </div>
            <div class="col-7">
                        <button class="submit" type="submit" name="submit"><b>  Envoyer mon formulaire </b></button>
            </div>
        </div>


           
        </div>
     </form>
<br><br><br>


<footer>
    <div class="row">
        <div class="col-4">
           

            <img src="{{ asset('images/logo-douane.png') }}" alt="">
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

        window.addEventListener("load", function() {
  var bannerFrame = document.querySelector(".goog-te-banner-frame");
  if (bannerFrame) {
    bannerFrame.style.display = "none";
  }
});

        </script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>