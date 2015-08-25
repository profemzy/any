<?php

namespace Anywork\Http\Requests;

use Anywork\Http\Requests\Request;

class CreateCompanyRequest extends Request
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
            'name' => 'required',
            'information' => 'required',
            'email' => 'required',
            'year_estab' => 'required',
            'address' => 'required',
            'category_id' => 'required',
            'user_id' => 'required'
        ];
    }
}
