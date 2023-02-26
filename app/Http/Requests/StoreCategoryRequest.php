<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'slug' => [
                'required', 
                'string', 
                'min:4', 
                'max:50', 
                Rule::unique('categories')->ignore($this->category)
            ],
                
            'title' => [
                'required', 
                'string', 
                'min:5', 
                'max:128'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => "Поле $this->validated обязательно к заполнению",
            'unique' => 'Поле должно быть уникальным',
            'slug.min' => 'Короткий URL меньше 4 символов',
            'slug.max' => 'Короткий URL больше 50 символов',
            'slug.unique' => 'Короткий URL не уникален',
            'title.min' => 'Заголовок меньше 5 символов',
            'title.max' => 'Заголовок больше 128 символов',
        ];
    }
}
