@extends('layouts.layout')

@section('main')
    <!-- Main content -->

    <div class="container w-50 mt-5 text-center">
        <h1 class="display-4 p-3">Selection of Nutritious Mechanical Meals</h1>
        <a class="btn btn-lg btn-info m-5" href='/food/create'>Add New Recipe</a>
        @foreach($foods as $food)
        <div class="container">
            <div>
                <a href="/food/<?= $food->id ?>"><h3 class="p-1">{{ $food->name }}</h3></a>
            </div>
            <div>
                <p>{{ $food->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
