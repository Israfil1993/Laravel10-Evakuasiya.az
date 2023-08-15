<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesRequest extends FormRequest
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
            'title_az' => 'required|string',
            'text_az' => 'nullable|string',
            'title_en' => 'nullable|string',
            'text_en' => 'nullable|string',
            'title_ru' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'icon' => 'nullable|string',
            'status' => 'nullable|integer|in:0,1'
        ];
    }
}
