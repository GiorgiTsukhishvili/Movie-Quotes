<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;

class AdminController extends Controller
{
	public function index()
	{
		if (auth()->check())
		{
			return	redirect(route('admin.movies'));
		}

		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.admin-login');
	}

	public function login(AdminLoginRequest $request)
	{
		$user = $request->validated();

		if (auth()->attempt($user))
		{
			request()->session()->regenerate();

			return redirect(route('admin.movies'))->with('message', 'static-text.logged-in');
		}

		return back()->withErrors(['email' => 'static-text.not-authorized'])->onlyInput('email');
	}

	public function logout()
	{
		auth()->logout();

		request()->session()->invalidate();
		request()->session()->regenerate();

		return redirect(route('quote'));
	}
}
