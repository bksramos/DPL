<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FastEventRequest extends FormRequest
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
            'title' => 'required|min:3',  
            'start' => 'date_format:H:i:s|before:end',
            'end' => 'date_format:H:i:s|after:start'      
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o título',
            'title.min' => 'Título necessita de pelo menos 03 caracteres!',
            'start.date_format' => 'Preencha uma hora inicial com valor válido!',
            'start.before' => 'A hora inicial deve ser anterior à hora final!',
            'end.date_format' => 'Preencha a hora final com valor válido!',
            'end.after' => 'A hora final deve ser posterior à hora inicial!',
        ];
    }
}
