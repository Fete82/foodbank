@extends('layouts.layout')

@section('main')
    <!-- Main content -->

    <div class="container mt-5 text-center">
        <h1>Recipe</h1>
    </div>
    <div class="container">
        Food list - {{ $id }}
    </div>
@endsection
