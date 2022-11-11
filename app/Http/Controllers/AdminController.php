<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
	public function index()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.admin-login');
	}
}
