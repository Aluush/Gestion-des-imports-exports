{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/premiere-con.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        body {
            background-image: url("{{ asset('images/BACKground1.png') }}");
        }
    </style>
</head>

<body>

<header>
    <div id="google_translate_element"></div>

    <img src="{{ asset('images/header-login (1).png') }}" id="tanger" alt="">
</header>

<div class="container">
        <x-validation-errors class="mb-4" />



    <form class="form" action="{{ route('password.update') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <p class="title">Reinitialiser votre mot de passe :</p>

        <label>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <span>E-mail</span>
        </label>

        <label>
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full input" type="password" name="password" required autocomplete="new-password" />
            <span>Mot de passe </span>
        </label>

        <label>
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full input" type="password" name="password_confirmation" required autocomplete="new-password" />
            <span>Confimer Mot de passe </span>
        </label> <br>
        

            <button class="submit">
                {{ __('Reset Password') }}
            </button>

          
        </div>

    </form>


   

</div>


  
<br><br><br><br><br><br><br><br><br><br>
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
        </script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>