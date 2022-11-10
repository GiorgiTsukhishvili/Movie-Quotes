<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
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

		return back()->with('message', 'static-text.quote-delete');
	}

	public function create($id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.forms.quote-create', ['movie' => $id]);
	}

	public function store(QuoteRequest $request, $id)
	{
		$text = $request->validated();

		if ($request->hasFile('photo'))
		{
			$text['photo'] = $request->file('photo')
			->store('images', 'public');
		}

		$quote = new Quote();
		$quote
		   ->setTranslation('quote', 'en', $text['eng-text'])
		   ->setTranslation('quote', 'ka', $text['geo-text'])->setAttribute('movie_id', $id)->setAttribute('photo', $text['photo'])
		   ->save();

		return redirect(route('admin.quotes', ['id' => $id]))->with('message', 'static-text.quote-add');
	}
}
