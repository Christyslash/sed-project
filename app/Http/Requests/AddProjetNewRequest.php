<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProjetNewRequest extends FormRequest
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
            'cat' => 'required',
            'detail'=> 'required',
            'jackpot'=> 'required',
            'desc'=> 'required',
            'image'=> 'required',
        ];
    }
    public function messages(){
        return [
            'nom.required'=>'le nom est requis',
            'car.required'=>'la categorie est requis',
            'detail.required'=>'les details sont requis',
            'jackpot.required'=>'le budjet est requis',
            'desc.required'=>'le budjet est requis',
            'image.required'=>'l\'image est requis',
            'nom.min' => 'le nom doit avoir au minimun 3 caratère',
        ];
    }
}
