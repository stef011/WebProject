@extends('layout')

@section('title')
    events admin
@endsection

@section('body')

    <table>
        <thead>
            <tr>
                <th style="border: 1px solid #333">Title</th>
                <th style="border: 1px solid #333">Description</th>
                <th style="border: 1px solid #333">price</th>
                <th style="border: 1px solid #333">stock</th>
                <th style="border: 1px solid #333">created_at</th>
                <th><a href="{{action('AdminController@productCreate')}}" class="btn btn-dark" role="button">+</a></th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td style="border: 1px solid #333">{{$product->title}}</td>
                    <td style="border: 1px solid #333">{{$product->description}}</td>
                    <td style="border: 1px solid #333">{{$product->price}}</td>
                    <td style="border: 1px solid #333">{{$product->stock}}</td>
                    <td style="border: 1px solid #333">{{$product->created_at}}</td>
                    <td style="border: 1px solid #333">
                        <a href="{{action('AdminController@productModify', [$product->id, 'modify'])}}" class="btn btn-dark" role="button">Modify</a>
                        <a href="{{action('AdminController@productDelete', [$product->id, 'delete'])}}" class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }} 

@endsection