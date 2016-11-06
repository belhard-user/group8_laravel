<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModsRequest extends FormRequest
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
            'mark_id' => 'required|exists:marks,id',
            'engine_type' => 'required|in:' . implode(', ', array_keys(\App\Mods::$engineType)),
            'box' => 'required|in:' . implode(', ', array_keys(\App\Mods::$box)),
            'engine_value' => 'required',
            'year' => 'date'
        ];
    }
}
