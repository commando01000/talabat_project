<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('Frontend.become-a-partner.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:restaurants',
            'phone' => 'required',
            'type' => 'required',
        ]);

        Restaurant::create($request->all());

        return redirect()->route('restaurants.create')
            ->with('success', 'Restaurant created successfully.');
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:restaurants,email,' . $restaurant->id,
            'phone' => 'required',
            'type' => 'required',
        ]);

        $restaurant->update($request->all());

        return redirect()->route('restaurants.index')
            ->with('success', 'Restaurant updated successfully.');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')
            ->with('success', 'Restaurant deleted successfully.');
    }
}
