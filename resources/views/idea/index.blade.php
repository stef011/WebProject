@extends('layout')

@section('title')
    
@endsection

@section('body')
<ul>
    @foreach ($ideas as $idea)
        <li>
            <h3>{{ $idea->name }}</h3>
            <p>{{$idea->description }}</p>
            <p class="alert-success">{{ $idea->upVotesNumber() }}</p>
            <p class="alert-danger">{{ $idea->downVotesNumber() }}</p>
        </li>
    @endforeach
</ul>

<form method="GET" action="{{ url()->current() }}" >
            <select name="perPage" onchange="if (this.value != 0){this.form.submit();}">
                    <option value="0">Nombre d'événements par page</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
            </select>
        </form>

{{ $ideas->links() }}
@endsection