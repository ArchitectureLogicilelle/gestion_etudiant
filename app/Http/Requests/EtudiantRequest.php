<?php
/**
 * @Author Abdoulaye Faye
 * Date : 06/08/2018
 */

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
            'nom' => 'bail| required | between:2, 50 | alpha',
            //'prenom' => 'bail| required | between:2, 100 | regex:/^([a-z]+[,.]?[" "]?|[a-z]+[\'-]?)+$/'
            ['bail','required', 'regex:/^([A-Za-z]+[,.]?[" "]?|[a-z]+[\'-]?)+$/'],
        ];
    }
}
