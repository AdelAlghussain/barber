<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => ['required','string','max:32'],
            'price' => ['required'],
            'description' => ['required','string','max:150'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
