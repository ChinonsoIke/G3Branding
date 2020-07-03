<?php

namespace App\Http\Requests\Administrator\Product;

use Illuminate\Foundation\Http\FormRequest;
use Str;

class NewProductRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
           'slug' => Str::uuid()
        ]);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
        ];
    }
}
