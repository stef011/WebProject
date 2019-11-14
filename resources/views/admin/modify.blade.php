@extends('layout')

@section('body')

    <form action="{{action('AdminController@eventUpdate', [$event->id, 'update'])}}" method="POST">
        @csrf
        <div class="form-group">
            <label>title</label>
            <input type="title" id="title" value="{{$event->title}}">            
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="description" id="description" value="{{$event->description}}">
        </div> 
        <div class="form-group">
            <label>recurrent</label>
            <input type="text" id="recurrent" value="{{$event->recurrent}}">
        </div> 
        <div class="form-group">
            <label>price</label>
            <input type="text" id="price" value="{{$event->price}}">
        </div> 
        <div class="form-group">
            <label>created_at</label>
            <input type="text" id="created_at" value="{{$event->created_at}}">
        </div> 
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>

@endsection