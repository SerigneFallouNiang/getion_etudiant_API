<?php

namespace App\Http\Requests;

use App\Models\Matiere;
use App\Models\Etudiant;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreEvaluationRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'etudiant_id' => [
                'required',
                'integer',
                'exists:' . Etudiant::class . ',id'
            ],
            'matiere_id' => [
                'required',
                'integer',
                'exists:' . Matiere::class . ',id'
            ],
            'date' => [
                'nullable',
                'date',
                'before_or_equal:today'
            ],
            'valeur' => [
                'required',
                'integer',
                'min:0',
                'max:20'
            ]
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
