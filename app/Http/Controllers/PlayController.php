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
        $quiz = Quiz::with(['category' => function ($query) {
            $query->with(['questions' => function ($query) {
                $query->inRandomOrder()->with(['answers' => function ($query) {
                    $query->inRandomOrder();
                }]);
            }]);
        }])->findOrFail($id);

        return view('play', [
            'quiz' => $quiz,
        ]);
    }

    public function store(Request $request)
    {
        dd($request);

        $quiz = $request->validate([
            'name'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 1,

        ]);

        Quiz::create($quiz);
        
        return redirect('/quizzes');

        $questions = $answers->mapWithKeys(function ($answer) {
            return [$answer->question_id => [
                        'answer_id' => $answer->id, 
                        'answer_id' => $answer->text, 
                    ]
                ];
            })->toArray();

        

        $result = $request([
            'answer_id'=> 'required',
        ]);



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