<!DOCTYPE html>
<html lang="en">
<head>
    
    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('meta')

    <title>@yield('title') - Site du BDE de Strasbourg</title>

    {{-- CSS --}}

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/fontawesome/all.css">
    <link rel="stylesheet" href="/css/welcome.css">
    @yield('css')

    {{-- JavaScript --}}

    <script src="/js/bootstrap/bootstrap.js"></script>
    @yield('js')

</head>

<body class="d-flex flex-column">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark noir">
      <div class="d-flex">
        <a class="navbar-brand mr-1" href="/">BDE Strasbourg</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
        <div class="navbar-collapse collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav items">
              <li class="nav-item {{ Request::is('/')? 'active' : ''}}">
                  <a class="nav-link" href="/">Acceuil</a>
              </li>
              <li class="nav-item {{ Request::is('events*')? 'active' : ''}}">
                  <a class="nav-link" href="/events">Evénements</a>
              </li>
              <li class="nav-item {{ Request::is('shop*')? 'active' : ''}}">
                  <a class="nav-link" href="/shop">Boutique</a>
              </li>
              <li class="nav-item {{ Request::is('ideas*')? 'active' : ''}}">
                  <a class="nav-link" href="/ideas">Idées</a>
              </li>              
            </ul> 
        </div>
        <div>
          <button type="button" class="btn btn-light connexion mt-1  text-right">Connexion</button>
        </div>
    </nav>       
  </header>
       

  <main id="page-content" >
    @yield('body')
  </main>
 

  <footer id="sticky-footer" class="py-4 text-white-50">

    <div class="container-fluid text-center text-md-left">


      <div class="row">


        <div class="col-md-6 ">


          <h5 class="text-uppercase font-weight-bold">Quelques rappels</h5>
          <p>Ce site est à la disposition de tous les élèves du CESI, du corps enseignant ainsi que du personnel administratif. Il est impératif que chacun soit respecté et se sente bienvenu sur cette platforme. Tout écart sera sanctionné (de la supression du poste au conseil de dicipline) </p>

        </div>
        <div class="col-md-1 ">
    </div>

        <div class="col-md-3 ">


          <h5 class="text-uppercase font-weight-bold">Liens utiles</h5>
          <li>
          <a href="#!">Mentions légales</a>
        </li>
        <li>
          <a href="#!">Nous contacter</a>
        </li>
        </div>
        <div class="col-md-2 ">
        <i class="fab fa-facebook fa-3x"></i>
        <i class="fab fa-instagram fa-3x"></i>
        <i class="fab fa-snapchat fa-3x"></i>
        <i class="fab fa-twitter fa-3x"></i>
        </div>
      </div>
    </div>


      <div class="footer-copyright text-center py-3">
        <p>Site développé par les élèves de la filière informatique du CESI</p>
      </div>

  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>