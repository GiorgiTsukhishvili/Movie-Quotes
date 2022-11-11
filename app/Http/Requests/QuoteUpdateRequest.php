<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteUpdateRequest extends FormRequest
{
	public function rules()
	{
		return [
			'photo'     => 'nullable',
			'eng-text'  => 'required',
			'geo-text'  => 'required',
		];
	}
}
