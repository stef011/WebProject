<!DOCTYPE html>
<html lang="en">
<head>
    
    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('meta')

    <title>Site du BDE de Strasbourg</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    @yield('css')

    {{-- JavaScript --}}

    <script src="js/bootstrap.js"></script>
    @yield('js')

</head>

    <header style="background-color:#000000; color:white; padding-top:20px;">
    <div class="container-fluid text-center text-md-left">
    <div class="row">
    <div class="col-md-2 ">
    <h1>BDE CESI Strasbourg</h1>
</div>
<div class="col-md-2 ">
</div>
<div class="col-md-6 ">
    <h2>Acceuil Evénements Boutique Boîte à idées</h2> 
</div>
</div>
</div>
    </header>

    <body>
        <div>
            body
</div>
    @yield('body')
    </body>

    <footer style="background-color:#000000; color:white; padding-top:20px;">
<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 ">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">Quelques rappels</h5>
      <p>Ce site est à la disposition de tous les élèves du CESI, du corps enseignant ainsi que du personnel administratif. Il est impératif que chacun soit respecté et se sente bienvenu sur cette platforme. Tout écart sera sanctionné (de la supression du poste au conseil de dicipline) </p>

    </div>
    <div class="col-md-1 ">
</div>
    <!-- Grid column -->
    <div class="col-md-3 ">

      <!-- Content -->
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

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p>Site développé par les élèves de la filière informatique du CESI</p>
  </div>
  <!-- Copyright -->
    </footer>

</html>