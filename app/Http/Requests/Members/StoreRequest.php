<?php

namespace App\Http\Requests\Members;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Cualquiera puede enviar esta request al server
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
            'firstName' => 'required|alpha_spaces|max:100',
            'lastName' => 'required|alpha_spaces|max:100',
            'age' => 'required|integer|max:60',
            'sex' => 'required|integer|in:1,2',
            'accepts' => 'required|accepted',
        ];
    }
}
