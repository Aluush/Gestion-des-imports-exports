<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
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

        <link rel="icon" type="image/png" href="{{ asset('images/Douanes_Marocaines_ADII_Charaf_2015.jpg') }}">

    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>

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
// notificationsCount++;
// badge.textContent = notificationsCount;
}

notificationBtn.addEventListener('click', () => {
dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
// badge.textContent = 0; // Réinitialise le compteur de notifications
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

<script src="js/OP-dum.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
