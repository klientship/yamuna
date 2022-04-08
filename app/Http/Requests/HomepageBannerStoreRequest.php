<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageBannerStoreRequest extends FormRequest
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
            'homepage_setting_id' => [
                'required',
                'exists:homepage_settings,id',
            ],
            'banner' => ['image', 'max:1024'],
        ];
    }
}