<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		$movieName = new Movie();
		$movieName
		   ->setTranslation('name', 'en', fake()->sentence())
		   ->setTranslation('name', 'ge', 'რაღაც ქართული სახელი')
		   ->save();

		return [
			'name' => $movieName->name,
		];
	}
}
