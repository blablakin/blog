<?php

use Illuminate\Database\Seeder;
use App\Model\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	      factory(Author::class, 15)->create();
    }
}
