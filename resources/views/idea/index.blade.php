@extends('layout')

@section('title')
    Idées
@endsection

@section('body')

    @foreach ($ideas as $idea)
        <li>
            <h3>{{ $idea->name }}</h3>
            <p>{{$idea->description }}</p>
            <p class="alert-success">{{ $idea->upVotesNumber() }}</p>
            <p class="alert-danger">{{ $idea->downVotesNumber() }}</p>
        </li>


    @endforeach


    <div class="container">
                <div class="row">
                @foreach ($ideas as $idea)
                    <div class="card d-inline-block">
                        <div class="card-body d-flex flex-column">
                            <a href="events/{{ $idea->id }}" class="card-title stretched-link"><h3>{{ $idea->title }}</h3></a>
                            <p class="h-25 card-text mb-1 text-wrap overflow-hidden">{{ $idea->description }}</p>
                            <p class="text-muted"><small>{{ $idea->created_at }}</small></p>
                            <p class="text-danger align-self-center" > {{ $idea->recurrent == true ? 'Annuel': 'Ponctuel' }}</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success mb-1">UpVote <i class="fas fa-chevron-circle-up"> {{ $idea->upVotesNumber() }}</i></button>
                            <a href="" class="btn btn-danger">DownVote <i class="fas fa-chevron-circle-down"> {{ $idea->downVotesNumber() }}</i></a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>

<form method="GET" action="{{ url()->current() }}" >
            <select name="perPage" onchange="if (this.value != 0){this.form.submit();}">
                    <option value="0">Nombre d'idées par page</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
            </select>
        </form>

{{ $ideas->links() }}
@endsection