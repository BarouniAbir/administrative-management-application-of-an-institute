<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'nom'=>['bail','required','string'],'prenom'=>['bail','required','string'],'adresse'=>['bail','required','string'], 'mail'=>['bail','required','string'], 'tel'=>['bail','required','integer'], 'login'=>['bail','required','string'], 'mdp'=>['bail','required','string'],
        ];
    }
}
