<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            
            'name'=> 'required|unique:project|max:255',
            'description'=> 'required|max:255',
            'projectCost'=> 'required|numeric|max:255',
            'projectDomain'=> 'required|max:255',
            'status'=> 'required',
            'startDate'=> 'required|Date',
            'endDate'=> 'required|Date',
            'team_id'=> 'required|numeric',


        ];
    }


    public function messages()
{
    return [
        'name.required'=> 'le nom du projet est requis',
        'name.unique'=> 'unique',
        'description.required'=> 'le description du projet est requis',
        'projectCost.required'=> 'SVP! Spécifier le budget global du projet',
        'projectDomain.required'=> 'Champ obligatoire',
        'status.required'=> 'Champ obligatoire',
        'startDate.required'=> 'Champ obligatoire',
        'endDate.required'=> 'Champ obligatoire',
        'team_id.required'=> 'Spécifier l\'équipe du projet',
    ];
}
}