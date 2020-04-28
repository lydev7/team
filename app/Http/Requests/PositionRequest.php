<?php
	
	namespace App\Http\Requests;
	
	use Illuminate\Foundation\Http\FormRequest;
	
	class PositionRequest extends FormRequest
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
			$return = [];
			if ($this->position) {
				$return['name'] = "required|string|min:3|max:45|unique:positions,name," . $this->position->id;
			}
			else {
				$return['name'] = "required|string|min:3|max:45|unique:positions,name";
			}
			return $return;
		}
	}
