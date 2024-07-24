<?php

namespace App\Http\Requests\Ingredients;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SaveIngredient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages() {}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        return [
            'name' => 'required',
        ];
    }
}
