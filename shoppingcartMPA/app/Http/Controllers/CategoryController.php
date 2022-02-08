<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    // Ik wil de catergories ophalen uit de database.
    public function getAllCategories(){
        $var = Category::all();
        dd($var);
    }
}
