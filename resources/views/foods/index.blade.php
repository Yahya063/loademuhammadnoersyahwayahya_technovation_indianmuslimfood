@extends('layouts.app')
@section('content')
    <div class="wrapper food-index">
        <h1>Orders</h1>

        @foreach ($foods as $food)
            <div class="food-item">
               <ul>
                <li> <img src="/images/logo.jpg" alt="Mesob">
                <h3><a href="/foods/{{ $food->id }}"> {{ $food->name }}</a></h3>
            </li>
            </ul>
            </div>
        @endforeach

    </div>
@endsection
