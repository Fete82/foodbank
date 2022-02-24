@extends('layouts.layout')

@section('main')
<style>
    .home-body {
        background-image: url('img/background-cows.jpg');
        background-size: 2000px auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        object-fit: cover;

    }

    .footer-fixed {
        color: rgb(255, 255, 255);
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 2.5rem;      
    }

</style>
<body class="home-body">
    <!-- Welcoming page -->
    <div class="align-middle text-center mt-5 text-dark">
        <h1 class="display-1 p-3">Foodbank</h1>
        <h1 class="display-6">Robot Cows for Eating - The Future of Food</h1>

        <div>
            <a class="btn btn-lg btn-success mt-5" href='food'>Browse Recipes</a>
        </div>
    </div>
    <footer class="footer-fixed">
        <p>&copy; 2022 Edvin Lindahl</p>
    </footer>
</body>
@endsection
