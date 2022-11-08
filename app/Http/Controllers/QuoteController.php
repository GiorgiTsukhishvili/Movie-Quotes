<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
	public function index()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		$randomNumber = mt_rand(0, count(Quote::all()));

		$randomQuote = Quote::find($randomNumber);

		return view('movie-quotes.single-quote', ['quote' => $randomQuote]);
	}
}
