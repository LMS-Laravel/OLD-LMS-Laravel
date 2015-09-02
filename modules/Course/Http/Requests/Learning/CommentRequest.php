<?php namespace Modules\Course\Http\Requests\Learning;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest {

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
		switch($this->method())
		{
			case 'POST':
			{
				return $this->post();
			}
			case 'PATCH':
			{
				return $this->patch();
			}
            default: return [];
		}
	}

	private function post()
	{
		return [
            'comment' => 'required',
            'lesson_id'  => 'required|exists:lessons,id',
            'user_id' => 'required|exists:users,id'
		];
	}

	private function patch()
	{
		return [
            'comment' => 'required',
		];
	}

}
