<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::factory()->create([
            'question_id' => '1',
            'is_correct' => '0',
            'text' => 'Pikachu',
        ]);

        Answer::factory()->create([
            'question_id' => '1',
            'is_correct' => '1',
            'text' => 'Charmander',
        ]);

        Answer::factory()->create([
            'question_id' => '1',
            'is_correct' => '0',
            'text' => 'Squirtle',
        ]);

        Answer::factory()->create([
            'question_id' => '1',
            'is_correct' => '0',
            'text' => 'Bulbasaur',
        ]);

        Answer::factory()->create([
            'question_id' => '2',
            'is_correct' => '0',
            'text' => 'Pikachu',
        ]);

        Answer::factory()->create([
            'question_id' => '2',
            'is_correct' => '0',
            'text' => 'Charmander',
        ]);

        Answer::factory()->create([
            'question_id' => '2',
            'is_correct' => '1',
            'text' => 'Squirtle',
        ]);

        Answer::factory()->create([
            'question_id' => '2',
            'is_correct' => '0',
            'text' => 'Bulbasaur',
        ]);

        Answer::factory()->create([
            'question_id' => '3',
            'is_correct' => '0',
            'text' => 'Tom Cruise',
        ]);

        Answer::factory()->create([
            'question_id' => '3',
            'is_correct' => '1',
            'text' => 'James Franco',
        ]);

        Answer::factory()->create([
            'question_id' => '3',
            'is_correct' => '0',
            'text' => 'Paul Rudd',
        ]);

        Answer::factory()->create([
            'question_id' => '3',
            'is_correct' => '0',
            'text' => 'Jerry Seinfeld',
        ]);

        Answer::factory()->create([
            'question_id' => '4',
            'is_correct' => '1',
            'text' => 'Tom Hanks',
        ]);

        Answer::factory()->create([
            'question_id' => '4',
            'is_correct' => '0',
            'text' => 'James Franco',
        ]);

        Answer::factory()->create([
            'question_id' => '4',
            'is_correct' => '0',
            'text' => 'Paul Rudd',
        ]);

        Answer::factory()->create([
            'question_id' => '4',
            'is_correct' => '0',
            'text' => 'Jerry Seinfeld',
        ]);
    }
}
