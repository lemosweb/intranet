<?php

namespace App\Http\Requests;

use App\Enquete;
use App\Http\Requests\Request;

class EnqueteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Enquete $enquete)
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
        ];
    }
}
