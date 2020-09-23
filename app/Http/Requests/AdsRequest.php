<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'users_id' => 'required|integer|exists:users,id',
            'categories_id' => 'required|integer|exists:categories,id',
            'tittle' => 'required|max:255',
            'slug' => 'required|max:255',
            'price' => 'required|integer',
            'year' => 'required|integer',
            'sdescription' => 'required|max:255',
            'description' => 'required',
            'status' => 'required|in:PENDING,ACTIVE',
            'city' => 'required|max:255',
            'photo1' => 'required',
            'photo2' => 'required',
            'photo3' => 'required',
        ];
    }
}
