<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/OP-reclamation.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/OP-dum.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  {{-- <link rel="stylesheet" href="OP-reclamation.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
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

        <form class="form" action="code.php" method="POST">
          @csrf
          <div class="container">
        
                <fieldset>
                  <p class="title-second">Informations de réclamation </p>
                  <div class="form-group">
                    <label for="centre-rc">Thème <span class="rouge">*</span></label>
                    <select class="form-control" name="theme" id="centre-rc" onchange="showSubTheme()">
                      <option value="N">Sélectionnez...</option>
                      <option id="1" value="R">Réclamation</option>
                      <option id="" value="D">Demande d'information</option>
                    </select>
                  </div>

                  <div id="sous-theme-vide" class="form-group">
                    <label for="centre-rc">Sous-thème <span class="rouge">*</span></label>
                    <select name="sous_t" id="sous_t" class="input-xxlarge form-control">
                      {{-- <option value="0">Sélectionnez...</option> --}}
                    </select>
                  </div>
                
                  {{-- <div id="sous-theme-reclamation" style="display: none" class="form-group">
                    <label for="centre-rc">Sous-thème réclamation <span class="rouge">*</span></label>
                    <select name="ctl0$CONTENU_PAGE$creationdemandeComp$DemandeComp$ListeSousTheme" id="ctl0_CONTENU_PAGE_creationdemandeComp_DemandeComp_ListeSousTheme_Reclamation" class="input-xxlarge form-control">
                      <option value="335">Accords, conventions et règles d'origine </option>
                      <option value="340">Autres</option>
                      <option value="337">Comportement des agents de Douane</option>
                      <option value="338">Contentieux </option>
                      <option value="339">Corruption </option>
                      <option value="3031">Dénonciation </option>
                      <option value="334">Dédouanement de marchandises </option>
                      <option value="328">Dédouanement de véhicules</option>
                      <option value="331">Devises et change</option>
                      <option value="332">Envois express et colis postaux </option>
                      <option value="330">Fiscalité douanière (droits et taxes en douane)</option>
                      <option value="329">Importation temporaire / régularisation de véhicules immatriculés à l’Etranger </option>
                      <option value="3032">Importation temporaire des marchandises</option>
                      <option value="3033">Nomenclature /codification des marchandises</option>
                      <option value="336">Portail internet de la Douane </option>
                      <option value="333">Saisie de marchandises </option>
                      <option value="3034">Valeur en douane des marchandises</option>
                  </select>
                  </div>
                
                  <div id="sous-theme-information" style="display: none" class="form-group">
                    <label for="centre-rc">Sous-thème Demande d'Information <span class="rouge">*</span></label>
                    <select name="ctl0$CONTENU_PAGE$creationdemandeComp$DemandeComp$ListeSousTheme" id="ctl0_CONTENU_PAGE_creationdemandeComp_DemandeComp_ListeSousTheme_Information" class="input-xxlarge form-control">
                      <option value="0">Sélectionnez...</option>
                      <option value="351">Accords, conventions et règles d'origine</option>
                      <option value="358">Autres</option>
                      <option value="352">Classification tarifaire des marchandises</option>
                      <option value="346">Contentieux et litige</option>
                      <option value="355">Coordonnées de structure douanière</option>
                      <option value="354">Demande de stage/emploi</option>
                      <option value="345">Envois express et colis postaux</option>
                      <option value="342">Facilités et tolérances accordées aux particuliers</option>
                      <option value="349">Fiscalité douanière appliquée aux marchandises</option>
                      <option value="350">Fiscalité douanière appliquée aux véhicules</option>
                      <option value="347">Formalités de dédouanement de marchandises</option>
                      <option value="348">Formalités de dédouanement de véhicules</option>
                      <option value="357">Formalités relatives aux dons et franchises</option>
                      <option value="344">Importation temporaire/régularisation de véhicules </option>
                      <option value="343">Mesures de simplification au profit des entreprises</option>
                      <option value="353">Réglementation des devises et change</option>
                    </select>
                  </div> --}}
                </fieldset>
                
                <script>
                  function showSubTheme() {
                    var themeSelect = document.getElementById("centre-rc");
                    var vide = document.getElementById("sous-theme-vide");
                    var reclamationDiv = document.getElementById("sous-theme-reclamation");
                    var informationDiv = document.getElementById("sous-theme-information");
                
                    if (themeSelect.value === "R") {
                      reclamationDiv.style.display = "block";
                      informationDiv.style.display = "none";
                      vide.style.display = "none";

                    } else if (themeSelect.value === "D") {
                      informationDiv.style.display = "block";
                      reclamationDiv.style.display = "none";
                      vide.style.display = "none";

                    } else  if (themeSelect.value === "N") {
                      vide.style.display = "block";
                      reclamationDiv.style.display = "none";
                      informationDiv.style.display = "none";
                    }
                  }
                </script>
                

                <fieldset>
                  <p class="title-third">Lieu Concerné </p>

                  <div class="form-group">
                    <label for="centre-rc">Ville <span class="rouge">*</span></label>
                    <select class="form-control" name="ctl0$CONTENU_PAGE$creationdemandeComp$DemandeComp$communeListe"
                        id="ctl0_CONTENU_PAGE_creationdemandeComp_DemandeComp_communeListe"
                        class="input-xxlarge">
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
                    <select class="form-control" name="category" id="centre-rc">
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
                    <label for="email">Texte du message <span class="rouge">*</span></label>
                     <textarea class="form-control" name="message" id="email" cols="90" rows="5"></textarea>
                    </div>
                  
                </fieldset>
                
                <fieldset>
                  <legend><p class="title-fourth">Contenu</p></legend>

                
                  <div class="form-group">
                    <label for="raison-sociale">Objet  <span class="rouge">*</span></label>
                    <input id="raison-sociale" placeholder="" name="adresse1" type="text" class="form-control" required>
                  </div>
                
                  <div class="form-group">
                    <label for="email">Message <span class="rouge">*</span></label>
                     <textarea class="form-control" name="message" id="email" cols="90" rows="9"></textarea>
                    </div>
                
                    <div class="form-group">
                      <label for="date-creation">Pièces jointes <span class="rouge">*</span></label>
                      <input id="date-creation" placeholder="" name="code_postale" type="file" class="form-control-file" required>
                    </div>

                  <button type="submit" class="submit"><a href="{{ route('telecharger_pdf') }}">Enregistrer</a> </button>
                  <button type="submit" class="submit2"><a href="{{ route('telecharger_excel') }}">Envoyer</a></button>
            
                   </fieldset> 
          </div>
          <hr>
           </form>
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