<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqRequest extends FormRequest
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
            'title_az' => 'nullable',
            'description_az' => 'nullable',
            'status_az' => 'nullable',
            'title_en' => 'nullable',
            'description_en' => 'nullable',
            'status_en' => 'nullable',
            'title_ru' => 'nullable',
            'description_ru' => 'nullable',
            'status_ru' => 'nullable',
        ];
    }
}
