<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->title(),
            'description' => fake() -> boolean() 
						 ? fake() -> paragraph()
						 : '',
            'main_image'=>fake()->imageUrl(),
            'release_date'=>fake()->date(),
            'repo_link'=>fake()->url(),



        ];
    }
}
