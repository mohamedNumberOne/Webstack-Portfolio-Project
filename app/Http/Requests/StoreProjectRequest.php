<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            "project_name" => "required|unique:projects",
            "photo" => "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "details" => "required",
        ];
    }

    public function messages(): array
    {
        return [

            "project_name.required" => "the project name is required",
            "photo.required" => "photo is required",
            "details.required" => "details is required",
        ];
    }

}
