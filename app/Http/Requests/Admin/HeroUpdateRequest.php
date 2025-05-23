<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HeroUpdateRequest extends FormRequest
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
        return [
            'background' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:3000'],
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'sub_title' => ['required', 'string', 'max:255', 'min:3'],
        ];
    }
}
