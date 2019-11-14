@extends ('layout')

@section ('body')


<div class="row mt-3">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2 class="text-center"> Connectez vous à votre espace membre :</h2>
        <div class="component mt-5">
            <form class="text-center text-white mt-5">
                Identifiant : <input type="text">
            </form>
            <form class="text-center text-white mt-3">
                Mot de passe : <input type="text">
            </form>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="buttonform text-center my-2 col-md-4"> Connexion </div>
                <div class="col-md-4"></div>
            </div>
            <div class="mt-5 text-center text-white">Tu n'as pas encore de compte ? inscrit toi <a href="#!">ici</a> !</div>

        </div>
    </div>
</div>
</div>
@endsection