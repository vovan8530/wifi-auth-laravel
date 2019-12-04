<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest{
    /**
     * @return array
     */
    public function rules(){
        return [

            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'gender' => ['required']

        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First name is required!',
            'second_name.required' => 'Second name is required!',
            'email.required' => 'Email is required!',
            'gender.required' => 'Gender is required!',
        ];
    }
}
