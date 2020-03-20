<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContattiRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'oggetto' => 'required',
            'messaggio' => 'required',
            'consent' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'è richiesto un nome',
            'email.required'  => 'è richiesto una email',
            'oggetto.required' => 'è richiesto un oggetto',
            'messaggio.required' => 'è richiesto un messaggio',
            'consent.required' => 'devi acconsentire al trattamento dei dati personali' 
        ];
    }

    public function getRedirectUrl(){
        $url=$this->redirector->getUrlGenerator();
        return $url->previous().'#contattiForm';
    }



}
