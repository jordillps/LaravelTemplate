<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
		    'email' => ['required', 'email'],
            'twitter_url' => 'url',
            'linkedin_url' => 'url',
            'facebook_url' => 'url',
            'instagram_url' => 'url',
            'pinterest_url' => 'url',
            'youtube_url' => 'url',
            'email_contacts_form' => ['required', 'email'],
        ];
    }
}
