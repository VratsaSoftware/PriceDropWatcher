<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteValidateRequest extends FormRequest
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
            'cron_settings_id'=>'required',
            'domain'=>'required|url',
            'category_selector'=>'required',
            'title_selector'=>'required',
            'image_selector'=>'required',
            'price_bgn_selector'=>'required',
            'price_pennies_selector'=>'required',
        ];
    }
}
