<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'content' => ['required', 'max:255'],
            'region' => ['nullable'],
            'category' => ['required']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'region_id' => $this->region,
            'category_id' => $this->category
        ]);
    }
}
