@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-danger">
                        @foreach ($movies as $movie)
                        @dump($movie);
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection