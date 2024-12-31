<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
  background-image: url("{{ asset('images/bg-main-container.png') }}")  !important; 
  background-attachment: fixed;
  /* background-color: #b82323 !important; */
}

.bg-gray-100{
    background-image: url("{{ asset('images/bg-main-container.png') }}")  !important; 
  background-attachment: fixed;
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
canvas{
  margin: 10px;
  padding: 10px;
  border: 1px solid gray;
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
                <th><img class="icon2" src="{{ asset('images/reclamation.png"')}}" alt=""> Mes informations</th>
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
      <div class="col-md-10 container diags">

         <h4>Mon tableau de bord :</h4> <br>

        <div class="row">
        <div class="col-6"> 
          <div>
            <canvas id="myBarChart"></canvas>
            <script>
              // Récupération des données depuis PHP (ici, deux tableaux de nombres)
              var data1 = [10, 70, 30, 90, 50];
              var data2 = [40, 20, 50, 60, 80];
            
              // Création du graphique
              var ctx = document.getElementById('myBarChart').getContext('2d');
              var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['A', 'B', 'C', 'D', 'E'],
                  datasets: [
                    {
                      label: 'Nombre de réclamations par mois 1',
                      data: data1,
                      backgroundColor: '#bcc75a55',
                      borderColor: '#bcc75a',
                      borderWidth: 1
                    },
                    {
                      label: 'Nombre de réclamations par mois 2',
                      data: data2,
                      backgroundColor: '#032a5955',
                      borderColor: '#032a59',
                      borderWidth: 1
                    }
                  ]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            </script>
            
          </div>
          <div>
            <canvas id="myLineChart"></canvas>
            <script>
              // Récupération des données depuis PHP (ici, trois tableaux de nombres)
              // var data1 = [10, 20, 30, 40, 50, 20, 45, 65, 87, 84, 99, 10];
              var data2 = [30, 40, 25, 60, 70, 45, 30, 50, 70, 50, 40, 55];
              var data3 = [50, 60, 45, 55, 40, 60, 70, 80, 65, 55, 45, 70];
            
              // Création du graphique
              var ctx = document.getElementById('myLineChart').getContext('2d');
              var chart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ['JAN', 'FEV', 'MAR', 'APR', 'MAI', 'JUI', 'JUIL', 'AOU', 'SEP', 'OCT', 'NOV', 'DEC'],
                  datasets: [

                    {
                      label: 'Deuxième courbe',
                      data: data2,
                      backgroundColor: '#ff000055',
                      borderColor: '#ff0000',
                      borderWidth: 1
                    },
                    {
                      label: 'Troisième courbe',
                      data: data3,
                      backgroundColor: '#00ff0055',
                      borderColor: '#00ff00',
                      borderWidth: 1
                    }
                  ]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            </script>
            
          </div>
        </div>
        
        <div class="col-6">
            <canvas id="myChart"></canvas>

            @php
            $op=DB::table('users')->where('role_id',3)->count();
            $trans=DB::table('users')->where('role_id',4)->count();
           @endphp

            <script>
              // Récupération des données depuis PHP (ici, un simple tableau d'objets avec une valeur et une étiquette)
              var data = [
                { value: {{$op}}, label: 'Operateurs' },
                { value: {{$trans}}, label: 'Transitaires' },
              ];
          
              // Création du graphique
              var ctx = document.getElementById('myChart').getContext('2d');
              var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                  labels: data.map(item => item.label),
                  datasets: [{
                    label: 'Nombre des utilisateurs par profil',
                    data: data.map(item => item.value),
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                    ],
                    borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  plugins: {
                    datalabels: {
                      formatter: function(value, context) {
                        var dataset = context.chart.data.datasets[context.datasetIndex];
                        var total = dataset.data.reduce((previousValue, currentValue, currentIndex, array) => previousValue + currentValue);
                        var percentage = Math.round((value / total) * 100);
                        return percentage + "%";
                      },
                      color: '#000'
                    }
                  },
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
            </script>          
        </div>
        
      </div>
        
      </div>
    </div>
  </div>

  <img src="images/3dgifmaker94044.gif" id="gif" alt="">

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
  // notificationsCount++;
  badge.textContent = notificationsCount;
}

notificationBtn.addEventListener('click', () => {
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
  // badge.textContent = 0; // Réinitialise le compteur de notifications
});
</script>

<script src="{{ asset('js/traduction.js') }}"></script>

<script src="OP-dum.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>