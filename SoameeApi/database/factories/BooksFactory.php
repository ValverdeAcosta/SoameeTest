<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Authors;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use DB;

class BooksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Books::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authorsIds= DB::table('authors')->pluck('id');

        return [
            'name' => $this->faker->name,
            'isbn' => $this->faker->isbn13,
            'author_id' => $this->faker->randomElement($authorsIds)
        ];
    }
}
