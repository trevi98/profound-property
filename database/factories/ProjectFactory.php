<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6),
            'price' => $this->faker->numberBetween(10000,90000),
            'description' => $this->faker->text(500),
            'cover' => $this->faker->randomElement(['project1.jpg','project2.jpg','project3.jpg']),
            'left' => "1.jpg",
            'right' => "1.jpg",
            'front' => "1.jpg",
            'back' => "1.jpg",
            'dld' => "dld.txt",
            'video' => "vedio",
            'featured' => true,
            'completion_date' => $this->faker->date(),
            'starting_date' => $this->faker->date(),
            'area' => $this->faker->numberBetween(100,1000),
            'location_link' => "location",
            'stores' => $this->faker->numberBetween(1,30),
            'appartments_in_store' => $this->faker->numberBetween(1,20),
            'user_id' => $this->faker->numberBetween(2,3),
            'developer_id' => $this->faker->numberBetween(1,2),
            'project_status_id' => $this->faker->numberBetween(1,3),
            'location_id' => $this->faker->numberBetween(1,15),
            'type_id' => $this->faker->numberBetween(1,4),
        ];
    }
}
