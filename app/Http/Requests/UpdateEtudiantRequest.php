<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateEtudiantRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $etudiantId = $this->route('etudiant')->id;
        return [
            "matricule" => ["required", "string",  Rule::unique('etudiants')->ignore($etudiantId),],
            "prenom" => ["required", "string", "max:100"],
            "nom" => ["required", "string", "max:55"],
            "adresse" => ["required", "string", "max:255"],
            "telephone" => ["required", "string", "max:15", Rule::unique('etudiants')->ignore($etudiantId)],
            "email" => ["required", "string", "max:255"],
            "date_de_naissace" => ["required", "string", "max:10"],
            // "photo" => ["required", "image", "mimes:jpeg,png,jpg", "max:2048"]
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            ['success' => false, 'errors' => $validator->errors()],
            422
        ));
    }
}
