<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'product_name' => 'required|string|max:255|unique:products',
            'details' =>  'required|string', 
            'price' =>  "required|numeric" ,
            'photo' => "required|image|mimes:jpeg,png,jpg,gif|max:2048" ,
        
        ];
    }


    public function messages(): array
    {
        return [
            'product_name.required' => 'product name is required',
            'details.required' => 'details input is required',
            'price.required' => 'price  is required',
            'price.numeric' => 'price muts be a number ',
            'photo.required' => 'photo  is required',
            'photo.image' => 'photo input muts be an image',
        ];
    }
}
