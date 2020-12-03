<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'name' => 'required',
            'so_name' => 'required',
            'birthday' => 'required',
            'adress' => 'required',
            'view' => 'required|nullable',
            'age'=> 'required|min:1|max:2',
            'date'=> 'required|date',
            'doza'=> 'required|min:1|max:3',
            'seria'=> 'required|nullable',
            'reakcia'=> 'required|nullable',
            'info'=> 'required|nullable'
        ];
    }
}
