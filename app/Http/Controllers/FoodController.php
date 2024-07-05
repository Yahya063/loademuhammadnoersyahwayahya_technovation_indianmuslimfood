<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

use function Laravel\Prompts\error;

class FoodController extends Controller
{

    
    public function index()
    {
        $foods = Order::latest()->get();

        return view('foods.index', [
            'foods' => $foods
        ]);
    }


    public function show($id)
    {

        $food = Order::findOrFail($id);

        return view('foods.show', ['food' => $food]);
    }


    public function create()
    {
        return view('foods.create');
    }


    public function store()
    {

        $order = new Order();

        $order->name = request('name');
        $order->food = request('food');
        $order->drink = request('drink');
        $order->extras = request('extras');


        $order->save();


        return redirect('/')->with('message', 'Thank you for choosing us!! Your order has been submitted');
    }

    public function destroy($id) {
        $food = Order::findOrFail($id);
        $food->delete();

        return redirect('/foods');
    }
}
