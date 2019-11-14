@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/shop.css">
@endsection


@section('body')

    <form action="{{ route('product.index') }}">
        <div class="row" style="margin: 0px">
            <div class="col-md-4">
            <input class="form-control form-control-sm" type="search" name="q" value="{{ $q }}">
            </div>

            <div class="col-md-2">
            <select name="sortBy" class="form-control form-control-sm" value="{{ $sortBy }}">
                @foreach(['price'] as $col)
                <option @if($col == $sortBy) selected @endif value="{{ $col }}">{{ ucfirst($col) }}</option>
                @endforeach
            </select>
            </div>

            <div class="col-md-2">
            <select name="orderBy" class="form-control form-control-sm" value="{{ $orderBy }}">
                @foreach(['asc', 'desc'] as $order)
                <option @if($order == $orderBy) selected @endif value="{{ $order }}">{{ ucfirst($order) }}</option>
                @endforeach
            </select>
            </div>

            <div class="col-md-2">
            <select name="perPage" class="form-control form-control-sm" value="{{ $perPage }}">
                @foreach(['5','10','20','50'] as $page)
                <option @if($page == $perPage) selected @endif value="{{ $page }}">{{ $page }}</option>
                @endforeach
            </select>
            </div>

            <div class="col-md-2">
            <button type="submit" class="w-100 btn btn-sm bg-blue">Filter</button>
            </div>
        </div>
    </form>


    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="téléchargé.png" alt="Card image cap">
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



    {{ $products->links() }} 

        

@endsection