<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
	public function rules()
	{
		return [
			'geo-text' => 'required',
			'eng-text' => 'required',
		];
	}
}
