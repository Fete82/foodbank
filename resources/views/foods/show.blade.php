@extends('layouts.app')

@section('content')
<!-- Main content -->

<div class="container mt-5 text-center">
    <h1 class="display-5">Recipe</h1>
    <h1 class="display-1">{{ $food->name }}</h1>
    <p>Added {{ $food->created_at }}</p>
    <div class="container w-50 mt-5">{{$food->description}}</div>
    <!-- NUTRITION PARAM 
    <div class="container w-50 mt-5">{{$food->nutrition ?: 'nutrition- 0'}}</div>
    -->
    <div class="container w-50 mt-5">
        <p class="display-6"> Ingredients</p>
        <ul class="list-group">
            @foreach($food->ingredients as $ingredient)
            <li class="list-group-item">{{ $ingredient ?: '*'}}</li>
            @endforeach
        </ul>
    </div>
    <p class="display-6 mt-5"> Instructions</p>
    <div class="container w-50 mt-2 mb-5">{{$food->instruction}}</div>
    <form action="/food/{{$food->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn-sm btn-danger">Remove Recipe <i class="bi bi-shield"></i></button>
    </form>

    <a class="btn btn-sm btn-primary mt-5 mb-5" href='/food'>Back to Menu <i class="bi bi-arrow-90deg-up"></i></a>



</div>
@endsection