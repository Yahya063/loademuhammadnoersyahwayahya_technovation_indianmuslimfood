@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <div class="content">
            <img src="/images/logo penyelenggara (1).jpg" alt="Habesha Cuisine logo" style="max-width: 150px; max-height: 150px; width: 100%; height: 100%; object-fit: cover; background: transparent;">
            <img src="/images/logo penyelenggara (1).png" alt="Habesha Cuisine logo" style="max-width: 150px; max-height: 150px; width: 100%; height: 100%; object-fit: cover; background: transparent;">
            <img src="/images/logo penyelenggara (2).png" alt="Habesha Cuisine logo" style="max-width: 150px; max-height: 150px; width: 100%; height: 100%; object-fit: cover; background: transparent;">
            <img src="/images/logo penyelenggara (3).png" alt="Habesha Cuisine logo" style="max-width: 150px; max-height: 150px; width: 100%; height: 100%; object-fit: cover; background: transparent;">
            <img src="/images/logo penyelenggara (4).png" alt="Habesha Cuisine logo" style="max-width: 150px; max-height: 150px; width: 100%; height: 100%; object-fit: cover; background: transparent;">
            <div class="title m-b-md mt-5">
                Indian Muslim Food
            </div>
            <p class="mssg">{{ session('message') }}</p>
            <a href="{{route('foods.create')}}">Order Food</a>
        </div>
    </div>
@endsection
