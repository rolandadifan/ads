<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $rule = [
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'telepon' => 'required|max:11',
            'message' => 'required|string'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $message = Message::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $message
        ]);
    }
}
