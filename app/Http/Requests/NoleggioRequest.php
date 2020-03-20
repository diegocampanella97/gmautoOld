<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoleggioRequest extends FormRequest
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
            'dataRitiro' => 'required',
            'dataConsegna' => 'required',
            'messaggio' => 'required',
            'name' => 'required|min:2',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dataRitiro.required' => 'Inserisci una data di ritiro valida',
            'dataConsegna.required'  => 'Inserisci una data di consegna valida',
            'messaggio.required' => 'Inserisci un messaggio',
            'name.required'  => 'Inserisci un nome',
            'email.required' => 'Inserisci una mail',
        ];
    }


}
