<?php

namespace App\Http\Controllers;

use App\Models\Movie;

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
}
