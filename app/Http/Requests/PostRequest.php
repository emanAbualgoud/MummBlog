<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        if( $this->method() == 'PATCH' ) {

            return [
                'photo' => 'nullable|mimes:jpg,gif,jpeg,png,tiff',
            ];
        }
        return [
            'photo'         => 'required|mimes:jpg,gif,jpeg,png,tiff',
            'title'         => 'required|max:255',
            'category_id'   => 'required|exists:categories,id',
            'description'   => 'required',
            'content'       => 'required',
        ];
    }
}
