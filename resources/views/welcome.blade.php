@extends('layouts.app')

@section('content')


    <!-- Welcoming page -->
    <div class="align-middle text-center mt-5 text-light">
        <h1 class="display-1 pt-5 pb-3">Foodbank</h1>
        <h1 class="display-6">Cows are mostly food</h1>

        <div>
            <a class="btn btn-lg btn-primary mt-5 mx-1" href='food'>Browse Recipes</a>
            <a class="btn btn-lg btn-primary mt-5 mx-1" href='/food/create'>Add New Recipe</a>
        </div>
    </div>
    <footer class="footer-fixed text-center fixed-bottom">
        <p class="text-secondary">&copy; 2022 Edvin Lindahl</p>
    </footer>
</div>

@endsection