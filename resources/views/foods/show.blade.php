@extends('layouts.app')
@section('content')
    <div class="wrapper food-details">
        <h1>Order for {{ $food->name }}</h1>
        <p class="type">Food - {{ $food->food }}</p>
        <p class="base">Drink - {{ $food->drink }}</p>
        <p class="extras">Extras</p>
        <ul>
            @foreach ($food->extras as $extra)
                <li>
                    {{ $extra }}
                </li>
            @endforeach
        </ul>
        <form action="{{route('foods.destroy', $food->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Order Served</button>
        </form>
    </div>

    <a href="/foods" class="back">Back to all orders</a>
@endsection
