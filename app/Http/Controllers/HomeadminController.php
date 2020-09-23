<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\User;
use Illuminate\Http\Request;

class HomeadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $sum = Ad::where('status', 'PENDING')->count('status', 'PENDING');
        $sum1 = Ad::where('status', 'ACTIVE')->count('status', 'ACTIVE');
        $sum2 = Ad::all()->count();
        $sum3 = User::all()->count();
        return view('Admin.index')->with([
            'sum' => $sum,
            'sum1' => $sum1,
            'sum2' => $sum2,
            'sum3' => $sum3,
        ]);
    }
}
