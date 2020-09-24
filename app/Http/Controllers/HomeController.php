<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Categorie;
use App\Models\About;
use App\Models\Setting;
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
        $ads = Ad::where('status', 'ACTIVE')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        $category = Categorie::all();
        $about = About::all()->first();
        $setting = Setting::all()->first();
        return view('home')->with([
            'ads' => $ads,
            'category' => $category,
            'about' => $about,
            'setting' => $setting,
        ]);
    }
}
