@extends('layouts.layout')

@section('main')
<!-- Main content -->

<div class="container mt-5 text-center">
    <div>
        <div>
            <h1 class="display-4">Create a recipe!</h1>
        </div>
        <div>
            <form action="/food" method="POST">
                <!-- cross site refresh forgery -->
                <div>
                    @csrf
                    <label class="mt-5" for="name">Course name:</label>
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
                <label class="mt-3" for="instructions">Cooking instructions:</label>
                    <br>
                    <textarea type="textarea" id="input" name="instructions"></textarea>
                </div>
                <input type="submit" class="btn btn-lg btn-primary m-5">
            </form>
        </div>
    </div>
</div>
@endsection