@extends('layouts.app')

@section('content')
    <!-- Main content -->

    <div class="container mt-5 text-center text-light">

    
        <p class="h3 message-display text-success">{{ session('message') }}</p>

        @foreach($foods as $food)
        <div class="container mt-5 text-light">
            <div>
                <a class="" href="/food/<?= $food->id ?>">
                <h1 class="display-4">{{ $food->name }}</h1>
                <p class="h5"># {{ $food->category }}</p>
                <p class="mt-2 h5 ">{{ $food->description }}</p>
                </a>
            </div>
        </div>
        @endforeach

        <a class="btn btn-lg btn-primary m-5" href='/food/create'>Add New Recipe <i class="bi bi-file-earmark-plus"></i></a>
    </div>
    <p class="text-secondary text-center">&copy; 2022 Edvin Lindahl</p>
@endsection
