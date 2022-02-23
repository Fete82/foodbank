@extends('layouts.layout')

@section('main')
    <!-- Main content -->

    <div class="container mt-5 text-center">
        <h1>Foodbank</h1>
        <h2>Select From Our Nutritious Meals:</h2>

        @foreach($foods as $food)
        <div>
           
            <h6> {{$loop->index}} - {{ $food['name'] }}</h6>
        </div>
        @endforeach
    </div>
@endsection
