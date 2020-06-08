<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'request' => 'required',
            'answer' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'request.required' => 'Inserisci una domanda valido',
            'answer.required'  => 'Inserisci una rispost valida',
        ];
    }

    public function getRedirectUrl(){
        $url=$this->redirector->getUrlGenerator();
        return $url->previous().'#formFaq';
    }

}
