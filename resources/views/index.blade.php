@extends('layouts.layout')

@section('home')
<style>
    .home-body {
        background-image: url('img/hotdog-banner.jpg');
        background-size: 2000px auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;

    }
</style>
<body class="home-body">
    <!-- Welcoming page -->
    <div class="container mt-3 text-center">
        <h1>Foodbank</h1>
        <h3>Probably The Most Nutritional Food In The World</h3>
    </div>
</body>
@endsection
