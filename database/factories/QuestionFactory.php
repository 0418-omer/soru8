<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'quiz_id'=>rand(1,10),
            'question'=>$this->faker->sentence(rand(3,7)),
            'option1'=>$this->faker->sentence(rand(1,3)),
            'option2'=>$this->faker->sentence(rand(1,3)),
            'option3'=>$this->faker->sentence(rand(1,3)),
            'option4'=>$this->faker->sentence(rand(1,3)),
            'correct_option'=>'option'.rand(1,4)
            
        ];
    }
}
