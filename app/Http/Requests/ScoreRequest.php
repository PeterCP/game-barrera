<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
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
            'creativity' => 'required|numeric|min:0|max:10',
            'inmersion' => 'required|numeric|min:0|max:10',
            'design' => 'required|numeric|min:0|max:10',
            'functionality' => 'required|numeric|min:0|max:10',
            'challenge' => 'required|numeric|min:0|max:10',
        ];
    }
}
