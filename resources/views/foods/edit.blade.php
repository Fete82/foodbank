@extends('layouts.app')

@section('content')
<!-- Main content -->

<div class="container mt-5 w-50 text-center">
    <div>
        <div>
            <h1 class="display-4">Edit recipe</h1>
        </div>
        <div>
            <form action="{{ url('update-food/'.$food->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="">Recipe name</label>
                    <input type="text" id="input" name="name" value="{{$food->name}}" class="form-control">
                </div>
                <div>
                <label for="">Category</label>
                </div>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="category" value="Healthy" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio1">Healthy</label>

                    <input type="radio" class="btn-check" name="category" value="Very Healthy" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Very Healthy</label>

                    <input type="radio" class="btn-check" name="category" value="Super Healthy" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Super Healthy</label>
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <input type="text" id="input" name="description" value="{{$food->description}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Ingredients</label>
                    <input type="text" id="input" name="ingredients" value="{{$food->ingredients}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Instructions</label>
                    <input type="text" id="input" name="instruction" value="{{$food->instruction}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary mt-3">Update Recipe!</button>
                </div>
                <a class="btn btn-sm btn-primary mt-3 mb-5" href='/food'>Back to Menu <i class="bi bi-arrow-90deg-up"></i></a>

            </form>
        </div>
    </div>
</div>
@endsection