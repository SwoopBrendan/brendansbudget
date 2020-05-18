<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBudgetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:30',
            'description' => 'sometimes|max:255',
            'gross_income' => 'required|integer|min:1',
            'other_deductions' => 'required|integer|min:1',
            'taxes' => 'required|integer|min:1',
        ];
    }
}
