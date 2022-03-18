<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Auth;

class FoodController extends Controller
{
    // Action: Index All Recipes
    public function index()
    {

        $foods = Food::orderBy('id', 'asc')->get();

        return view('foods/index', [
            'foods' => $foods
        ]);
    }

    // Action: Show
    public function show($id)
    {
        // findOrFail, instead of find, so that it displays 404 when attempting to reach non-existant food.
        $food = Food::findOrFail($id);

        return view('foods/show', ['food' => $food]);
    }

    // Action: Create new recipe
    public function create()
    {
        return view('foods/create');
    }

    public function store()
    {
        $food = new Food();

        $food->name = request('name');
        $food->description = request('description');
        $food->ingredients = request('ingredients');
        $food->instruction = request('instruction');
        $food->category = request('category');
        // Binds user id to post:
        $food->user_id = Auth::user()->id;

        $food->save();

        return redirect('/food')->with('message', 'Recipe added successfully!');
    }
    // MAKE EDIT THING
    public function edit($id)
    {
        $food = Food::find($id);
        return view('foods/edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        $food = Food::find($id);

        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->ingredients = $request->input('ingredients');
        $food->instruction = $request->input('instruction');
        $food->category = $request->input('category');

        $food->update();

        return redirect('/food')->with('message', 'Recipe updated successfully!');
    }
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect('/food');
    }
}
