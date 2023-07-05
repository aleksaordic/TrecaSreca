<?php

namespace Database\Factories;

/*use App\Models\Job;*/
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'school_id' => $this->faker->randomDigitNotNull(),
            'people_id' => $this->faker->randomDigitNotNull(),
            'job' => $this->faker->jobTitle()
        ];
    }

   
}
