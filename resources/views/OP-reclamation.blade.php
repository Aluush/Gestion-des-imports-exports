<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css'
  , 'resources/js/app.js'
  ,'resources/css/bootstrap.css'
  ,'resources/js/bootstrap.js'
  ,'resources/css/profilJetstream.css'

   ])
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/OP-reclamation.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/OP-dum.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <style>
body {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 400;
  background-image: url("{{ asset('images/bg-main-container.png') }}")  !important; 
  background-attachment: fixed;
  background-color: #ebebeb !important;
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

      </style>

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
    
      <!-- Scripts -->
      {{-- @vite([
      'resources/css/app.css'
      , 'resources/js/app.js'
      ,'resources/css/bootstrap.css'
      ,'resources/js/bootstrap.js'
      ,'resources/css/profilJetstream.css'
       ]) --}}

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
                <th><img class="icons" src="reclamation.png" alt=""> Mes informations</th>      
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
      <div class="col-md-10 container">
        <h4>Nouvelle réclamation :</h4> <br>

        @if(session('message'))
        <div class="alert alert-success ml-4">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any ())
    <div class="alert alert-danger">
      <ul> 
        @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
         @endforeach
        </ul>
    </div>
     @endif

        <form class="form" action="{{ route('inserer_Reclam')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="container">
        
                <fieldset>
                  <p class="title-second">Informations de réclamation </p>
                  <div class="form-group">
                    <label for="centre-rc">Thème <span class="rouge">*</span></label>
                    <select class="form-control" name="theme" id="centre-rc" onchange="showSubTheme()">
                      <option value="N">Sélectionnez...</option>
                         </select>
                  </div>
                  <div id="sous-theme-vide" class="form-group">
                    <label for="centre-rc">Sous-thème <span class="rouge">*</span></label>
                    <select name="sous_theme" id="sous_t" class="input-xxlarge form-control">
                      {{-- <option value="0">Sélectionnez...</option> --}}
                    </select>
                  </div>
                  <script>
                    class Theme {
                      constructor(smiya, id,value) {
                        this.smiya = smiya;
                        this.id = id;
                        this.value = value;
                      }
                    }
                  
                    class Sous_T {
                      constructor(value, idm,smiya_mdina) {
                        this.smiya_mdina = smiya_mdina;
                        this.value=value
                        this.idm = idm;
                      }
                    }
                  
                    let blaad = [];
                    let mdinaa = [];
                  
                    blaad[0] = new Theme("Réclamation", 1,'R');
                    blaad[1] = new Theme("Demande d'information", 2,'D');

                    mdinaa[0] = new Sous_T("335", 1, "Accords, conventions et règles d'origine");
                    mdinaa[1] = new Sous_T("340", 1, "Autres");
                    mdinaa[2] = new Sous_T("337", 1, "Comportement des agents de Douane");
                    mdinaa[3] = new Sous_T("338", 1, "Contentieux");
                    mdinaa[4] = new Sous_T("339", 1, "Corruption");
                    mdinaa[5] = new Sous_T("3031", 1, "Dénonciation");
                    mdinaa[6] = new Sous_T("334", 1, "Dédouanement de marchandises");
                    mdinaa[7] = new Sous_T("328", 1, "Dédouanement de véhicules");
                    mdinaa[8] = new Sous_T("331", 1, "Devises et change");
                    mdinaa[9] = new Sous_T("332", 1, "Envois express et colis postaux");
                    mdinaa[10] = new Sous_T("330", 1, "Fiscalité douanière (droits et taxes en douane)");
                    mdinaa[11] = new Sous_T("329", 1, "Importation temporaire / régularisation de véhicules immatriculés à l’Etranger");
                    mdinaa[12] = new Sous_T("3032", 1, "Importation temporaire des marchandises");
                    mdinaa[13] = new Sous_T("3033", 1, "Nomenclature / codification des marchandises");
                    mdinaa[14] = new Sous_T("336", 1, "Portail internet de la Douane");
                    mdinaa[15] = new Sous_T("333", 1, "Saisie de marchandises");
                    mdinaa[16] = new Sous_T("3034", 1, "Valeur en douane des marchandises");
                    mdinaa[17] = new Sous_T("0", 2, "Sélectionnez...");
                    mdinaa[18] = new Sous_T("351", 2, "Accords, conventions et règles d'origine");
                    mdinaa[19] = new Sous_T("358", 2, "Autres");
                    mdinaa[20] = new Sous_T("352", 2, "Classification tarifaire des marchandises");
                    mdinaa[21] = new Sous_T("346", 2, "Contentieux et litige");
                    mdinaa[22] = new Sous_T("355", 2, "Coordonnées de structure douanière");
                    mdinaa[23] = new Sous_T("354", 2, "Demande de stage/emploi");
                    mdinaa[24] = new Sous_T("345", 2, "Envois express et colis postaux");
                    mdinaa[25] = new Sous_T("342", 2, "Facilités et tolérances accordées aux particuliers");
                    mdinaa[25] = new Sous_T("349", 2, "Fiscalité douanière appliquée aux marchandises");
                    mdinaa[25] = new Sous_T("350", 2, "Fiscalité douanière appliquée aux véhicules");
                    mdinaa[25] = new Sous_T("347", 2, "Formalités de dédouanement de marchandises");
                    mdinaa[25] = new Sous_T("348", 2, "Formalités de dédouanement de véhicules");
                    mdinaa[25] = new Sous_T("357", 2, "Formalités relatives aux dons et franchises");
                    mdinaa[25] = new Sous_T("344", 2, "Importation temporaire/régularisation de véhicules ");
                  
                    var boldani = document.getElementById('centre-rc');
                    var mdinati = document.getElementById('sous_t');
                  
                    blaad.forEach(element => {
                      boldani.innerHTML += '<option id="' + element.id + ' ">' + element.smiya + '</option>';
                    });
                  
                    boldani.onchange = function () {
                      mdinati.innerHTML = '<option value="N">Choisir une option...</option>';
                      mdinaa.forEach(element => {
                        if (element.idm == boldani.options[boldani.selectedIndex].id) {
                          mdinati.innerHTML += '<option value="'+element.value+'">' +  element.smiya_mdina + '</option>';
                        }
                      });
                    };
                  </script>
                <fieldset>
                  <p class="title-third">Lieu Concerné </p>

                  <div class="form-group">
                    <label for="centre-rc">Ville <span class="rouge">*</span></label>
                    <select class="form-control" id="" name="ville" class="input-xxlarge">
                      <option value="0">Sélectionnez...</option>
                      <option value="1865">ADMINISTRATION CENTRALE (Siège de la Douane à Rabat)</option>
                      <option value="1866">AGADIR</option>
                      <option value="1892">AHFIR</option>
                      <option value="1867">AL HOCEIMA</option>
                      <option value="1868">BAB SEBTA</option>
                      <option value="1891">BERRECHID</option>
                      <option value="1869">CASABLANCA</option>
                      <option value="1870">ED-DAKHLA</option>
                      <option value="1871">EL JADIDA</option>
                      <option value="1872">ESSAOUIRA</option>
                      <option value="1873">FES</option>
                      <option value="1894">GUERGARATE</option>
                      <option value="1895">JORF LASFAR</option>
                      <option value="1874">KENITRA</option>
                      <option value="1875">LAAYOUNE</option>
                      <option value="1876">LARACHE</option>
                      <option value="1877">MARRAKECH</option>
                      <option value="1878">MEKNES</option>
                      <option value="1879">MOHAMMADIA</option>
                      <option value="1880">NADOR</option>
                      <option value="1881">OUARZAZATE</option>
                      <option value="1882">OUJDA</option>
                      <option value="1883">RABAT</option>
                      <option value="1884">SAFI</option>
                      <option value="1890">SETTAT</option>
                      <option value="1885">TAN-TAN</option>
                      <option value="1886">TANGER</option>
                      <option value="1888">TAZA</option>
                      <option value="1887">TETOUAN</option>
                      <option value="1893">ZOUJ-BEGHAL</option>
                      <option value="1889">AUTRE LIEU (Saisir le lieu dans le champ « Localisation » ci-dessous)</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="centre-rc">Bureau de douane <span class="rouge">*</span></label>
                    <select class="form-control" name="bureauD" id="centre-rc">
                      <option value="Bureau de douane d'Agadir">Bureau de douane d'Agadir</option>
                      <option value="Bureau de douane d'Al Hoceima">Bureau de douane d'Al Hoceima</option>
                      <option value="Bureau de douane d'Alnif">Bureau de douane d'Alnif</option>
                      <option value="Bureau de douane d'Asilah">Bureau de douane d'Asilah</option>
                      <option value="Bureau de douane d'Azemmour">Bureau de douane d'Azemmour</option>
                      <option value="Bureau de douane de Beni Ansar">Bureau de douane de Beni Ansar</option>
                      <option value="Bureau de douane de Beni Ensar">Bureau de douane de Beni Ensar</option>
                      <option value="Bureau de douane de Boujdour">Bureau de douane de Boujdour</option>
                      <option value="Bureau de douane de Bouknadel">Bureau de douane de Bouknadel</option>
                      <option value="Bureau de douane de Boumalne">Bureau de douane de Boumalne</option>
                      <option value="Bureau de douane de Boussouf">Bureau de douane de Boussouf</option>
                      <option value="Bureau de douane de Casablanca">Bureau de douane de Casablanca</option>
                      <option value="Bureau de douane de Ceuta">Bureau de douane de Ceuta</option>
                      <option value="Bureau de douane de Chefchaouen">Bureau de douane de Chefchaouen</option>
                      <option value="Bureau de douane de Dakhla">Bureau de douane de Dakhla</option>
                      <option value="Bureau de douane d'El Guerguarat">Bureau de douane d'El Guerguarat</option>
                      <option value="Bureau de douane d'El Jadida">Bureau de douane d'El Jadida</option>
                      <option value="Bureau de douane d'Errachidia">Bureau de douane d'Errachidia</option>
                      <option value="Bureau de douane d'Essaouira">Bureau de douane d'Essaouira</option>
                      <option value="Bureau de douane de Farkhana">Bureau de douane de Farkhana</option>
                      <option value="Bureau de douane de Fès">Bureau de douane de Fès</option>
                      <option value="Bureau de douane de Fnideq">Bureau de douane de Fnideq</option>
                      <option value="Bureau de douane de Goulimine">Bureau de douane de Goulimine</option>
                      <option value="Bureau de douane de Guerguarat">Bureau de douane de Guerguarat</option>
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="email">Localisation <span class="rouge">*</span></label>
                     <textarea class="form-control" name="localisation" id="email" cols="90" rows="5"></textarea>
                    </div>
                </fieldset>
                
                <fieldset>
                  <legend><p class="title-fourth">Contenu</p></legend>
                
                  <div class="form-group">
                    <label for="raison-sociale">Objet  <span class="rouge">*</span></label>
                    <input id="raison-sociale" placeholder="" name="objet" type="text" class="form-control" required>
                  </div>
                
                  <div class="form-group">
                    <label for="email">Message <span class="rouge">*</span></label>
                     <textarea class="form-control" name="message" id="email" cols="90" rows="9"></textarea>
                    </div>
                
                    <div class="form-group">
                      <label for="date-creation">Pièces jointes </label>
                      <input id="date-creation" placeholder="" name="files[]" type="file" class="form-control-file"  multiple>
                    </div>

                  <button type="submit" name="envoyer" class="submit2">Envoyer</button>
            
                   </fieldset> 
          </div>
          <hr>
           </form>


{{-- 
<form action="{{ route('STOR') }}" method="POST" enctype="multipart/form-data">
  @csrf


  <div class="form-group">
      <label for="files">Fichiers :</label>
      <input type="file" name="files[]" id="files" multiple>
  </div>

  <button type="submit" class="btn btn-primary">Créer le compte</button>
</form> --}}

      </div>
    </div>
  </div>

  <img src="3dgifmaker58189.gif" id="gif" alt="">

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


<script src="{{ asset('js/traduction.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>