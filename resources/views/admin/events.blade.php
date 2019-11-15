@extends('layout')

@section('title')
    Events admin page
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('body')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif

    

    <table>
        <thead>
            <tr>
                <th style="border: 1px solid #333">Title</th>
                <th style="border: 1px solid #333">Description</th>
                <th style="border: 1px solid #333">recurrent</th>
                <th style="border: 1px solid #333">price</th>
                <th style="border: 1px solid #333">created_at</th>
                <th><a href="{{action('AdminController@eventCreate')}}" class="btn btn-dark" role="button">+</a></th>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td style="border: 1px solid #333">{{$event->title}}</td>
                    <td style="border: 1px solid #333">{{$event->description}}</td>
                    <td style="border: 1px solid #333">{{$event->recurrent}}</td>
                    <td style="border: 1px solid #333">{{$event->price}}</td>
                    <td style="border: 1px solid #333">{{$event->created_at}}</td>
                    <td style="border: 1px solid #333">
                        <a href="{{action('AdminController@eventModify', [$event->id, 'modify'])}}" class="btn btn-dark" role="button">Modify</a>
                        <a href="{{action('AdminController@eventDelete', [$event->id, 'delete'])}}" class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $events->links() }} 


@endsection