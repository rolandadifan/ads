<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first()->get();
        return response()->json(['status' => 'success', 'data' => $about]);
    }
}
