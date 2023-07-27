<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenusRequest extends FormRequest
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
            'menu_name'=> 'required|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'menu_name.min' => 'Menü Adı Minimum 3 karakterden oluşmalıdır',
            'menu_name.required' => 'Lütfen Menü Adı Giriniz'
        ];
    }
}
