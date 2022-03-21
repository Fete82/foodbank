@extends('layouts.app')

@section('content')
    <!-- Main content -->

    <div class="container w-50 mt-5 text-center">
        <h1 class="display-3 p-3">Meals</h1>
        <h3 class="display-6">Index of recipes</h3>

        <p class="h3 message-display text-success">{{ session('message') }}</p>

        @foreach($foods as $food)
        <div class="container mt-5">
            <div>
                <a href="/food/<?= $food->id ?>">
                <p class="h3">{{ $food->name }}</h3>
                <p class="h6 text-primary">#{{ $food->category }}</p>
                <p class="mt-2">{{ $food->description }}</p>
                </a>
            </div>
        </div>
        @endforeach

        <a class="btn btn-lg btn-primary m-5" href='/food/create'>Add New Recipe <i class="bi bi-file-earmark-plus"></i></a>
    </div>
@endsection
