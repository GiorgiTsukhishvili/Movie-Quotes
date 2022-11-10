<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
	public function rules()
	{
		return [
			'photo'     => 'required',
			'eng-text'  => 'required',
			'geo-text'  => 'required',
		];
	}
}
