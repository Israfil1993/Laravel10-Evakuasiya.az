<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerTestimonialRequest extends FormRequest
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
            'fullname_az' => 'nullable|string',
            'feedback_az' => 'required|string',
            'fullname_en' => 'nullable|string',
            'feedback_en' => 'nullable|string',
            'fullname_ru' => 'nullable|string',
            'feedback_ru' => 'nullable|string',
            'image' => 'nullable',
            'status' => 'nullable|integer|in:0,1',
        ];
    }
}
