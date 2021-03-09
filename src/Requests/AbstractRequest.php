<?php

namespace Cms\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AbstractRequest extends FormRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function failedValidation(Validator $validator) {
        $data = [
            'data' => $validator->errors(),
            'code' => 422
        ];
        throw new HttpResponseException(response()->json($data, 422));
    }
}
