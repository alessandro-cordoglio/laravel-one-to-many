<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title'=> 'required|unique:projects|max:100|string',
            'description'=> 'required|max:2500|string',
            'client'=> 'required|string',
            'type_id' => 'nullable|exixsts:types' 
        ];
    }
}
