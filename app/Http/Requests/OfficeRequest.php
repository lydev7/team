<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	    $r = [
		    'name'          => "required|string|min:3|max:45|unique:office,name",
		    'address1'      => "required|string|min:5|max:80",
		    'address2'      => "nullable|string|max:80",
		    'phone'         => "required|string|min:6|max:20",
		    'country'       => "required|int|exists:countries,id",
		    'logo_'         => 'required|mimes:jpg,png,gif'
	    ];
	    if (isset($this->office->id)) {
		    $r['logo_'] = 'nullable|mimes:jpg,png,gif';
		    $r['name'] = "required|string|min:3|max:45|unique:office,name," . $this->office->id;
	    }
	    return $r;
    }
}
