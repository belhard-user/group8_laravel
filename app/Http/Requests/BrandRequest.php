<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'title' => 'required|min:3|max:255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ого чего захотел, наверное ты пьян!!!! заполни поле',
            'title.min' => 'Должно быть больше 3 символов'
        ];
    }
}
