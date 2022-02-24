<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    // Action: Index All Recipes
    public function index() {

        $foods = Food::orderBy('id', 'desc')->get();

        return view('foods/index', [
            'foods' => $foods
        ]);
    }
    
    // Action: Show
    public function show($id) {
        return view('foods/show', ['id' => $id]);
    }

    // Action: Create new recipe
    public function create() {
        return view('foods/create');
    }
}
