@extends('layouts.app')

@section('content')
<!-- Main content -->

<div class="container mt-5 text-center">
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
                    <input type="text" name="name" value="{{$food->name}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <input type="text" name="description" value="{{$food->description}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    @foreach($food->ingredients as $ingredient)
                        <label for="">Ingredients</label>
                        <input type="text" name="ingredients" value="{{$ingredient}}" class="form-control">
                    @endforeach
                </div>
                <div class="form-group mb-3">
                    <label for="">Instructions</label>
                    <input type="text" name="instruction" value="{{$food->instruction}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Update Recipe!</button>
                </div>

            </form>
            <!-- <form action="/food" method="POST">
                cross site refresh forgery
                <div>
                    @csrf
                    <label class="mt-5" for="name">Meal name:</label>
                    <br>
                    <input type="text" id="input" name="name">
                </div>
                <div>
                    <label class="mt-3" for="description">Description of meal:</label>
                    <br>
                    <textarea type="textarea" id="input" name="description"></textarea>
                </div>
                <div>
                    <fieldset>
                        <label class="mt-3">Ingredients:</label>
                        <br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                        <input type="text" class="input mt-2" name="ingredients[]"><br>
                    </fieldset>
                </div>
                <div>
                <label class="mt-3">Cooking instructions:</label>
                    <br>
                    <textarea type="textarea" id="input" name="instruction"></textarea>
                </div>
                <input type="submit" class="btn btn-lg btn-primary m-5">
                <br>
                <a class="btn btn-sm btn-primary mt-5 mb-5" href='/food'>Back to Menu <i class="bi bi-arrow-90deg-up"></i></a>
            </form>
            -->
        </div>
    </div>
</div>
@endsection