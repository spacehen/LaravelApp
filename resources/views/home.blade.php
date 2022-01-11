@extends('layouts.app')

@section('content')
<div class="container">

    <div class="align-center pt-3">
        <img src="/image/laravel.png" class="img-size">
    </div>

    <div class="align-center pt-3">
        <h2>Welcome, {{ Auth::user()->username }}</h2>
    </div>
    <indicator></indicator>
    <div class="align-center pt-2">
        <h2>Swipe</h2>
    </div>
    <notification></notification>

</div>


@endsection