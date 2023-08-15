<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
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
            'salary_min' => 'nullable|int',
            'salary_max' => 'nullable|int',
            'responsibilities_az' => 'nullable',
            'requirements_az' => 'nullable',
            'sharing_date' => 'nullable|date',
            'duration' => 'nullable|int',
            'age_limit' => 'nullable',
            'education_level_az' => 'nullable',
            'work_schedule_az' => 'nullable',
            'contract_type_az' => 'nullable',
            'application_email_az' => 'nullable',
            'title_en' => 'nullable',
            'responsibilities_en' => 'nullable',
            'requirements_en' => 'nullable',
            'education_level_en' => 'nullable',
            'work_schedule_en' => 'nullable',
            'contract_type_en' => 'nullable',
            'application_email_en' => 'nullable',
            'title_ru' => 'nullable|string',
            'responsibilities_ru' => 'nullable',
            'requirements_ru' => 'nullable',
            'education_level_ru' => 'nullable',
            'work_schedule_ru' => 'nullable',
            'contract_type_ru' => 'nullable',
            'application_email_ru' => 'nullable',
            'status' => 'nullable|integer',
        ];
    }
}
