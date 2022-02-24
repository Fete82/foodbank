<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    // Action: Index
    public function index() {

        $foods = Food::orderBy('id', 'desc')->get();

        return view('food', [
            'foods' => $foods
        ]);
    }
    
    // Action: Show
    public function show($id) {
        return view('recipe', ['id' => $id]);
    }
}
