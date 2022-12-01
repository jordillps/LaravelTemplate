<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderStoreRequest extends FormRequest
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
            'page_id' => ['required', 'integer', 'exists:pages,id'],
            'title:'. app()->getLocale() => ['required', 'string'],
            'text:'. app()->getLocale() => ['required','string'],
        ];
    }
}
