@extends('layout')

@section('title')
    Evénements
@endsection

@section('body')
    <div class="container">

        <ul>
            @foreach ($events as $event)
            <li>
                <a href="/event/{{ $event->id }}"><h3>{{ $event->title }}</h3></a>
                <img src="{{ $event->illustration }}" alt="Image">
                <p>{{ $event->description }}</p>
                <a href="/album/{{ $event->id }}">Album photo</a>
                <p>{{ $event->created_at }}</p>
                @if ($event->recurrent == true)
                    <p {{-- Je veux du rouge là, enfin faites ça joli svp <3 --}} > Annuel </p>
                @endif
            </li>
            @endforeach
        </ul>
        
        <form method="GET" action="{{ url()->current() }}" >
            <select name="perPage" onchange="if (this.value != 0){this.form.submit();}">
                    <option value="0">Nombre d'articles par page</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
            </select>
        </form>
            
        {{ $events->links() }}
            
    </div>

@endsection
