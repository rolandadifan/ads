<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Requests\AdsRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;


class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::paginate(50);
        return view('Admin.ads.index')->with([
            'ads' => $ads
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categorie::all();
        return view('Admin.ads.create')->with([
            "category" => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsRequest $request)
    {
        $data = $request->all();
        $data['photo1'] = $request->file('photo1')->store(
            'assets/product',
            'public'
        );
        $data['photo2'] = $request->file('photo2')->store(
            'assets/product',
            'public'
        );
        $data['photo3'] = $request->file('photo3')->store(
            'assets/product',
            'public'
        );

        Ad::create($data);
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categorie::all();
        $ads = Ad::findOrFail($id);
        return view('Admin.ads.edit')->with([
            'ads' => $ads,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdsRequest $request, $id)
    {
        $data = $request->all();
        $data['photo1'] = $request->file('photo1')->store(
            'assets/product',
            'public'
        );
        $data['photo2'] = $request->file('photo2')->store(
            'assets/product',
            'public'
        );
        $data['photo3'] = $request->file('photo3')->store(
            'assets/product',
            'public'
        );

        $ads = Ad::findOrFail($id);
        $ads->update($data);

        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();

        return redirect()->route('ads.index');
    }
}
