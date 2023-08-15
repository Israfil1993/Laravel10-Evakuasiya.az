<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
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
            'key_az' => 'required|string|max:255',
            'value_az' => 'required|string|max:255',
            'key_en' => 'nullable|string|max:255',
            'value_en' => 'nullable|string|max:255',
            'key_ru' => 'nullable|string|max:255',
            'value_ru' => 'nullable|string|max:255',
            'image' => 'nullable',
            'status' => 'required|integer',
        ];
    }
}
