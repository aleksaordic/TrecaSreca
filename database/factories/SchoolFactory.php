<?php

namespace Database\Factories;

/*use App\Models\School;*/
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SchoolFactory extends Factory
{    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'city' => $this->faker->city(),
            'mark' => $this->faker->numberBetween($min = 1, $max = 5)
         ];
    }

   
}
