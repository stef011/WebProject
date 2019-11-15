@extends('layout')

@section('title')
    Evénements
@endsection

@section('css')
    <link rel="stylesheet" href="/css/event.css">
@endsection

@section('body')
    <div class="container">

            <div class="container">
                <div class="row">
                @foreach ($events as $event)
                    <div class="card d-inline-block">
                        <img src="{{ $event->illustration }}" alt="Image" class="card-img-top" aria-placeholder="Photo de l'événement">
                        <div class="card-body d-flex flex-column">
                            <a href="events/{{ $event->id }}" class="card-title stretched-link"><h3>{{ $event->title }}</h3></a>
                            <p class="h-25 card-text mb-1 text-wrap overflow-hidden">{{ substr($event->description, 0, 40) }}</p>
                            <p class="text-muted"><small>{{ $event->created_at }}</small></p>
                            <p class="text-danger align-self-center" > {{ $event->recurrent == true ? 'Annuel': 'Ponctuel' }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="/album/{{ $event->id }}" class="btn btn-secondary mb-1">Album photo</a>
                            <a href="events/{{ $event->id }}/registration" class="btn btn-primary">S'inscrire : {{ $event->price == 0 ? 'Gratuit' : str_replace('.',',', $event->price). '€' }}</a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        
        <form method="GET" action="{{ url()->current() }}" >
            <select name="perPage" onchange="if (this.value != 0){this.form.submit();}">
                    <option value="0">Nombre d'événements par page</option>
                    <option value="6">6</option>
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="24">24</option>
                    <option value="30">30</option>
            </select>
        </form>
            
        {{ $events->links() }}
            
    </div>

@endsection
