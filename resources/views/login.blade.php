@extends ('layout')

@section ('body')

<div class="row mt-3">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2 class="text-center"> Connectez vous à votre espace membre :</h2>
        <div class="component mt-5">
            <form class="text-center text-white mt-5">
                <input type="text" class="mx-5" placeholder="Identifiant">
            </form>
            <form class="text-center text-white mt-3">
                <input type="text" class="mx-5" placeholder="Mot de passe">

            </form>
            <div class="row mt-3">
                <div class="col-md-4"></div>
                <div class="buttonform text-center col-md-4"> Connexion </div>

            </div>
            <div class="mt-5 mb-3 mx-3 text-center text-white">Tu n'as pas encore de compte ? inscrit toi <a href="#!">ici</a> !</div>

        </div>
    </div>
</div>
</div>

@endsection