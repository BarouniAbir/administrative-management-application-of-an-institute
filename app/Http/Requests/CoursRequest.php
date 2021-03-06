<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursRequest extends FormRequest
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
          'code'=>['bail','required','integer'],'description'=>['bail','required','string'],'nbrHeure'=>['bail','required','integer'], 'coeffDiplome'=>['bail','required','integer'], 'coeffExam'=>['bail','required','integer'], 'coeffTD'=>['bail','required','integer'],
        ];
    }
}
