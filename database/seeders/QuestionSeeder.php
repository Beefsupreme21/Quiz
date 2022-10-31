<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::factory()->create([
            'category_id' => '1',
            'text' => 'Which Pokemon is a fire type?',
        ]);

        Question::factory()->create([
            'category_id' => '1',
            'text' => 'Which Pokemon is a water type?',
        ]);

        Question::factory()->create([
            'category_id' => '1',
            'text' => 'Which Pokemon is a flying type?',
        ]);

        Question::factory()->create([
            'category_id' => '1',
            'text' => 'Which Pokemon is a bug type?',
        ]);

        Question::factory()->create([
            'category_id' => '2',
            'text' => 'Which actor starred in Pineapple Express?',
        ]);

        Question::factory()->create([
            'category_id' => '2',
            'text' => 'Which actor starred in Cast Away?',
        ]);
    }
}
