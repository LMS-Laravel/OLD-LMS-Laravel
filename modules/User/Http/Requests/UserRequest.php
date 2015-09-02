<?php namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest {

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
			'firstname' => 'required',
			'lastname' => 'required',
			'username' => 'required',
			'email' => 'required|email|max:255',
			'password' => 'confirmed|min:5',
			'role_id' => 'required'
		];
	}

}
