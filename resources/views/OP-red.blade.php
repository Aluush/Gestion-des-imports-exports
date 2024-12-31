<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/OP-dum.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <style>
body {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 400;
  background-image: url("images/bg-main-container.png")  !important; 
  background-color: #ebebeb !important;
}
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
        <div class="table-responsive mes-infos container">
          <table class="table">
            <thead>
              <tr>        
                <th><img class="" src="images/reclamation.png" alt=""> Mes informations</th>      
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
          <h4>La liste des comptes non regularisés :</h4> <br>
          <form class="trier" method="post" action="{{route('gerer_situation')}}">
            @csrf
            <div class="row">
              <div class="col-3 m-2"> 
                <span>N° id</span>
                <input class="form-control me-2 " name="id" type="text" placeholder="Recherche">
              </div>
              <div class="col-3 m-2"> 
                <span>Date début</span>       
                <input class="form-control me-2 " name="date_d" type="date">
              </div>
              <div class="col-3 m-2">  
                <span>Date fin</span>        
                <input class="form-control me-2 " name="date_f" type="date">
              </div>
            </div>
            <div class="row justify-content-end mt-2">
              <div class="col-auto">
                <button type="submit" class="btn btn-default btn-green px-5 btn-search mat-raised-button mat-primary tri" name="cherche">Rechercher</button>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-default btn-green px-5 btn-search mat-raised-button mat-primary tri" name="pdf">Télécharger pdf</button>
              </div>          
              <div class="col-auto">
                <button type="submit" class="btn btn-default btn-green px-5 btn-search mat-raised-button mat-primary tri" name="excel">Télécharger excel</button>    
              </div>
            </div>
          </form>
          
        </div>

        <div class="table-responsive dums container">
          <table class="table tab">
            <thead>
              <tr>
                <th>ID</th>
                <th>Code BD</th>
                <th>repertoire</th>
                <th>DUM</th>
                <th>date enregistrement</th>
                <th>crc</th>
                <th>nrc</th>
                <th>nom operateur</th>
                <th>code décarant</th>
                <th>valeur</th>
                <th>N° agrément</th>
                <th>Bureau</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dums as $dum)
              <tr>
                <td>{{$dum->id}}</td>
                <td>{{$dum->code_bd}}</td>
                <td>{{$dum->repertoire}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
                <td>{{$dum->dum}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <ul id="pagination" class="pagination pagination-lg justify-content-center"></ul>

          <script>// Obtenez les éléments de pagination et la table
            const table = document.querySelector('.tab');
            const tableRows = table.querySelectorAll('tbody tr');
            const pagination = document.querySelector('#pagination');
            pagination.innerHTML = '';
            
            // Paramètres de pagination
            const rowsPerPage = 5; // Nombre de lignes par page
            let currentPage = 1;
            
            // Calculez le nombre total de pages en divisant le nombre total de lignes par page
            const numPages = Math.ceil(tableRows.length / rowsPerPage);
            
            // Ajouter un bouton "Précédent"
            const previousBtn = document.createElement('button');
            previousBtn.classList.add('btn', 'btn-primary', 'mr-2');
            previousBtn.textContent = 'Précédent';
            previousBtn.disabled = true;
            pagination.appendChild(previousBtn);
            
            // Ajouter des liens de pagination pour chaque page
            for (let i = 1; i <= numPages; i++) {
              const li = document.createElement('li');
              li.classList.add('page-item');
            
              const link = document.createElement('a');
              link.classList.add('page-link');
              link.href = '#';
              link.textContent = i;
            
              li.appendChild(link);
              pagination.appendChild(li);
            }
            
            // Ajouter un bouton "Suivant"
            const nextBtn = document.createElement('button');
            nextBtn.classList.add('btn', 'btn-primary', 'ml-2');
            nextBtn.textContent = 'Suivant';
            if (numPages === 1) {
              nextBtn.disabled = true;
            }
            pagination.appendChild(nextBtn);
            
            // Mettre à jour l'état de pagination
            function updatePagination() {
              const lis = pagination.querySelectorAll('.page-item');
              for (let i = 0; i < lis.length; i++) {
                const li = lis[i];
                const link = li.querySelector('a');
                if (parseInt(link.textContent, 10) === currentPage) {
                  li.classList.add('active');
                } else {
                  li.classList.remove('active');
                }
              }
            
              previousBtn.disabled = (currentPage === 1);
              nextBtn.disabled = (currentPage === numPages);
            }
            
            // Afficher les lignes pour la page actuelle
            function showRows() {
              const startIndex = (currentPage - 1) * rowsPerPage;
              const endIndex = startIndex + rowsPerPage;
              for (let i = 0; i < tableRows.length; i++) {
                if (i >= startIndex && i < endIndex) {
                  tableRows[i].style.display = '';
                } else {
                  tableRows[i].style.display = 'none';
                }
              }
            }
            
            // Mettre à jour la page en fonction du lien de pagination cliqué
            pagination.addEventListener('click', (event) => {
              event.preventDefault();
            
              const link = event.target;
              if (link.tagName === 'A') {
                currentPage = parseInt(link.textContent, 10);
                updatePagination();
                showRows();
              }
            });
            
            // Aller à la page précédente
            previousBtn.addEventListener('click', () => {
              if (currentPage > 1) {
                currentPage--;
                updatePagination();
                showRows();
              }
            });
            
            // Aller à la page suivante
            nextBtn.addEventListener('click', () => {
              if (currentPage < numPages) {
                currentPage++;
                updatePagination();
                showRows();
              }
            });
            
            // Afficher les premières lignes sur la page actuelle
            showRows();
            
    
  const list = document.querySelector('ul');
  const listItems = list.querySelectorAll('li');

  for(let i = 0; i < listItems.length; i++) {
    if (i > 2) {
      listItems[i].style.display = 'none';
    }
  }




  
            </script>
          </ul>
                </div>
      </div>
    </div>
  </div>

  <img src="images/3dgifmaker58189.gif" id="gif" alt="">

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
<script src="{{ asset('js/traduction.js') }}"></script>

<script src="OP-dum.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>