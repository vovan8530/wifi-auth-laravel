<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest{
    /**
     * @return array
     */
    public function rules(){
        return [
            'settings_value' => ['string', 'max:255'],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
