@extends('layouts.app')

@section('content')
<!-- Main content -->

<div class="container mt-5 text-center">
    <h1 class="display-5">Recipe</h1>
    <h1 class="display-1">{{ $food->name }}</h1>
    <p class="mt-4"><strong>Created by <i>{{ $food->user->name }}</i> on {{ $food->created_at }}</strong></p>
    <p class="mt-1 text-primary"><strong>#{{ $food->category }}</strong></p>
    <div class="container w-50 mt-1"><i>{{$food->description}}</i></div>
    <p class="display-6 mt-5">Ingredients</p>
    <div class="h4 container w-50 mt-2 mb-5">{{$food->ingredients}}</div>
    <p class="display-6 mt-5"> Instructions</p>
    <div class="container w-50 mt-2 mb-5">{{$food->instruction}}</div>
    <div class="show-buttons">
        <form action="/food/{{$food->id}}" method="">
            @csrf
            @method('UPDATE')
            <a href="{{ url('food/edit/'.$food->id) }}" class="btn btn-primary m-2">Edit Recipe <i class="bi bi-shield"></i></a>
        </form>
        <form action="/food/{{$food->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-2">Remove Recipe <i class="bi bi-shield"></i></button>
        </form>
    </div>

    <a class="btn btn-sm btn-primary mt-5 mb-5" href='/food'>Back to Menu <i class="bi bi-arrow-90deg-up"></i></a>



</div>
@endsection