<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    // Action: Index All Recipes
    public function index() {

        $foods = Food::orderBy('id', 'asc')->get();

        return view('foods/index', [
            'foods' => $foods
        ]);
    }
    
    // Action: Show
    public function show($id) {
        // findOrFail, instead of find, so that it displays 404 when attempting to reach non-existant food.
        $food = Food::findOrFail($id);
        
        return view('foods/show', ['food' => $food]);
    }

    // Action: Create new recipe
    public function create() {
        return view('foods/create');
    }
}
