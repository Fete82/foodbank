<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    // Action: Index
    public function index() {
        $foods = [
            ['name' => 'Hamburger'],
            ['name' => 'Hot Dog'],
            ['name' => 'Pizza']
        ];
    
        return view('food', [
            'foods' => $foods
        ]);
    }
    
    // Action: Show
    public function show($id) {
        return view('recipe', ['id' => $id]);
    }
}
