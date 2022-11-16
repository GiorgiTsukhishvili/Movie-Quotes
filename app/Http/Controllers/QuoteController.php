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

		$randomQuote = Quote::inRandomOrder()->first();

		return view('movie-quotes.single-quote', ['quote' => $randomQuote]);
	}
}
