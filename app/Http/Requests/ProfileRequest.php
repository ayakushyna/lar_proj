<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            //'id' => 'required|integer|exists:App\Models\User,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:female,male,undefined',
            'birthday' => 'required|date',
            //'photo'     =>  'mimes:jpeg,png,jpg,gif|max:2048',
            //'active' => 'required|boolean',
            'city_id' => 'required|integer|exists:App\Models\City,id',
        ];
    }
}
