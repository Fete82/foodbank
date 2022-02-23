@extends('layouts.layout')

@section('main')
    <!-- Main content -->

    <div class="container mt-5 text-center">
        <h1>Foodbank</h1>
        <h2>Select From Our Nutritious Meals:</h2>

        @foreach($foods as $food)
        <div>
            <h3>{{ $food->id }} {{ $food->name }}</h3> <p>{{ $food->description }}</p>
        </div>
        @endforeach
    </div>
@endsection
