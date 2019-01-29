<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEditPost extends FormRequest
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
            'postTitle'=>'required',
            'postContent'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'postTitle.required'=>'لطفا عنوان مقاله را وارد کنید',
            'postContent.required'=>'لطفا بخش محتوا را کامل کنید'
        ];

    }
}
