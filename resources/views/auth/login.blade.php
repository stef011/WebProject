@extends ('layout')

@section ('title')
Connexion BDE Strasbourg
@endsection

@section('css')
<link rel="stylesheet" href="/css/login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
@endsection

@section ('js')

@endsection

@section ('body')

<br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 text-center">
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Connectez vous à votre espace personnel</h4>
                <div class="card-body">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control  @error('emailc') is-invalid @enderror" name="emailc" id="emailc" placeholder="E-mail (votre E-mail du CESI)" value="{{ old('emailc') }}">
                            @error('emailc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control  @error('mdpc') is-invalid @enderror" name="mdpc" id="mdpc" placeholder="Mot de passe">{{ old('mdpc') }}</input>
                            @error('mdpc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                    <div class="mt-5 mb-3 mx-3 text-center text-white">Tu n'as pas encore de compte ? inscrit toi <a href="{{route('registerroute')}}">ici</a> !</div>
                </div>
            </div>
        </div>
    </div>
    @endsection