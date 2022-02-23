@extends('layouts.layout')

@section('home')
<style>
    .home-body {
        background-image: url('img/background-cows.jpg');
        background-size: 2000px auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        object-fit: cover;

    }

</style>
<body class="home-body">
    <!-- Welcoming page -->
    <div class="align-middle text-center mt-5 text-dark">
        <h1 class="display-1 p-3">Foodbank</h1>
        <h1 class="display-6">Animals are also food</h1>

        <div>
            <a class="btn btn-lg btn-primary mt-5" href='food'>Browse foods</a>
        </div>
    </div>
</body>
@endsection
