<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::factory()->create([
            'name' => 'Quiz 1',
            'category_id' => '1',
            'user_id' => '2',
        ]);

        Quiz::factory()->create([
            'name' => 'Pokemon Type Quiz',
            'category_id' => '1',
            'user_id' => '1',
        ]);

        Quiz::factory()->create([
            'name' => 'Trivia Quiz',
            'category_id' => '2',
            'user_id' => '3',
        ]);
    }
}
