@extends('layout')

@section('title')
    Admin page
@endsection


@section('body')

<div class="container justify-content-center">
    <a href="/admin/events" class="btn btn-dark" role="button">Evénements</a>
    <a href="/admin/products" class="btn btn-dark" role="button">Produits</a>
</div>

@endsection