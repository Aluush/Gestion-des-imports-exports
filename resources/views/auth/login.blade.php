<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    body{
        background-image: url("images/BACKground1.png");
    }
    .custom-button {
            background-color: #007bff;
            color: #ae2a2a;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
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
        {{-- <x-guest-layout> --}}
            {{-- <x-authentication-card> --}}
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>

                <x-validation-errors class="mb-4 alert alert-danger" />

                @if($errors->has('banned'))
                <div class="alert alert-danger">{{ $errors->first('banned') }}</div>
            @endif
            


                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif


        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf
            <p class="title">Se connecter :</p>
            <label>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <span>E-mail</span>
            </label>

            <label>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full input" type="password" name="password" required autocomplete="current-password" />
                <span>Mot de passe </span>
            </label>

            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            <div class="">
            
        

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
                <button class="submit">
                    {{ __('Log in') }}
                </button>

              
            </div>

        </form>
    {{-- </x-authentication-card> --}}
{{-- </x-guest-layout> --}}
    </div>
    
    <div class="col-6">
        <p class="title">Première visite</p>
        <div class="form2">
            <button class="reset" type="submit" name="submit"><b> <a href="CreerCompte"> Créer votre compte professionnel </a></b></button>
            <button class="aide" onclick="showSweetAlert()">Besoin d'aide ?</button>

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
            </script>             </div>
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
            // includedLanguages: 'ar,fr,en,ber',
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