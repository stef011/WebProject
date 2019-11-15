@extends('layout')

@section('title')
    Evénements
@endsection

@section('body')
    <div class="container">


        <div class="container">
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ $event->illustration }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/event/{{ $event->id }}"><h3>{{ $event->title }}</h3></a></h5>
                            <p class="card-text">{{$event->description}}</p>
                            <a href="/album/{{ $event->id }}">Album photo</a>
                            @if ($event->recurrent == true)
                                <p {{-- Je veux du rouge là, enfin faites ça joli svp <3 --}} > Annuel </p>
                            @endif
                            <a href="#" class="btn btn-primary">plus d'infos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        
        <form method="GET" action="{{ url()->current() }}" >
            <select name="perPage" onchange="if (this.value != 0){this.form.submit();}">
                    <option value="0">Nombre d'événements par page</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
            </select>
        </form>
            
        {{ $events->links() }}
            
    </div>

@endsection
