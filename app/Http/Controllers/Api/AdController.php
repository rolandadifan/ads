<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{

    public function index(Request $request)
    {
        $ad = Ad::where('status', 'ACTIVE')->orderBy('created_at', 'desc')->take(6)->get();
        return response()->json([
            'status' => 'success',
            'data' => $ad
        ]);
    }

    public function myads(Request $request)
    {
        $ad = Ad::query()->with(['categories']);
        $userid = $request->query('users_id');
        $ad->when($userid, function ($query) use ($userid) {
            return $query->where('users_id', '=', $userid);
        });

        return response()->json([
            'status' => 'success',
            'data' => $ad->get()
        ]);
    }

    public function getAll(Request $request)
    {
        $ad = Ad::query()->with(['categories'])->where('status', 'ACTIVE')->orderBy('created_at', 'desc');
        $search = $request->query('search');
        $findcategory = $request->query('categories_id');

        $ad->when($findcategory, function ($query) use ($findcategory) {
            return $query->where('categories_id', '=', $findcategory);
        });

        $ad->when($search, function ($query) use ($search) {
            return $query->whereRaw("tittle LIKE '%" . strtolower($search) . "%'");
        });

        return response()->json([
            'status' => 'success',
            'data' => $ad->paginate(50)
        ]);
    }

    public function show($id)
    {
        $ad = Ad::with(['categories'])->find($id);
        if (!$ad) {
            return response()->json([
                'status' => 'error',
                'message' => 'iklan tidak ditemukan'
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'data' => $ad
        ]);
    }

    public function create(Request $request)
    {
        $rules = [
            'users_id' => 'required|integer',
            'categories_id' => 'required|integer',
            'tittle' => 'required|max:255',
            'slug' => 'required|max:255',
            'price' => 'required|integer',
            'year' => 'required|integer',
            'sdescription' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|in:PENDING,ACTIVE',
            'city' => 'required|max:255',
            'photo1' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
            'photo2' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
            'photo3' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }




        $categoryId = $request->input('categories_id');
        $category = Categorie::find($categoryId);

        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'categori tidak ditemukan'
            ], 404);
        }

        $userId = $request->input('users_id');
        $user = getUser($userId);

        if (!$user) {
            return response()->json([
                'status' => $user['status'],
                'message' => $user['message']
            ], $user['http_code']);
        }

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




        $ad = Ad::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $ad
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'users_id' => 'integer',
            'categories_id' => 'integer',
            'tittle' => 'max:255',
            'slug' => 'max:255',
            'price' => 'integer',
            'year' => 'integer',
            'sdescription' => 'max:255',
            'description' => 'string',
            'status' => 'in:PENDING,ACTIVE',
            'city' => 'max:255',
            'photo1' => 'image:jpeg,png,jpg,gif,svg|max:2048',
            'photo2' => 'image:jpeg,png,jpg,gif,svg|max:2048',
            'photo3' => 'image:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $data = $request->except('users_id');

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        // $data['photo1'] = $request->file('photo1')->store(
        //     'assets/product',
        //     'public'
        // );

        // $data['photo2'] = $request->file('photo2')->store(
        //     'assets/product',
        //     'public'
        // );


        // $data['photo3'] = $request->file('photo3')->store(
        //     'assets/product',
        //     'public'
        // );

        $ad = Ad::find($id);
        if (!$ad) {
            return response()->json([
                'status' => 'error',
                'message' => 'data tidak ditemukan'
            ], 404);
        }

        $categoryId = $request->input('categories_id');
        if ($categoryId) {
            $categorie = Categorie::find($categoryId);
            if (!$categorie) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'kategori tidak ditemukan'
                ], 404);
            }
        }

        // $userId = $request->input('users_id');
        // if ($userId) {
        //     $user = getUser($userId);
        //     if (!$user['status'] === 'error') {
        //         return response()->json([
        //             'status' => $user['status'],
        //             'message' => $user['message']
        //         ], $user['http_code']);
        //     }
        // }



        $ad->update($data);

        return response()->json([
            'status' => 'success',
            'data' => $ad
        ]);
    }

    public function destroy($id)
    {
        $ad  = Ad::find($id);
        if (!$ad) {
            return response()->json([
                'status' => 'error',
                'message' => 'data tidak ditemukan'
            ], 404);
        }

        $ad->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'data didelete'
        ]);
    }
}
