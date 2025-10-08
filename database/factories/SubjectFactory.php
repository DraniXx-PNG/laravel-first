<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'name'=> $this->faker->unique()->randomElement([
                'GAME DEV', 
                'MOBILE DEV', 
                'WEB DEV',
                'IOT', 
                'INFORMATIKA'
         ]),        
            'description'=> $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
             
        ];
    }
}
