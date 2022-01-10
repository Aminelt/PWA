<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name'=> 'required|max:255',
            'teamLeader_id'=> 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'le nom du l\'équipe est requis',
            'teamLeader_id.required'=> 'Spécifier le chef de l\'équipe du projet',
        ];
    }
}