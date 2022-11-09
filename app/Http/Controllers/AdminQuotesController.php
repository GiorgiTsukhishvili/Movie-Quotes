<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class AdminQuotesController extends Controller
{
	public function index(Movie $id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.admin-quotes', ['movie' => $id]);
	}

	public function destroy(Quote $id)
	{
		$id->delete();

		return back()->with('message', '');
	}
}
