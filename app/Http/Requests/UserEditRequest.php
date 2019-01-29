<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'userFullName' => 'required',
            'userEmail'    => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'userFullName.required' => 'لطفا نام کامل خود را وارد کنید',
            'userEmail.required'    => 'لطفا ایمیل خود را وارد کنید',
            'userEmail.email'       => 'لطفا ایمیل خود را به درستی وارد کنید',

        ];

    }
}
