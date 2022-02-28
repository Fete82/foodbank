@extends('layouts.app')

@section('content')
<body class="home-body">
    <!-- Welcoming page -->
    <div class="align-middle text-center mt-5 text-dark">
        <h1 class="display-1 p-3">Foodbank</h1>
        <h1 class="display-6">Cows are mostly food</h1>

        <div>
            <a class="btn btn-lg btn-success mt-5" href='food'>Browse Recipes</a>
            <a class="btn btn-lg btn-primary mt-5" href='/food/create'>Add New Recipe</a>
        </div>
    </div>
    <footer class="footer-fixed text-center fixed-bottom">
        <p>&copy; 2022 Edvin Lindahl</p>
    </footer>
</body>
@endsection
