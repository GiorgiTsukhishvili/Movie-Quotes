<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MovieText extends Model
{
	use HasTranslations;

	public $translatable = ['name', 'quote'];
}
