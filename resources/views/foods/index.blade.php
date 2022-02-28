@extends('layouts.app')

@section('content')
    <!-- Main content -->

    <div class="container w-50 mt-5 text-center">
        <h1 class="display-4 p-3">Selection of meals</h1>

        <p class="message-display text-danger">{{ session('message') }}</p>

        @foreach($foods as $food)
        <div class="container">
            <div>
                <a href="/food/<?= $food->id ?>">
                <h3 class="p-1">{{ $food->name }}</h3>
                <p>{{ $food->description }}</p>

</a>
            </div>
        </div>
        @endforeach

        <a class="btn btn-lg btn-primary m-5" href='/food/create'>Add New Recipe <i class="bi bi-file-earmark-plus"></i></a>
    </div>
@endsection
