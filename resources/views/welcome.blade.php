@extends ('layout')

@section ('body')

<div class="container-fluid window">
    <div class="row wlcmess">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div>Bienvenue sur le site du BDE de CESI Strasbourg</div>
        </div>
    </div>
</div>
<div class="container-fluid services">
    <div class="wlcmess mt20"> Nos services </div>

    <div class="row wlcfont ">
        <div class="col-md-3">
        </div>
        <div class="col-md-2">
            <div><i class="fas fa-shopping-cart fa-5x"></i></div>
            <div class="mt20"><a href="#!">Boutique en ligne</a></div>
        </div>
        <div class="col-md-2">
            <i class="far fa-calendar-alt fa-5x"></i>
            <div class="mt20"><a href="#!">Organisation des évenements</a></div>
        </div>
        <div class="col-md-2">
            <i class="far fa-lightbulb fa-5x"></i><br>
            <div class="mt20"><a href="#!">Donnez nous vos idées</a></div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
@endsection