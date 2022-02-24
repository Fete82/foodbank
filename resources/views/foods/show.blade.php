@extends('layouts.layout')

@section('main')
<!-- Main content -->

<div class="container mt-5 text-center">
    <h1 class="display-5">Recipe</h1>
    <h1 class="display-1">{{ $food->name }}</h1>
    <div class="container w-50 mt-5">{{$food->description}}</div>

    <a class="btn btn-sm btn-primary mt-5" href='/food'>Back to Menu</a>



</div>
@endsection