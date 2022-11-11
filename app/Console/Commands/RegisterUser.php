<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RegisterUser extends Command
{
	protected $signature = 'command:register';

	protected $description = 'For registering user';

	public function handle()
	{
		$name = $this->ask('What is your username?');
		$email = $this->ask('What is your email?');
		$passowrd = $this->secret('What is your password?');

		if (is_null($name) || is_null($email) || is_null($passowrd))
		{
			$this->error('Something went wrong!');
		}
		else
		{
			$user = new User();
			$user->setAttribute('name', $name)->setAttribute('email', $email)->setAttribute('password', bcrypt($passowrd))->save();

			$this->info('The command was successful!');
		}

		return Command::SUCCESS;
	}
}
