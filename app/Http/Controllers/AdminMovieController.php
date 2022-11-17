<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		$movies = Movie::all();

		return view('admin.admin-movies', ['movies' => $movies]);
	}

	public function destroy(Movie $id)
	{
		$id->delete();

		return back()->with('message', 'static-text.movie-delete');
	}

	public function create()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.forms.movie-create');
	}

	public function update(Movie $id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.forms.movie-update', ['movie' => $id]);
	}

	public function store(MovieRequest $request)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		$text = $request->validated();

		$movieName = new Movie();
		$movieName
		   ->setTranslation('name', 'en', $text['eng-text'])
		   ->setTranslation('name', 'ka', $text['geo-text'])
		   ->save();

		return redirect(route('admin.movies', ['lang' => app()->getLocale()]))->with('message', 'static-text.movie-add');
	}

	public function put(MovieRequest $request, Movie $id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		$text = $request->validated();

		$newTranslatiions = ['en' => $text['eng-text'], 'ka' => $text['geo-text']];

		$id->replaceTranslations('name', $newTranslatiions)->save();

		return redirect(route('admin.movies', ['lang' => app()->getLocale()]))->with('message', 'static-text.movie-updated');
	}
}
