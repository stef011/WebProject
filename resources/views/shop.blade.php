@extends('layout')

@section('body')


    <div class="container">
        <div class="row">
        @foreach($products as $product)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="btn btn-primary">{{$product->price}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




@endsection