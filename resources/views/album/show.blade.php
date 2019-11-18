@extends('layout')

@section('title')
    Album Photo {{ $pictures->isEmpty()?:$pictures->first()->event->title }}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/album.css">
@endsection

@section('js')
    
@endsection

@section('body')
@if(!$pictures->isEmpty())
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-keyboard="true" data-touch="true">
    <ol class="carousel-indicators">
        @foreach ($pictures as $indexKey => $picture)
        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $indexKey + 1 }}" class="@if($loop->first) active @endif"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($pictures as $picture)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{ asset('storage/images/' . $picture->image) }}" class="d-block w-100" alt="Photo {{ $picture->first()->event->title }}">
                <div class="carousel-caption d-none d-md-block">

                  {{-- //TODO: Link the view with username --}}
                    <h5>{{ $picture->userId  }}</h5>
                    <p>Photo de l'événement {{ $picture->first()->event->title }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="gallery" id="gallery">
  @foreach ($pictures as $picture)
      
  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="{{ asset('storage/images/' . $picture->image) }}" alt="Photo {{ $picture->first()->event->title }}">
  </div>
  <!-- Grid column -->
  @endforeach

  </div>
@else

<p>Il n'y a pas d'images dans cet album pour l'instant</p>

@endif


@endsection
