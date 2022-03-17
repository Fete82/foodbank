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
                    <label for="">Instructions</label>
                    <input type="text" name="instruction" value="{{$food->instruction}}" class="form-control">
                </div>
                <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Update Recipe!</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection