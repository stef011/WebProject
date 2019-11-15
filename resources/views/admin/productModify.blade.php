@extends('layout')

@section('body')

    <form action="{{action('AdminController@productUpdate', [$product->id, 'update'])}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>title</label>
            <input type="title" name="title" id="title" value="{{$product->title}}">            
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="description" name="description" id="description" value="{{$product->description}}">
        </div> 
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" id="price" value="{{$product->price}}">
        </div> 
        <div class="form-group">
            <label>stock</label>
            <input type="text" name="stock" id="stock" value="{{$product->stock}}">
        </div> 
        <div class="form-group">
            <label>created_at</label>
            <input type="text" name="created_at" id="created_at" value="{{$product->created_at}}">
        </div> 
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>

@endsection