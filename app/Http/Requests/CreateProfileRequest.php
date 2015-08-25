<?php

namespace Anywork\Http\Requests;

use Anywork\Http\Requests\Request;

class CreateProfileRequest extends Request
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
            'surname' => 'required',
            'other_names' => 'required',
            'sex' => 'required',
            'mobile_no' => 'required',
            'contact_add' => 'required',
            'user_id' => 'required'
        ];
    }
}
