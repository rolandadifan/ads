<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categorie::all();
        return response()->json(['status' => 'success', 'data' => $category]);
    }
}
