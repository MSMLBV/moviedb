@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-deck">
            @foreach($movies as $movie)
                <div class="card">
                    <img src="/storage/{{$movie->image}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">{{substr($movie->plot, 0, 90)}}</p>
                        <a href="/movies/{{$movie->id}}" class="btn btn-primary">More info</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{$movies->links()}}
    </div>
@endsection