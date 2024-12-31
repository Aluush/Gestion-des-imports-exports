<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navigation-wrap bg-light start-style">
            <div class="row">
                <div class="col-2 ">
                    <img class="mt-2" src="{{ asset('images/Capture_d_écran_2023-04-06_144020-removebg-preview.png') }}" id="op" alt="">  
                </div>
                <div class="col-10">
                    <div class="top-nav row ">
                        <div class="col-5"> 
                            <div id="google_translate_element"></div>
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

                        </div>
                        <div class="col-4">
                           
                                @php
                                    $nameParts = explode(' ', Auth::user()->name);
                                    $firstName = $nameParts[0];
                                    $lastName = $nameParts[count($nameParts) - 1];
                                @endphp
                            
                                <div class="" >
                                    @if (Auth::user()->profile_photo_path)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
                                    @else
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
                                    @endif
                                    <span class="id2">{{Auth::user()->name }}</span>
                                </div>
                        </div>
                        <div class="col-1"> 
                            <button>
                                <a href="">
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        <img class="icons" src="{{ asset('images/user.png') }}" alt="">
                                    </x-dropdown-link>
                                </a>
                            </button>
                        </div>
                        <div class="col-1">
                            <button>
                                <a href="">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}"
                                                     @click.prevent="$root.submit();">
                                            <img class="icons" src="{{ asset('images/power-off.png') }}" alt=""> 
                                        </x-dropdown-link>
                                    </form>
                                </a>  
                            </button>  
                        </div>
                        <div class="col-1 notification-btn position-relative"> 
                            <button>
                                <img class="icons" src="{{ asset('images/bouton-notifications.png') }}" alt=""> 
                            </button>
                            <span class="badge">{{Auth::User()->unreadNotifications()->count()}}</span>
                            <div class="dropdown position-absolute">
                                <ul class="dropdownn-menu dropdown-menu-right m-0 p-0">
                                    <li class="head text-light ">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12">
                                                <span>Notifications ({{Auth::User()->unreadNotifications()->count()}})</span>
                                                <a href="{{ route('readAll') }}" class="float-right text-light">Mark all as read</a>
                                            </div>
                                    </li>
                                    @foreach(Auth::User()->unreadNotifications as $notification)
                                    <li class="notification-box">
                                    <div class="">
                                    <strong class="text-infos"><a href="">{{$notification->data['email']}}</a> </strong>
                                    <div>
                                    @if($notification->data['email']=="Demande d'information" || $notification->data['email']=="Réclamation" )
                                    Une nouvelle réclamation est posée 
                                    @else
                                    à poser une demande d'inscription 
                                    @endif
                                    </div>
                                    <small class="text-warning">{{$notification->created_at}}</small>
                                    </div>
                                    </li>
                                    @endforeach
                                    <li class="footer text-center">
                                    <a href="" class="text-light">View All</a>
                                    </li>
                                    </ul>
                            </div>
                               
                               
                        </div>
                    </div>

          

                    @if (Auth::user()->role_id =="1" )
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('admin-dash')}}">
                          <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Tableau de bord</a>
                      </li>
                      <li class="nav-item" >
                        <a class="nav-link" href="{{ route('demandes_show') }}">
                          <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Demandes d'inscription</a>
                      </li>
                      <li class="nav-item" >
                        <a class="nav-link" href="{{ route('admin-users') }}">
                          <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Gestion utilisateurs</a>
                      </li>
                      <li class="nav-item" >
                        <a class="nav-link" href="{{ route('admin-reclams') }}">
                          <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Reclamations</a>
                      </li>

                      <li class="nav-item" >
                        <a class="nav-link" href="{{ route('profile.show') }}">
                          <img class="icon-nav" src="{{ asset('images/user.png') }}" title="réclamations icônes">Profil</a>
                      </li>
                    </ul>
                  @endif
                  
                 
                  @if (Auth::user()->role_id =="2" )
                  <ul class="navbar-nav">
                    <li class="nav-item pl-4 ">
                      <a class="nav-link" href="/admin-dashboard">
                        <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Tableau de bord</a>
                    </li>
                    <li class="nav-item pl-4 ">
                        <a class="nav-link" href="{{route('agent-reclame')}}">
                          <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Réclamations</a>
                      </li>
                    <li class="nav-item pl-4 ">
                      <a class="nav-link" href="{{ route('profile.show') }}">
                        <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Profil</a>
                    </li>
                  </ul>
                @endif
                

                @if (Auth::user()->role_id =="3" )
                <ul class="navbar-nav">
                  <li class="nav-item pl-4 ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Mes E-document</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('op_dum')}}">Consulter Declarations unique marchandise</a> <br>
                      <a class="dropdown-item" href="{{route('op_red')}}">Consulter comptes non-regularisés</a>
                      <a class="dropdown-item" href="{{route('or_red_d')}}">Consulter comptes non-regularisés(Detail)</a>
                    </div>
                  </li>
                  <li class="nav-item pl-4 ">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Réclamations</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/user/Nouvelle_reclamation">Nouvelle réclamation</a> <br>
                      <a class="dropdown-item" href="{{route('mes_réclamations')}}">Consulter réclamations </a> <br>
                    </div>
                  </li>
                  <li class="nav-item pl-4 ">
                    <a class="nav-link" href="{{ route('profile.show') }}">
                      <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Profil</a>
                  </li>
                </ul>
              @endif

              @if (Auth::user()->role_id =="4" )
              <ul class="navbar-nav">
                <li class="nav-item pl-4 ">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Mes E-document</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('situation_trans')}}">Consulter Situation transitaire</a> <br>
                  </div>
                </li>
                <li class="nav-item pl-4 ">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Réclamations</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/user/Nouvelle_reclamation">Nouvelle réclamation</a> <br>
                    <a class="dropdown-item" href="{{route('mes_réclamations')}}">Consulter réclamations </a> <br>
                  </div>
                </li>
                <li class="nav-item pl-4 ">
                  <a class="nav-link" href="{{ route('profile.show') }}">
                    <img class="icon-nav" src="{{ asset('images/reclamation.png') }}" title="réclamations icônes">Profil</a>
                </li>
              </ul>
            @endif          
          </div>  
        </div>
      </div>
    </div>
  </nav>
  
  <img src="{{ asset('images/3dgifmaker94044.gif') }}" id="gif" alt="">


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.querySelectorAll(".navbar-nav a.nav-link");
  
      links.forEach(function(link) {
        link.addEventListener("click", function(event) {
          var parentLi = this.parentNode;
          var activeLinks = document.querySelectorAll(".navbar-nav li.nav-item.active");
  
          activeLinks.forEach(function(activeLink) {
            activeLink.classList.remove("active");
          });
  
          parentLi.classList.add("active");
        });
      });
  
      var currentURL = window.location.href;
  
      links.forEach(function(link) {
        if (link.href === currentURL) {
          var parentLi = link.parentNode;
          parentLi.classList.add("active");
        }
      });
    });
  </script>