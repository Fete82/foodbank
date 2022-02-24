@extends('layouts.layout')

@section('main')
    <!-- Main content -->

    <div class="container w-50 mt-5 text-center">
        <h1>Foodbank</h1>
        <h2 class="p-4">Select From Our Nutritious Meals</h2>

        @foreach($foods as $food)
        <div class="container">
            <div>
                <h3 class="p-1">{{ $food->name }}</h3> 
            </div>
            <div>
                <p>{{ $food->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
