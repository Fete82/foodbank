@extends('layouts.app')

@section('content')
<!-- Main content -->

<div class="container mt-5 text-center">
    <div>
        <div>
            <h1 class="display-4">Create a new recipe!</h1>
        </div>
        <div>
            <form action="/food" method="POST">
                <!-- cross site refresh forgery -->
                <div>
                    @csrf
                    <label class="mt-5" for="name">Name of meal</label>
                    <br>
                    <input type="text" id="input" name="name">
                </div>
                <div class="mt-3">
                    <p>Category</p>
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Healthy</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Very Healthy</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Super Healthy</label>
                </div>
        </div>
        <div>
            <label class="mt-3" for="description">Description of meal</label>
            <br>
            <textarea type="textarea" id="input" name="description"></textarea>
        </div>
        <div>
            <label class="mt-3" for="ingredients">Ingredients</label>
            <br>
            <textarea type="textarea" id="input" name="ingredients"></textarea>
        </div>
        <div>
            <label class="mt-3">Cooking instructions</label>
            <br>
            <textarea type="textarea" id="input" name="instruction"></textarea>
        </div>
        <input type="submit" class="btn btn-lg btn-primary mt-5 bm-5">
        <br>
        <a class="btn btn-sm btn-primary mt-5 mb-5" href='/food'>Back to Menu <i class="bi bi-arrow-90deg-up"></i></a>
        </form>
    </div>
</div>
</div>
@endsection