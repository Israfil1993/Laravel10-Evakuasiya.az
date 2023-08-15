<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCorporativeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_az' => 'required|string|max:255',
            'description_az' => 'required|string',
            'title_en' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'title_ru' => 'nullable|string|max:255',
            'description_ru' => 'nullable|string',
            'image' => 'nullable',
            'status' => 'required|integer|in:0,1',
        ];
    }
}
