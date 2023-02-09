@extends('layouts.app')

@section('main-content')
    <main class="mb-4">
        <div class="container">
            <div class="row g-3">
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <div class="card h-100">
                            <img src="{{Vite::asset('resources/assets/img/cover.jpg')}}" class="img-fluid" alt="{{$movie->title}}">
                            <div class="card-content px-2 py-4">
                                <h5 class="card-title text-wrap overflow-wrap">
                                    {{$movie->title}}
                                </h5>
                                <h6 class="card-title">
                                    {{$movie->original_title}}
                                </h6>
                                <p class="card-text">
                                    Release: <span class="fw-bold">{{$movie->date}}</span>
                                </p>
                                <p class="card-text">
                                    Vote: <span class="fw-bold">{{round(($movie->vote)/2, 1)}}/5</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection