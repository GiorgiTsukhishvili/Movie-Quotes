<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$movieName = new Movie();
		$movieName
		   ->setTranslation('name', 'en', fake()->sentence())
		   ->setTranslation('name', 'ka', 'რაღაც ქართული სახელი')
		   ->save();

		$movieName2 = new Movie();
		$movieName2
		   ->setTranslation('name', 'en', fake()->sentence())
		   ->setTranslation('name', 'ka', 'რაღაც ქართული სახელი')
		   ->save();

		$movieName3 = new Movie();
		$movieName3
		   ->setTranslation('name', 'en', fake()->sentence())
		   ->setTranslation('name', 'ka', 'რაღაც ქართული სახელი')
		   ->save();

		for ($i = 0; $i < 10; $i++)
		{
			$movieQuote = new Quote();
			$movieQuote
				  ->setTranslation('quote', 'en', fake()->sentence())
				  ->setTranslation('quote', 'ka', 'რაღაც ქართული ტექსტი')
				  ->setAttribute('movie_id', $movieName->id)
				  ->save();

			$movieQuote2 = new Quote();
			$movieQuote2
						->setTranslation('quote', 'en', fake()->sentence())
						->setTranslation('quote', 'ka', 'რაღაც ქართული ტექსტი')
						->setAttribute('movie_id', $movieName2->id)
						->save();
			$movieQuote3 = new Quote();
			$movieQuote3
						->setTranslation('quote', 'en', fake()->sentence())
						->setTranslation('quote', 'ka', 'რაღაც ქართული ტექსტი')
						->setAttribute('movie_id', $movieName3->id)
						->save();
		}
	}
}
