@extends('layouts.app')
@section('content')
<div class="wrapper create-food">
    <h1>Enter your order</h1>
    <form action="/foods" method="POST">
        @csrf

        <label for="name">Your Full Name:</label>
        <input type="text" name="name" id="name"><br>

        <label for="type">Choose Food:</label>
        <select name="food" id="food">
            <option value="Doro Wot">Doro Wot (ዶሮ ወጥ)</option>
            <option value="Kitfo">Kitfo (ክትፎ)</option>
            <option value="Tibs">Tibs (ጥብስ)</option>
            <option value="Shiro">Shiro (ሽሮ)</option>
            <option value="Beyaynet">Beyaynet (በያይነት)</option>
        </select><br>

        <label for="type">Choose Drink</label>
        <select name="drink" id="drink">
            <option value="Water">Water (ውሃ)</option>
            <option value="Ambo Water">Ambo Water (አምቦ ውሃ)</option>
            <option value="Tej">Tej (ጠጅ)</option>
            <option value="Beer">Beer (ቢራ)</option>
        </select><br>

        <label for="">Extras</label><br>
        <input type="checkbox" name="extras[]" value="Injera">Injera (እንጀራ)<br>
        <input type="checkbox" name="extras[]" value="Habesha Bread">Habesha Bread (ድፎ ዳቦ)<br>
        <input type="checkbox" name="extras[]" value="Kocho">Kocho (ቆጮ)<br>
<br>
<input type="submit" value="Submit Order">

    </form>
</div>

@endsection
