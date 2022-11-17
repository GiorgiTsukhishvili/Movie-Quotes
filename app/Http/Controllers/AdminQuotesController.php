<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllQuotesRequest;
use App\Http\Requests\QuoteRequest;
use App\Http\Requests\QuoteUpdateRequest;
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

	public function quotes()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.all-quotes', ['quotes' => Quote::all(), 'movieCount' => Movie::count()]);
	}

	public function destroy(Quote $id)
	{
		$id->delete();

		return back()->with('message', 'static-text.quote-delete');
	}

	public function allQuoteForm()
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.forms.all-quotes-form', ['movies' => Movie::all()]);
	}

public function allQuoteStore(AllQuotesRequest $request)
{
	if (!is_null(request('lang')))
	{
		app()->setLocale(request('lang'));
	}
	$text = $request->validated();

	if ($request->hasFile('photo'))
	{
		$text['photo'] = $request->file('photo')
		->store('images', 'public');
	}

	$quote = new Quote();
	$quote
	   ->setTranslation('quote', 'en', $text['eng-text'])
	   ->setTranslation('quote', 'ka', $text['geo-text'])->setAttribute('movie_id', $text['movie'])->setAttribute('photo', $text['photo'])
	   ->save();

	return redirect(route('admin.all-quotes', ['lang' => app()->getLocale()]))->with('message', 'static-text.quote-add');
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
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

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

		return redirect(route('admin.quotes', ['id' => $id, 'lang' => app()->getLocale()]))->with('message', 'static-text.quote-add');
	}

	public function update(Quote $id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		return view('admin.forms.quote-update', ['quote' => $id]);
	}

	public function put(QuoteUpdateRequest $request, Quote $id)
	{
		if (!is_null(request('lang')))
		{
			app()->setLocale(request('lang'));
		}

		$text = $request->validated();

		$newTranslatiions = ['en' => $text['eng-text'], 'ka' => $text['geo-text']];

		if ($request->hasFile('photo'))
		{
			$text['photo'] = $request->file('photo')
			->store('images', 'public');
		}

		if (isset($text['photo']))
		{
			$id->replaceTranslations('quote', $newTranslatiions)->setAttribute('photo', $text['photo'])->save();
		}
		else
		{
			$id->replaceTranslations('quote', $newTranslatiions)->save();
		}

		return redirect(route('admin.quotes', ['id' => $id->movie->id, 'lang' => app()->getLocale()]))->with('message', 'static-text.quote-updated');
	}
}
