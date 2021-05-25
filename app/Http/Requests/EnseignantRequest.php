<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnseignantRequest extends FormRequest
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
           'nom'=>['bail','required','string'],'prenom'=>['bail','required','string'],'code'=>['bail','required','integer'], 'grade'=>['bail','required','string'], 'tel'=>['bail','required','integer'], 'mail'=>['bail','required','string'], 'numB'=>['bail','required','integer'],
        ];
    }
}
