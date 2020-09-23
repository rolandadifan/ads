<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ads = Ad::where('status', 'ACTIVE', 'desc')->take(6)->get();
        $category = Categorie::all();
        return view('home')->with([
            'ads' => $ads,
            'category' => $category
        ]);
    }
}
