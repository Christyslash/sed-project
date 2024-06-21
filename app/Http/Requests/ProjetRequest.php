<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'nom_prenoms' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'montant' => 'required',
            'echeancier' => 'required',
        ];
    }
     public function messages(){
        return [
            'nom_prenoms.required'=>'le champs projet est requis',
            'contact.required'=>'le champs contact periode est requis',
            'email.required'=>'le champs email est requis',
            'montant.required'=>'le champs montant est requis',
            'echeancier.required'=>'le champs echeancier est requis',
            'nom_prenoms.min'=>'le champs nom & prenom doit avoir au minimun 3 caractères',
            'email.email'=>'l\'email n\'est pas valide',
        ];
    }
}
