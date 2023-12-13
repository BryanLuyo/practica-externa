<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTask extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        /* Todo : title, description, dni, due_date campos requeridos */
        return [
            'title' =>  'required|string|min:2',
            'description' => 'required|string|min:2',
            'dni' => 'required|min:2',
            'due_date' => 'required',
        ];
    }
}
