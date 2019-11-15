@extends('layout')

@section('title')
    event creation
@endsection

@section('body')

    <form action="{{action('AdminController@eventSave')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>title</label>
            <input type="title" name="title" id="title" value="">            
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="description" name="description" id="description" value="">
        </div> 
        <div class="form-group">
            <label>recurrent</label>
            <input type="text" name="recurrent" id="recurrent" value="">
        </div> 
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" id="price" value="">
        </div> 
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>

@endsection