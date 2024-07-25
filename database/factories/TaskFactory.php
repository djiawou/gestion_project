<?php

namespace Database\Factories;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory{
   
    protected $model = Task::class;

    public function definition(){

        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'in-progress','completed']),
            'project_id' => Project::factory(),
        ];
    }

}

