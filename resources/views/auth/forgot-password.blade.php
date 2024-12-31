<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index1.css">
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

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <p class="title">Reinitialiser votre mot de passe :</p>

        {{-- <x-guest-layout> --}}
            {{-- <x-authentication-card> --}}
                <x-slot name="logo">
                    {{-- <x-authentication-card-logo /> --}}
                </x-slot>
        
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Mot de passe oublié? Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d\'en choisir un nouveau.') }}
                </div>
        
                @if (session('status'))
                    <div class="mb-4 alert alert-success font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                            <x-validation-errors class="mb-4" />


        <form class="form" action="{{ route('password.email') }}" method="POST">
            @csrf

            <label for="email">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <span>E-mail</span>
            </label>

            <div class="flex items-center justify-end">
                <label for="">
                  <button class="submit">
                    {{ __('Lien de réinitialisation (e-mail)') }}
                </button>   
                </label>
            </div>


        </form>
    {{-- </x-authentication-card> --}}
{{-- </x-guest-layout> --}}
    </div>
    <div class="col-3"></div>
 
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