@extends('layouts.layout')

@section('main')
<!-- Main content -->

<div class="container mt-5 text-center">
    <div>
        <div>
            <h1 class="display-4">Create A Recipe!</h1>
        </div>
        <div>
            <form action="/food" method="POST">
                <!-- cross site refresh forgery -->
                <div>
                    @csrf
                    <label class="mt-5" for="name">Name Of Meal:</label>
                    <br>
                    <input type="text" id="input" name="name">
                </div>
                <div>
                    <label class="mt-5" for="description">Description of Meal:</label>
                    <br>
                    <textarea type="textarea" id="input" name="description"></textarea>
                </div>
                <input type="submit" class="btn btn-lg btn-primary m-5">
            </form>
        </div>
    </div>
</div>
@endsection