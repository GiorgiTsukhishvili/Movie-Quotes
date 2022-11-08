<?php

namespace Database\Factories;

use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quote>
 */
class QuoteFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		$movieQuote = new Quote();
		$movieQuote
		   ->setTranslation('quote', 'en', fake()->sentence())
		   ->setTranslation('quote', 'ge', 'რაღაც ქართული ტექსტი')->setAttribute('movie_id', '1');

		return [
			'quote'    => $movieQuote,
		];
	}
}
