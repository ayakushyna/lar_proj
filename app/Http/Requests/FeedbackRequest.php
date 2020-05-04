<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'score' => 'required|integer|min:1|max:10',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'profile_id' => 'required|integer|exists:App\Models\Profile,id',
            'property_id' => 'required|integer|exists:App\Models\Property,id',
        ];
    }
}