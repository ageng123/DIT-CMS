<?php

namespace Cms\Post\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Cms\Post\Requests\AbstractRequest;


class PostRequest extends AbstractRequest
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
            //
            'post_title' => 'required|string|min:5|max:255',
            'post_author' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return ['judul_post.min' => 'Should be more than 5 Character Length'];
    }
}
