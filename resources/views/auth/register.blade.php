@extends ('layout')

@section ('title')
Inscription BDE Strasbourg
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
                <h4 class="card-header">Formulaire d'inscription</h4>
                <div class="card-body">
                    <form action="{{ url('register') }}" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom" value="{{ old('nom') }}">
                            @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="name" placeholder="Prénom" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-mail (votre E-mail du CESI)" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Mot de passe" type="password" required>{{ old('password') }}</input>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confimation du mot de passe">
                        </div>
                        <select class=form-control id="location_id" name="location_id">
                            @foreach (App\Location::all() as $location)
                            <option value={{ $location->id }}>{{ $location->campus }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <button type="submit" class="btn mt-3 btn-secondary col-md-4">Envoyer !</button>
                </div>
                <div class="mt-5 mb-3 mx-3 text-center text-white">Tu as déjà un compte ? Conecte toi <a href="{{route('login')}}">ici</a> !</div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection