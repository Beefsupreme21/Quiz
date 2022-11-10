<?php

namespace App\Http\Controllers;

use App\Models\Play;
use App\Models\Quiz;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlayRequest;
use App\Http\Requests\UpdatePlayRequest;

class PlayController extends Controller
{
    public function play($id)
    {
        $quiz = Quiz::with(['category', 'category.questions', 'category.questions.answers'])->findOrFail($id);

        return view('play', [
            'quiz' => $quiz,
        ]);
    }

    public function store(Request $request)
    {
        $answers = $request->input();

        dd($answers);

        $questions = $answers->mapWithKeys(function ($answer) {
            return [$answer->question_id => [
                        'answer_id' => $answer->id, 
                        'answer_id' => $answer->text, 
                    ]
                ];
            })->toArray();

        

        $result->questions()->sync($questions);


        // $result = $request->validate([
        //     'answer_id'=> 'required',
        // ]);



        // Question::create($question);

        return redirect('/questions');
    }

}





// public function index()
// {
//     $questions = Question::with('answers')->get();
//     $currentQuestion = $questions->pop(1);
//     $correctAnswer = $currentQuestion->pluck('answer');
//     $wrongAnswers = $questions->pluck('answer')->take(3);
//     $answers = $correctAnswer->merge($wrongAnswers)->shuffle();
    
//     return view('play', [
//         'questions' => $currentQuestion,
//         'answers' => $answers,
//     ]);
// }