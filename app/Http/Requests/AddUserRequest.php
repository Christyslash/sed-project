<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'nom' => 'required|min: 3',
            'prenom' => 'required|min: 3',
            'email'=> 'required|unique:users|email',
            'password'=> 'required',
            'contact'=> 'required',
            'ville'=> 'required',
        ];
    }
     public function messages(){
        return [
            'nom.required'=>'le nom est requis',
            'contact.required'=>'le contact est requis',
            'ville.required'=>'la ville est requis',
            'adresse.required'=>'l\'adresse est requis',
            'prenom.required'=>'le prénom est requis',
            'email.required'=>'l\'email est requis',
            'password.required'=>'le mot de passe est requis',
            'email.email'=>'email invalide',
            'email.unique'=>'l\'email existe déja',
            'nip.unique'=>'le NIP existe déja',
            'nom.min' => 'le nom doit avoir au minimun 3 caratère',
            'prenom.min' => 'le prénom doit avoir au minimun 3 caratère',
        ];
    }
}
