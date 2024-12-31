{{-- <x-guest-layout>
<x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
                    <x-label for="code" value="{{ __('Code') }}" />
                    <x-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-button class="ml-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
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
        #tanger{
            width: 100% !important;
        }
        
    </style>
</head>

<body>

<header>
    
    <div id="google_translate_element"></div>
    <img src="{{ asset('images/header-login (1).png') }}"  id="tanger" alt="">
</header>



<x-guest-layout>
<div class="">

    <div x-data="{ recovery: false }">
        


        
        <form class="form" action="{{ route('two-factor.login') }}" method="POST">
            @csrf
        
            <div class="mb-4 text-sm text-gray-600" x-show="!recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>
            <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>
            <x-validation-errors class="mb-4" />
        
            <p class="title">Authentication à deux facteurs :</p>
        
            <label x-show="!recovery">
                <x-label for="code" value="{{ __('Code') }}" />
                <x-input id="code" class="block mt-1 w-full input" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                <span>Code</span>
            </label>
        
            <label x-show="recovery">
                <x-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                <x-input id="recovery_code" class="block mt-1 w-full input" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                <span>Recovery code</span>
            </label>
        
            <br>
        
            <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer" x-show="!recovery"
                x-on:click="
                    recovery = true;
                    $nextTick(() => { $refs.recovery_code.focus() })
                ">
                {{ __('Use a recovery code') }}
            </button>
        
            <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer" x-show="recovery"
                x-on:click="
                    recovery = false;
                    $nextTick(() => { $refs.code.focus() })
                ">
                {{ __('Use an authentication code') }}
            </button>
        
            <button class="submit">
                {{ __('Se connecter') }}
            </button>
        </form>
        

   

</div>


  
<br><br><br><br><br>
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

</x-guest-layout>

</body>
</html>